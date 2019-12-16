<?php $supporters = get_supporters(); ?>

<div class="supporter-container">

	<?php while ( $supporters->have_posts() ) : $supporters->the_post(); ?>

		<?php get_template_part( 'template-parts/partials/partial', 'supporter' ); ?>

	<?php

	endwhile;
	wp_reset_postdata();

	?>
</div>