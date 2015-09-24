<?php get_header(); ?>

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<?php
							get_sidebar();
						?>
					</div>
					<div class="col-sm-9 main-content">
						<div class="card">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article>
								<h1 class="page-title"><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</article> <!-- end article -->
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>

<?php get_footer(); ?>
