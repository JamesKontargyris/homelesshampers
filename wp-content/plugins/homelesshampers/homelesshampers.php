<?php
/*
Plugin Name: Site Plugin for Homeless Hampers website
Description: Site specific code changes for Homeless Hampers website
*/

require_once( ABSPATH . 'vendor/autoload.php' ); // autoload composer packages

$dotenv = Dotenv\Dotenv::createImmutable( ABSPATH );
$dotenv->load();

function facebook_likes_count( $page_id ) {
	// customize: "https://facebook.com/[customize]"
	$url = "https://facebook.com/$page_id"; // by name
	//$url = "https://facebook.com/282374908483303"; // or by id

	// customize: "locale=[customize]&" to your needs
	$ch = curl_init( "https://www.facebook.com/v2.5/plugins/like.php?href=" . $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_USERAGENT, 'Safari' );
	$html = curl_exec( $ch );

	//die( var_dump( $html ) ); // <- debug fetched data
	// have a look for the data you need and customize your regex pattern accordingly
	// "preg_match([customize], $html, $match);"
	preg_match( "/([0-9,.]+[a-zA-Z,\S]) people like this./", $html, $match );
	$likes = $match[1];
	//$likes = str_replace(array(".", "K"), array("", "000"), $likes); // <- customize output | remove ".", replace "K" with "000"
	//$likes = (float)$likes; // <- customize output | change type to float, strips prepending non-digits (eg: "K") as well
	return $likes;
}

function twitter_followers_count( $twitter_handle ) {
	// some variables
	$consumerKey    = $_ENV['TWITTER_CONSUMER_KEY'];
	$consumerSecret = $_ENV['TWITTER_CONSUMER_SECRET'];
	$token          = get_option( 'cfTwitterToken' );

	// get follower count from cache
	$numberOfFollowers = get_transient( 'cfTwitterFollowers' );

	// cache version does not exist or expired
	if ( false === $numberOfFollowers ) {
		// getting new auth bearer only if we don't have one
		if ( ! $token ) {
			// preparing credentials
			$credentials = $consumerKey . ':' . $consumerSecret;
			$toSend      = base64_encode( $credentials );

			// http post arguments
			$args = array(
				'method'      => 'POST',
				'httpversion' => '1.1',
				'blocking'    => true,
				'headers'     => array(
					'Authorization' => 'Basic ' . $toSend,
					'Content-Type'  => 'application/x-www-form-urlencoded;charset=UTF-8'
				),
				'body'        => array( 'grant_type' => 'client_credentials' )
			);

			add_filter( 'https_ssl_verify', '__return_false' );
			$response = wp_remote_post( 'https://api.twitter.com/oauth2/token', $args );

			$keys = json_decode( wp_remote_retrieve_body( $response ) );

			if ( $keys ) {
				// saving token to wp_options table
				update_option( 'cfTwitterToken', $keys->access_token );
				$token = $keys->access_token;
			}
		}
		// we have bearer token wether we obtained it from API or from options
		$args = array(
			'httpversion' => '1.1',
			'blocking'    => true,
			'headers'     => array(
				'Authorization' => "Bearer $token"
			)
		);

		add_filter( 'https_ssl_verify', '__return_false' );
		$api_url  = "https://api.twitter.com/1.1/users/show.json?screen_name=$twitter_handle";
		$response = wp_remote_get( $api_url, $args );

		if ( ! is_wp_error( $response ) ) {
			$followers         = json_decode( wp_remote_retrieve_body( $response ) );
			$numberOfFollowers = $followers->followers_count;
		} else {
			// get old value and break
			$numberOfFollowers = get_option( 'cfNumberOfFollowers' );
			// uncomment below to debug
			//die($response->get_error_message());
		}

		// cache for half an hour
		set_transient( 'cfTwitterFollowers', $numberOfFollowers, 1 * 60 * 30 );
		update_option( 'cfNumberOfFollowers', $numberOfFollowers );
	}

	return (float) $numberOfFollowers;
}

// Disable Gutenberg editor for certain post types
add_filter( 'use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2 );
function prefix_disable_gutenberg( $current_status, $post_type ) {
	// Use your post type key instead of 'product'
	if ( $post_type === 'team_member' || $post_type === 'supporter' ) {
		return false;
	}

	return $current_status;
}

// Friendly URL
function friendly_url( $url ) {
	// in case scheme relative URI is passed, e.g., //www.google.com/
	$url = trim( $url, '/' );

// If scheme not included, prepend it
	if ( ! preg_match( '#^http(s)?://#', $url ) ) {
		$url = 'http://' . $url;
	}

	$urlParts = parse_url( $url );

// remove www
	$domain = preg_replace( '/^www\./', '', $urlParts['host'] );

	return $domain;
}


// Get team members
function get_team_members( $count = 9999, $offset = 0, $ignore_ids = [], $random = false ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'team_member',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
	];

	if ( $random ) {
		$args['orderby'] = 'rand';
	}

	return new WP_Query( $args );
}

// Get supporters
function get_supporters( $count = 9999, $offset = 0, $ignore_ids = [], $random = false ) {
	$args = [
		'post_status'    => 'publish',
		'post_type'      => 'supporter',
		'posts_per_page' => $count,
		'post__not_in'   => $ignore_ids,
		'offset'         => $offset,
	];

	if ( $random ) {
		$args['orderby'] = 'rand';
	}

	return new WP_Query( $args );
}