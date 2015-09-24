<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>	

<section class="about press-hits">
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
							
							<?php if(get_field('press_articles')): ?>
							<?php while(has_sub_field('press_articles')): ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<div class="col-sm-2 hidden-xs">
									<img class="img-responsive" src="<?php the_sub_field('logo'); ?>" alt="">
								</div>
								<div class="col-sm-10">
									<h2><a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('title'); ?></a><small><?php the_sub_field('date'); ?></small></h2>
									<p><?php the_sub_field('excerpt'); ?> <a href="<?php the_sub_field('url'); ?>" target="_blank">More&rarr;</a></p>
								</div>
							</article> <!-- end article -->
							<?php endwhile; endif; ?>
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
		
	});
</script>

<?php get_footer(); ?>