<?php
/*
Template Name: Pricing
*/
?>

<?php get_header(); ?>
<div class="pricing">
	<section class="hero">
		<div class="container">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
				<h1>Get Started Now for $0</h1>
				<h2>Try it now, free for 14 days.</h2>
				<a href="<?php bloginfo('url'); ?>/sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</section>

	<section class="plans">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Simple Pricing.</h2>
					<p class="intro">Try it free for 14 days.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<h2>Monthly</h2>
								<h3>$300/mo.</h3>
								<a href="#" class="btn btn-primary btn-lg">Get Started <i class="glyphicon glyphicon-chevron-right"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="save">Save<br>20%</div>
								<h2>Yearly</h2>
								<h3>$20/mo.</h3>
								<a href="#" class="btn btn-primary btn-lg">Get Started <i class="glyphicon glyphicon-chevron-right"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<h2>Enterprise</h2>
								<h3><small>Contact for Pricing</small></h3>
								<a href="contact" class="btn btn-primary btn-lg">Contact Us <i class="glyphicon glyphicon-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="about light">
		<div class="container">
			<div class="row">
				<div class="col-lg-11 col-md-12">
					<div class="row">
						<h3>The Fruit Street App</h3>
						<ul>
							<li>Patients can easily track their physical activity levels using wearable devices and view your FitBit data (coming soon)
								</li>
							<li> The user dashboard provides patients with a snapshot of number of steps taken, hours slept, calories burned, heart rate, blood pressure and blood glucose. </li>
							<li>Easily create a food diary and take notes alongside your images </li>
							<li>View goals your healthcare provider sets for you (coming soon)					    </li>
							<li>Conduct a video consultation with your healthcare provider (coming soon) </li>
									</ul>
					</div>
				</div>			
			</div>
					
		</div>
	</section> -->
</div>

<script>
	jQuery(document).ready(function($){

		// Initialize accordion UI and open the first accordion panel
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Smooth Scroll Functionality
		$('.scroll, .scroll a').smoothScroll({
			offset: 0,
			easing: 'swing'
		});


		// Find out what browser they're using
		var userAgent = window.navigator.userAgent;

		// If ipad or iphone, do something
		if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) {
			
		}
		// Use below if not iPad or iPhone
		else {
			
		}

	});
</script>

<?php get_footer(); ?>