<?php get_header(); ?>

		<?php
		while ( have_posts() ) :

			the_post();

			?>

			<div class="page-session">

				<h1 class="page-content__title"><?php the_title(); ?></h1>

					<div class="page-session-content">

						<?php the_content(); ?>

					</div>

			</div>

			<?php

		endwhile; // End of the loop.
		?>


<?php get_footer(); ?>
