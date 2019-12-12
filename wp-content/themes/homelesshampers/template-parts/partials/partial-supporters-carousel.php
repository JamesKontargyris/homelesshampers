<?php if ( get_field( 'home_show_supporters_carousel' ) ) : ?>

    <section class="supporters-showcase">
        <h5 class="supporters-showcase__title"><?php the_field( 'home_supporters_title' ); ?></h5>
		<?php if ( get_field( 'home_supporters' ) ) : ?>
            <ul class="supporters-showcase__carousel">
				<?php foreach ( get_field( 'home_supporters' ) as $supporter_id ) : ?>
                    <li>
						<?php if ( get_field( 'supporter_url', $supporter_id ) ) : ?>
                        <a href="<?php the_field( 'supporter_url', $supporter_id ) ?>" target="_blank">
							<?php endif; ?>
                            <img src="<?php echo wp_get_attachment_image_src( get_field( 'supporter_logo', $supporter_id ), 'supporters-showcase' )[0]; ?>"
                                 alt="<?php echo get_the_title( $supporter_id ); ?>"
                                 title="<?php echo get_the_title( $supporter_id ); ?>">
							<?php if ( get_field( 'supporter_url', $supporter_id ) ) : ?>
                        </a>
					<?php endif; ?>
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>
		<?php if ( get_field( 'home_supporters_button_text' ) ) : ?>
            <div class="supporters-showcase__cta">
                <a href="/supporters" class="btn btn--primary"><?php the_field( 'home_supporters_button_text' ); ?></a>
            </div>
		<?php endif; ?>
    </section>

<?php endif; ?>