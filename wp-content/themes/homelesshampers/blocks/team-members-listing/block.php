<div class="team-member-container">

	<?php
	$team_members = get_team_members();

	while ( $team_members->have_posts() ) : $team_members->the_post();

		get_template_part( 'template-parts/partials/partial', 'team-member' );

	endwhile;
	wp_reset_postdata();
	?>

</div>
