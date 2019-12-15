<section class="button-group button-group--<?php block_field('button_group_align'); ?>">
	<?php if(block_rows('button_group_buttons')) : ?>
		<?php while(block_rows('button_group_buttons')) : block_row('button_group_buttons'); ?>
			<a href="<?php block_sub_field('button_group_button_url'); ?>" class="btn btn--<?php block_sub_field('button_group_button_type'); ?> btn--<?php block_field('button_group_button_size'); ?>"><?php block_sub_field('button_group_button_text'); ?></a>
		<?php endwhile; ?>
	<?php endif; ?>
</section>