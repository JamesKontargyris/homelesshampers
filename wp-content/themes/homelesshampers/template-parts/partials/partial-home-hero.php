<section class="hero hero--home" <?php if(get_field('hero_background_image')) : $image = get_field('hero_background_image'); ?>style="background:linear-gradient(to bottom, rgba(0,0,0,0.5) 0, rgba(0,0,0,0.5) 100%), url(<?php echo wp_get_attachment_image_src($image, 'banner')[0]; ?>) center no-repeat; background-size:cover;" <?php endif; ?>>
	<div class="hero__content">

        <h2 class="hero__title"><?php the_field('hero_main_title'); ?></h2>

        <?php if(get_field('hero_blurb')) : ?>
		    <p class="hero__blurb"><?php the_field('hero_blurb'); ?></p>
		<?php endif; ?>

		<?php if(have_rows('hero_buttons')) : ?>
        <div class="hero__buttons">
	        <?php while(have_rows('hero_buttons')) : the_row(); ?>
			    <a href="<?php the_sub_field('hero_button_destination'); ?>" class="btn btn--<?php the_sub_field('hero_button_type'); ?> btn--large"><?php the_sub_field('hero_button_text'); ?></a>
	        <?php endwhile; ?>
		</div>
		<?php endif; ?>

	</div>
</section>