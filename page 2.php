<?php get_header(); ?>

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-3 hidden-xs">
						<?php
							get_sidebar();
						?>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-8 card flush">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1 class="page-title"><?php the_title(); ?></h1>
						<div class="row">
							<div class="col-sm-12">
								<article>
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
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>

<?php get_footer(); ?>