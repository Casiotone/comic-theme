<?php get_header(); ?>

<?php
while ( have_posts() ) :

	the_post();

	?>

	<div class="page-content page-gallery">

		<h1 class="page-content__title"><?php the_title(); ?></h1>

		<div class="page-content__row"><?php the_content(); ?></div>

		<div class="page-content__row">
			<div class="insta-images">
				<img id="hero" class="hero-img"/>
				<div id="grid" class="grid-images"></div>
				<button id="more" style="display: none;">Load more</button>
			</div>
		</div>

	</div>

	<?php

endwhile; // End of the loop.
?>



<script type="text/javascript">
(function($) {
	var key = '6836785562.1677ed0.6abb79320011468a89615fa19c40159c',
		url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=' + key,
		init = true,
		$more = $('#more').click(loadImages),
		$grid = $('#grid'),
		$hero = $('#hero');

	function renderResults(results) {
		console.log(results);
		url = results.pagination.next_url;

		if (url) {
			$more.show();
		} else {
			$more.hide();
		}

		var data = results.data;

		if (init) {
			var hero = data.shift();
			$hero.attr('src', hero.images.low_resolution.url);
			init = false;
		}

		var item;

		for(var i = 0; i < data.length; i++) {
			item = $('<img class="thumbnail">').attr('src', data[i].images.low_resolution.url);
			$grid.append(item);
		}

	}

	function loadImages() {
		$.ajax({
			url: url,
			success: renderResults
		});
	}

	loadImages();

})(jQuery);



</script>


<?php get_footer(); ?>
