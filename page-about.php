<?php get_header(); ?>

		<?php
		while ( have_posts() ) :

			the_post();

			?>

			<div class="page-about">

				<h1 class="page-content__title"><?php the_title(); ?></h1>

					<div class="page-about-content">

						<?php the_content(); ?>

					</div>

			</div> 

			<?php

		endwhile; // End of the loop.
		?>

<?php get_footer(); ?>
