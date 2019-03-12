<?php get_header(); ?>

		<?php
		while ( have_posts() ) :

			the_post();

			?>

			<div class="page-contact">

				<h1 class="page-contact__title"><?php the_title(); ?></h1>

					<div class="page-contact-content">

						<?php the_content(); ?>

					</div>

			</div>

			<?php

		endwhile; // End of the loop.
		?>

<?php get_footer(); ?>
