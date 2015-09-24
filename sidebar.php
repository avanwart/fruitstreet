<div id="sidebar1" class="clearfix" role="complementary">

	<?php if ( is_page_template( 'about.php' ) || is_page_template( 'leadership.php' ) || ( is_page_template( 'press.php' ) )) { ?>
		<div class="bucket">
  		<h3 class="bucket-title">Our Company</h3>
  		<?php footer_bucket_1(); ?>
		</div>
	<?php } elseif ( is_page_template( 'whatever.php' ) || is_page_template( 'whatever.php' )  ) { ?>
		<div class="bucket">
  		<h3 class="bucket-title">Our Services</h3>
  		<?php footer_bucket_2(); ?>
  		</div>
	<?php } else {

	}?>

</div>