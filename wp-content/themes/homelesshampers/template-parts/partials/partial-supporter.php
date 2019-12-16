<section class="supporter">
    <div class="supporter__content">
		<?php if ( get_field( 'supporter_logo' ) ) : ?>
            <div class="supporter__logo"
                 style="background:url(<?php echo wp_get_attachment_url( get_field( 'supporter_logo' ), 'full' ); ?>) center no-repeat; background-size:contain;"></div>
		<?php endif; ?>
        <h5 class="supporter__name"><?php the_title(); ?></h5>
		<?php if ( get_field( 'supporter_description' ) ) : ?>
            <div class="supporter__description"><?php the_field( 'supporter_description' ); ?></div>
		<?php endif; ?>
    </div>
	<?php if ( get_field( 'supporter_url' ) ) : ?>
        <div class="supporter__url">
            <a href="<?php the_field( 'supporter_url' ); ?>" target="_blank">
				<?php echo friendly_url( get_field( 'supporter_url' ) ); ?>
            </a>
        </div>
	<?php endif; ?>
</section>