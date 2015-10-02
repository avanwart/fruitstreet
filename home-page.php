<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<section class="hero">
	<div class="container">
		<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-1">
			<h1>Telemedicine Within Reach</h1>
			<h2>Meaningfully engage patients &amp; monitor health data with our <br>HIPAA compliant video software for your practice.</h2>
			<a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
		</div>
	</div>
</section>
<section class="logos lightGrey">
	<div class="container">
		<div class="row">
			<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/library/images/bloomberg-logo.jpg" alt=""></div>
			<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/library/images/reuters-logo.jpg" alt=""></div>
			<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/library/images/yahoo-logo.jpg" alt=""></div>
			<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/library/images/wired-logo.jpg" alt=""></div>
			<div class="logo health"><img src="<?php bloginfo('template_directory'); ?>/library/images/health-logo.jpg" alt=""></div>
			</div>
		</div>
	</div>
</section>

<!-- Example of a section with a tabbed interface -->
<section class="features ash" id="features">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="push">Product Features</h1>
			</div>
		</div>
		<!-- For mobile, don't use tabs -->
		<div class="row visible-xs">
			<div class="col-sm-12">
				<ul>
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
					<li><a href="#">Link 5</a></li>
				</ul>
				<div class="text-center">
					<a class="btn btn-lg btn-primary" href="#">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<div role="tabpanel" class="tabbable hidden-xs">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Telehealth Clinic</a></li>
						<li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">Powered by VSee</a></li>
						<li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab">Device Integration</a></li>
						<li role="presentation"><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab">Provider Portal</a></li>
						<li role="presentation" class="hidden-sm"><a href="#tab5" aria-controls="settings" role="tab" data-toggle="tab">Patient Portal</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active motif" id="tab1">
							<div class="row">
								<div class="col-sm-8">
									<h3>HIPAA Compliant Telehealth Clinic</h3>
									<p>Fruit Street is designed for healthcare professionals who want to conduct HIPAA compliant video consultations with their patients and monitor/influence the diet and lifestyle of their patients using wearable devices and mobile applications. Fruit Street is a 100% HIPAA compliant telehealth solution.</p>
									<a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a><a href="?p=498" class="btn btn-lg btn-default">Take the product tour <i class="glyphicon glyphicon-chevron-right"></i></a>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade vsee" id="tab2">
							<div class="row">
								<div class="col-sm-8">
									<h3>HIPAA Compliant Video Powered by VSee</h3>
									<p>Fruit Street enables healthcare professionals to conduct HIPAA compliant video consultations with their patients. The video engine found within Fruit Street is called VSee, which is the world’s most bandwidth efficient video conferencing technology. This means that you will be able to have high definition video calls with your patients without worrying about dropped calls or a choppy connection. VSee is so bandwidth efficient that is was selected by NASA for use on the International Space Station. VSee is a HIPAA compliant, FDA-registered video conferencing telehealth solution.</p>
									<a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a><a href="?p=516" class="btn btn-lg btn-default">More on HIPAA Compliance <i class="glyphicon glyphicon-chevron-right"></i></a>
								</div>
								<div class="col-sm-4">
									<img src="<?php bloginfo('template_directory'); ?>/library/images/vsee-logo.jpg" class="img-responsive" alt="">
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade fitbit" id="tab3">
							<div class="row">
								<div class="col-sm-8">
									<h3>Wearable Device &amp; Mobile App Integration</h3>
									<p>The Fruit Street personal health record allows patients to upload data from wearable devices such as the FitBit Flex and FitBit Aria Scale. The Fruit Street mobile app also allows patients to share a visual food diary with their healthcare provider. Fruit Street will soon also integrate with FDA-approved blood pressure cuffs and glucometers for blood pressure and glucose monitoring. This wearable device and mobile app integration allows healthcare professionals to accurately monitor the diet and lifestyle of their patients’ in real time.</p>
									<a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a><a href="?p=498" class="btn btn-lg btn-default">Take the product tour <i class="glyphicon glyphicon-chevron-right"></i></a>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade provider" id="tab4">
							<h3>Provider Portal</h3>
							<div class="row">
								<div class="col-sm-7">
									<p>The Fruit Street telehealth portal offers one interface for patients and one interface for healthcare professionals. The provider interface is designed for registered dietitians, primary care physicians, cardiologists, bariatric surgeons, health coaches, and other healthcare professionals that wish to set up a telehealth clinic. This HIPAA compliant telehealth portal was designed with the input of more than 50 physicians on our advisory board and we’re constantly adding new features based on feedback from our users.</p>
									<a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a><a href="?p=498" class="btn btn-lg btn-default">Take the product tour <i class="glyphicon glyphicon-chevron-right"></i></a>
								</div>
								<div class="col-sm-4">
									<img src="<?php bloginfo('template_directory'); ?>/library/images/provider.jpg" class="img-responsive img-thumbnail" alt="">
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade patient" id="tab5">
							<h3>Patient Portal</h3>
							<div class="row">
								<div class="col-sm-7">
									<p>The Fruit Street portal allows patients to communicate and conduct video consultations with their patients in a HIPAA compliant fashion. Each patient has a personal health record which integrates with wearable devices and mobile applications such as the Fitbit Flex and FitBit Aria scale. These devices and apps provide data such as physical activity, sleep, heart rate, and dietary intake. These devices sync wirelessly with the Fruit Street personal health record and send data to the patient’s health care provider in real time.</p>
									<div class="text-center"><a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a><a href="?p=498" class="btn btn-lg btn-default">Take the product tour <i class="glyphicon glyphicon-chevron-right"></i></a></div>
								</div>
								<div class="col-sm-4">
									<img src="<?php bloginfo('template_directory'); ?>/library/images/patient2.jpg" class="img-responsive img-thumbnail" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Example of how we do pricing -->
