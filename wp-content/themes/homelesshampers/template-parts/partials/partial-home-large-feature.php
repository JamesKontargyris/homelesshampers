<section class="large-feature large-feature--image-<?php the_sub_field('home_large_feature_layout'); ?>">
    <div class="large-feature__image"
         style="background:url(<?php echo wp_get_attachment_image_src(get_sub_field('home_large_feature_image'), 'banner')[0]; ?>) center no-repeat; background-size:cover;"></div>
    <div class="large-feature__text">

        <h2 class="large-feature__title"><?php the_sub_field( 'home_large_feature_title' ); ?></h2>

		<?php if ( get_sub_field( 'home_large_feature_blurb' ) ) : ?>
            <div class="large-feature__blurb">
                <p><?php the_sub_field( 'home_large_feature_blurb' ); ?></p>
            </div>
		<?php endif; ?>

		<?php if ( have_rows( 'home_large_feature_buttons' ) ) : ?>
            <div class="large-feature__cta">
				<?php while ( have_rows( 'home_large_feature_buttons' ) ) : the_row(); ?>
                    <a href="<?php the_sub_field('home_large_feature_button_destination'); ?>" class="btn btn--<?php the_sub_field('home_large_feature_button_type'); ?>"><?php the_sub_field('home_large_feature_button_text'); ?></a>
				<?php endwhile; ?>
            </div>
		<?php endif; ?>
    </div>
</section>