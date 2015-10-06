<?php
/*
Template Name: Sign Up
*/
?>

<?php get_header(); ?>

<section class="standard signup">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 main-content text-center">
				<div class="card">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1 class="text-center">Start Your Free 14 Day Trial</h1>
							<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
	jQuery(document).ready(function($){

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");



	});
</script>