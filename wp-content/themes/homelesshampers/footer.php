<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package homelesshampers
 */

$homepage = get_page_by_path('/');
$homepage_id = $homepage->ID; // footer fields are managed on the homepage in the CMS

?>

</div><!-- #content -->

<footer class="site__footer">

    <div class="site__footer__social-media-donate-container">
        <div class="site__footer__social-media-donate-wrapper">

            <div class="site__footer__social-media">
                <div class="site__footer__social-media__facebook">
                    <div class="site__footer__social-media__title site__footer__social-media__title--facebook">
	                    <?php the_field('footer_facebook_title', $homepage_id); ?>
                    </div>
                    <p class="site__footer__social-media__number">
	                    <?php echo facebook_likes_count(get_field('footer_facebook_page_id', $homepage_id)); ?>
                    </p>
                    <a href="https://facebook.com/<?php the_field('footer_facebook_page_id', $homepage_id) ?>" target="_blank" class="btn btn--secondary"><?php the_field('footer_facebook_button_text', $homepage_id); ?></a>
                </div>
                <div class="site__footer__social-media__twitter">
                    <div class="site__footer__social-media__title site__footer__social-media__title--twitter">
	                    <?php the_field('footer_twitter_title', $homepage_id); ?>
                    </div>
                    <p class="site__footer__social-media__number">
	                    <?php echo number_format(twitter_followers_count( get_field( 'footer_twitter_handle', $homepage_id ) )); ?>
                    </p>
                    <a href="https://twitter.com/<?php the_field( 'footer_twitter_handle', $homepage_id ) ?>" target="_blank" class="btn btn--secondary"><?php the_field('footer_twitter_button_text', $homepage_id); ?></a>
                </div>

            </div>
            <div class="site__footer__donate-box">
                <h5><?php the_field('footer_donate_box_title', $homepage_id); ?></h5>
                <p><?php the_field('footer_donate_box_blurb', $homepage_id); ?></p>
                <form action="/" method="POST" class="site__footer__donate-box__form">
                    <input type="text" name="amount" placeholder="Enter amount...">
                    <button type="submit"><?php the_field('footer_donate_box_button_text', $homepage_id); ?></button>
                </form>
            </div>

        </div>
    </div>

    <div class="site__footer__legal-container">
        <div class="site__footer__legal">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'menu_class'     => 'site__footer__legal__menu',
			) );
			?>

            <div class="site__footer__legal__copyright">
                &copy; Homeless Hampers 2019. All rights reserved.<br>Registered charity number 12345678. <a
                        href="<?php echo get_privacy_policy_url(); ?>">Privacy policy</a>
            </div>

        </div>
    </div>

</footer><!-- .site__footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
