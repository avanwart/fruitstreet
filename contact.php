<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="contact standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 card flush">
						<h1 class="page-title">Contact Us</h1>
						<div class="row">
							<div class="col-sm-6 form">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="contact-form">

										<input type=hidden name="oid" value="00DE0000000IvUX">
										<input type=hidden name="retURL" value="<?php bloginfo('url'); ?>/contact-thank-you">

										<!--  ----------------------------------------------------------------------  -->
										<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
										<!--  these lines if you wish to test in debug mode.                          -->
										<!--  <input type="hidden" name="debug" value=1>                              -->
										<!--  <input type="hidden" name="debugEmail" value="ckwak@bauersit.com">      -->
										<!--  ----------------------------------------------------------------------  -->

										<div class="form-group">
											<label for="first_name">First Name *</label>
											<input class="form-control" id="first_name" maxlength="40" name="first_name" size="20" type="text" required=""/>
										</div>

										<div class="form-group">
											<label for="last_name">Last Name *</label>
											<input class="form-control" id="last_name" maxlength="80" name="last_name" size="20" type="text" required=""/>
										</div>

										<div class="form-group">
											<label for="company">Company *</label>
											<input class="form-control" id="company" maxlength="40" name="company" size="20" type="text" required=""/>
										</div>

										<div class="form-group">
											<label for="email">Email *</label>
											<input class="form-control" id="email" maxlength="80" name="email" size="20" type="email" required=""/>
										</div>

										<div class="form-group">
											<label for="phone">Phone *</label>
											<input class="form-control phoneUS" id="phone" maxlength="40" name="phone" size="20" type="tel" required=""/>
										</div>

										<div class="form-group">
											<label for="description">Message</label>
											<textarea name="description" class="form-control"></textarea>
										</div>

										<button class="btn btn-lg btn-primary" type="submit" name="submit">Submit my inquiry <i class="glyphicon glyphicon-chevron-right"></i></button>

									</form>
								<?php endwhile; endif; ?>
							</div>
							<div class="col-sm-6">
								<div class="well">
									<address class="address">
										<span>Event Logistics Management</span>
										<span>50 Pier</span>
										<span>San Francisco, CA 94158</span>
									</address>
									<hr>
									<address class="details">
										<span><strong>Phone: </strong>1-877-943-3824</span>
										<span><strong>Fax: </strong>415-522-1600</span>
									</address>
								</div>
								<div class="google-map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12614.742836221516!2d-122.38716!3d37.773967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43f71d878b4ae770!2sBauer&#39;s+Intelligent+Transportation!5e0!3m2!1sen!2sus!4v1424976017685" width="600" height="500" frameborder="0" style="border:0"></iframe>
								</div>
								<hr>
								<h3 class="text-center">Regulatory License Information</h3>
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td class="text-center"><strong>TCP License</strong></td>
											<td class="text-center"><strong>DOT License</strong></td>
											<td class="text-center"><strong>PUC License</strong></td>
										</tr>
										<tr>
											<td class="text-center">TCP 8361A</td>
											<td class="text-center">1083917</td>
											<td class="text-center">8361SB</td>
										</tr>
									</tbody>
								</table>
							</div>
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