<section class="pricing" id="pricing">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="flat">Simple Pricing.</h2>
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

<!-- Example of how we do testimonials -->
<section class="testimonials mint">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Doctors &amp; Hospitals <i class="glyphicon glyphicon-heart"></i> Us</h1>
			</div>
		</div>
		<!-- Get Testimonials Custom Fields from the Page -->
		<?php if(get_field('testimonials')): ?>
		<div class="row">
			<!-- open the Repeater loop -->
			<?php while(has_sub_field('testimonials')): ?>
			<div class="col-sm-4 text-center">
				<img class="thumbnail img-circle" src="<?php the_sub_field('headshot'); ?>" alt="">
				<blockquote>
					<?php the_sub_field('quote'); ?> <small><?php the_sub_field('name'); ?>	<em><?php the_sub_field('company'); ?></em></small>
				</blockquote>
			</div>
			<?php endwhile; ?>
			<!-- close the Repeater loop -->
		</div>
		<?php endif; ?>
		<!-- End of Testimonials dynamic content -->
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>Who else loves us? <a href="?p=488">More testimonials &raquo;</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="faq motif">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h1 class="push">Frequently Asked Questions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<!-- Get FAQ Repeater custom fields from this Page -->
				<?php if(get_field('faq')): ?>
					<div class="panel-group" id="accordion">
					<!-- open the loop -->
					<?php while(has_sub_field('faq')): ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
										<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>	<?php the_sub_field('question'); ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
								<div class="panel-body">
									<?php the_sub_field('answer'); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- close the loop -->
					</div>
				<?php endif; ?>
				<!-- end of Repeater custom fields and dynamic content -->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center">
					Don't see your question here?  <a href="?p=510">More FAQs &raquo;</a><br><br>
					<a href="#hero" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
				</p>
			</div>
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function($){

		// If there's a carousel on the page, activate it
		$('.carousel').carousel();

		// Activate toolips
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});

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