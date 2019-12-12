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

			<?php get_template_part( 'template-parts/partials/partial', 'home-hero' ); ?>

			<?php get_template_part( 'template-parts/partials/partial', 'home-donate-box' ); ?>

			<?php if ( get_field( 'show_large_features' ) ) : ?>

				<?php while ( have_rows( 'home_large_features' ) ) : the_row(); ?>

					<?php get_template_part( 'template-parts/partials/partial', 'home-large-feature' ); ?>

				<?php endwhile; ?>

			<?php endif; ?>

			<?php get_template_part( 'template-parts/partials/partial', 'photo-gallery' ); ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
