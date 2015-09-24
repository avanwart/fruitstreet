<?php
/*
Template Name: Leadership
*/
?>

<?php get_header(); ?>

<section class="about leadership standard">
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
									<?php if( have_rows('leadership_team') ): while ( have_rows('leadership_team') ) : the_row(); ?>
									<article class="row" id="<?php the_sub_field('short_name'); ?>">
										<div class="col-sm-12">
											<div class="headshot-wrapper">
												<img src="<?php the_sub_field('headshot'); ?>" class="img-responsive headshot">	
											</div>
											<div class="bio">
												<h2><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></h2>
												<p><?php the_sub_field('bio'); ?></p>
												<p class="linkedin">
													<a class="btn btn-default" href="<?php the_sub_field('linkedin_url'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> <?php the_sub_field('name'); ?> on LinkedIn</a>
												</p>
											</div>
										</div>
									</article>
									<?php endwhile; else : endif;  ?>
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
<script>
	jQuery(document).ready(function($){

	});
</script>
<?php get_footer(); ?>