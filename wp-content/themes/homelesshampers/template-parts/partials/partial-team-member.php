<section class="team-member">
	<?php if ( get_field( 'team_member_photo' ) ) : ?>
        <div class="team-member__photo"><img src="<?php echo wp_get_attachment_url(get_field('team_member_photo'), 'team-member'); ?>" alt="<?php the_title(); ?>"></div>
	<?php endif; ?>
    <div class="team-member__text">
        <h4 class="team-member__name"><?php the_title(); ?></h4>
		<?php if ( get_field( 'team_member_position' ) ) : ?>
            <div class="team-member__position"><?php the_field( 'team_member_position' ); ?></div>
		<?php endif; ?>
        <div class="team-member__short-bio"><?php the_field( 'team_member_short_bio' ); ?></div>

		<?php if ( get_field( 'team_member_full_bio' ) ) : ?>
            <div class="team-member__full-bio"><?php the_field( 'team_member_full_bio' ); ?></div>
            <a href="#" class="btn btn--secondary team-member__read-more-button">Read More</a>
		<?php endif; ?>
    </div>
</section>
