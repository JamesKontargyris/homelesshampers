<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homelesshampers
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

			<?php
			get_template_part( 'template-parts/content', 'page' );
			?>

            <div class="page__content">
                <p>Sorry, we can't find the page you were looking for. Please use the links in the menu above to navigate to another page.</p>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
