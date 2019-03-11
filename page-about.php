<?php get_header(); ?>

		<?php
		while ( have_posts() ) :

			the_post();

			?>

            <!-- === NEED TO CREATE ONE CENTRAL COLUMN LAYOUT ===== -->

			<div class="page-content-single-column">

				<h1 class="page-content__title"><?php the_title(); ?></h1>

					<div class="page-about">

						<?php the_content(); ?>

					</div>

			</div> --->

			<?php

		endwhile; // End of the loop.
		?>

<?php get_footer(); ?>
