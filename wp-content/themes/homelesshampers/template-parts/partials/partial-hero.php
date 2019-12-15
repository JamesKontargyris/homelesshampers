<section class="hero" <?php if(get_field('hero_background_image')) : $image = get_field('hero_background_image'); ?>style="background:linear-gradient(to bottom, rgba(0,0,0,1) 0, rgba(0,0,0,0) 12rem), url(<?php echo wp_get_attachment_image_src($image, 'banner')[0]; ?>) center no-repeat; background-size:cover;" <?php endif; ?>>
	<div class="hero__content">

        <h1 class="hero__title"><?php the_title(); ?></h1>

	</div>
</section>