<?php get_header(); ?>

		<?php
		while ( have_posts() ) :
			
			the_post();

			?>

			<div class="my-content-wrapper-class contact-page">

				<div class="left-column">
				<?php the_content(); ?>
					
				</div>
				<div class="right-column">
					<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					?>
				</div>

			</div>

			<?php

		endwhile; // End of the loop.
		?>

<?php get_footer(); ?>
