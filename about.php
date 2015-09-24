<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<!-- <section class="hero terse">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		$url = $thumb['0'];
	?>
	<header style="background-image: url(<?=$url?>)">
		<div class="overlay">
			<h1 class="page-title text-center"><?php the_title(); ?></h1>
		</div>
	</header>
	<?php endwhile; endif; ?>
</section> -->
<section class="about">
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
							<div class="row">
								<div class="col-sm-12">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										<?php the_content(); ?>
									</article> <!-- end article -->
								</div>
							</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
	jQuery(document).ready(function($){

		// Fade hero functionality
		$('.hero').addClass('active');

		setTimeout(function(){
			$('.hero .page-title').addClass('active');
		}, 600);

		if (window.location.hash == "#summerintern") {
			$('#field_oknffn').val('Summer Intern');
		} else if (window.location.hash == "#sraccountstrategist") {
			$('#field_oknffn').val('Senior Account Strategist');
		}

		// Affix functionality
		$('.hero').bind('inview', function (event, visible) {
      if (visible == true) {
        // element is now visible in the viewport
       $('.well').removeClass('affix');
          
      } else {
      	// element is no longer visible in the viewport
        $('.well').addClass('affix');
      }
    });

	});
</script>
<?php get_footer(); ?>