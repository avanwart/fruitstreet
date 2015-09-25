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
							<article>
								<div class="row">
									<div class="col-sm-12">
										<h1 class="page-title"><?php the_title(); ?></h1>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<h2></h2>
									</div>
									<?php if( have_rows('leadership_team') ): while ( have_rows('leadership_team') ) : the_row(); ?>
										
										<div class="col-sm-3 person">

											<a data-toggle="modal" href='#modal<?php the_sub_field('id'); ?>'><img src="<?php the_sub_field('headshot'); ?>" class="img-responsive headshot"></a>
											<p><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></p>
											<div class="modalfade" id="modal<?php the_sub_field('id'); ?>">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															<h4 class="modal-title"><?php the_sub_field('name'); ?></h4>
														</div>
														<div class="modal-body">
															<div class="bio">
																<h2><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></h2>
																<p><?php the_sub_field('bio'); ?></p>
																<p class="linkedin">
																	<a class="btn btn-default" href="<?php the_sub_field('linkedin_url'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> <?php the_sub_field('name'); ?> on LinkedIn</a>
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>

									<?php endwhile; else : endif;  ?>

								</div>
							</article>
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
		//$('.modal').modal();
	});
</script>
<?php get_footer(); ?>