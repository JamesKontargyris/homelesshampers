<section class="large-feature large-feature--image-<?php block_field( 'large_feature_layout' ); ?> large-feature--<?php block_field( 'large_feature_colour_scheme' ); ?>">
	<?php if ( $img_id = block_value( 'large_feature_image' ) ) : ?>
        <div class="large-feature__image"
             style="background:url(<?php echo wp_get_attachment_image_src( $img_id, 'banner' )[0]; ?>) center no-repeat; background-size:cover;"></div>
	<?php endif; ?>
    <div class="large-feature__text">

        <h2 class="large-feature__title"><?php block_field('large_feature_title'); ?></h2>

		<?php if ( block_value('large_feature_blurb') ) : ?>
            <div class="large-feature__blurb">
                <p><?php block_field('large_feature_blurb'); ?></p>
            </div>
		<?php endif; ?>

		<?php if ( block_rows( 'large_feature_buttons' ) ) : ?>
            <div class="large-feature__cta">
				<?php while ( block_rows( 'large_feature_buttons' ) ) : block_row('large_feature_buttons'); ?>
                    <a href="<?php block_sub_field('large_feature_button_url'); ?>"
                       class="btn btn--<?php block_sub_field('large_feature_button_type'); ?>"><?php block_sub_field('large_feature_button_text'); ?></a>
				<?php endwhile; ?>
            </div>
		<?php endif; reset_block_rows( 'large_feature_buttons' ); ?>
    </div>
</section>