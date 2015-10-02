<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="about contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-md-12">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<div class="well">
							<?php
								get_sidebar();
							?>
						</div>
					</div>
					<div class="col-sm-9 main-content">
						<div class="card">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
							?>
							<header style="background-image: url(<?=$url?>);">
								<div class="overlay">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							</header>
							<article>
								<div class="row">
									<div class="col-sm-6">
										<?php the_content(); ?>
									</div>
									<div class="col-sm-6">
										<div class="well motif">
											<address class="address">
												<span>Fruit Street</span>
												<span>85 Broad Street</span>
												<span>New York, NY 10004</span>
											</address>
											<hr>
											<address class="details">
												<span><strong>Phone: </strong><a href="tel:6179810920">1-617-981-0920</a></span>
												<span><strong>Email: </strong><a href="mailto: laurence@fruitstreet.com?subject=New Contact Inquiry" target="_blank">laurence@fruitstreet.com</a></span>
											</address>
										</div>
										<div class="google-map">
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12614.742836221516!2d-122.38716!3d37.773967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43f71d878b4ae770!2sBauer&#39;s+Intelligent+Transportation!5e0!3m2!1sen!2sus!4v1424976017685" width="600" height="500" frameborder="0" style="border:0"></iframe>
										</div>
									</div>
								</div>
							</article>
							

							<?php wp_reset_postdata(); ?>
							
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function($){

		// Adding a method for US phone numbers
		jQuery.validator.addMethod("phoneUS", function(value, element) {
			// allow any non-whitespace characters as the host part
			return this.optional( element ) || /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$/.test( value );
		}, 'Enter a valid phone number.');

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");

		$('#contact-form').validate();

	});
</script>

<?php get_footer(); ?>
