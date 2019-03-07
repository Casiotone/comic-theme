<?php get_header(); ?>

		<?php
		while ( have_posts() ) :
			
			the_post();

			?>

			<div class="page-content page-payment">

				<h1 class="page-content__title"><?php the_title(); ?></h1>

				<div class="page-content__columns">

					<div class="page-content__columns--left">
						<?php the_content(); ?>
					</div>
				
					<div class="page-content__columns--right">
						<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal Logo">
					</div>
				
				</div>

				<div class="page-content__row">
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
