<?php get_header(); ?>

		<?php
		while ( have_posts() ) :

			the_post();

			?>

			<div class="my-content-wrapper-class session-page">

				<div class="left-column">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					?>
				</div>
				<div class="right-column">
					<?php the_content(); ?>
				</div>

			</div>

			<?php

		endwhile; // End of the loop.
		?>


<?php get_footer(); ?>
