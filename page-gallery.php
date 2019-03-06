<?php get_header(); ?>

<?php

	while ( have_posts() ) :

		the_post();

		?>

		<div class="my-content-wrapper-class">

			<?php the_content(); ?>

		</div>

	<?php

	endwhile; // End of the loop.
	?>

<div class="insta-images">

	<img id="hero" class="hero-img"/>

	<div id="grid" class="grid-images"></div>

	<button id="more" style="display: none;">Load more</button>

</div>

<script type="text/javascript">
(function($) {
	var key = '2237041594.1677ed0.c6f7cfb38a6846fe975ececb2cb484b3',
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
			$hero.attr('src', hero.images.standard_resolution.url);
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
