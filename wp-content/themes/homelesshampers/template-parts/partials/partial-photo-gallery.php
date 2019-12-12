<?php if ( get_field( 'home_show_photo_gallery' ) ) : ?>

    <section class="photo-gallery">
        <div class="photo-gallery__yellow-bar"></div>
        <div class="photo-gallery__title-and-controls">
            <h4 class="photo-gallery__title"><?php the_field('home_photo_gallery_title'); ?></h4>
            <div class="photo-gallery__controls">
                <button class="photo-gallery__control photo-gallery__control--prev slick--prev"
                        data-carousel=".photo-gallery__carousel">&lt;
                </button>
                <button class="photo-gallery__control photo-gallery__control--next slick--next"
                        data-carousel=".photo-gallery__carousel">&gt;
                </button>
            </div>
        </div>
        <ul class="photo-gallery__carousel">
			<?php foreach ( get_field( 'home_photo_gallery_photos' ) as $image ) : ?>
                <li>
                    <a href="<?php echo esc_url($image['url']); ?>" data-featherlight="image">
                        <img src="<?php echo esc_url($image['sizes']['photo-gallery-thumb']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
                    </a>
                </li>
			<?php endforeach; ?>
        </ul>
    </section>

<?php endif; ?>