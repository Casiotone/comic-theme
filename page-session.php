<?php get_header(); ?>

		<?php
		while ( have_posts() ) :

			the_post();

			?>

			<div class="page-content page-session">

				<h1 class="page-content__title"><?php the_title(); ?></h1>

				<div class="page-content__columns">

					<div class="page-content__columns--left">
						<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						?>	
					</div>
				
					<div class="page-content__columns--right">
						<?php the_content(); ?>
					</div>
				
				</div>

			</div>
			</div>

			<?php

		endwhile; // End of the loop.
		?>


<?php get_footer(); ?>
