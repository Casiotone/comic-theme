<?php get_header(); ?>

	<style>

		.entry-header {
			display: none;
			}

	</style>

	<div class="content-home">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
	</div>

<?php get_footer(); ?>
