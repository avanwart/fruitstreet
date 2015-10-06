			<footer class="footer dark" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="footer-links clearfix">
					
					<!-- ATTN:  Edit these menus by going to Appearance -> Menus -> Select Menu within WordPress -->
					<div class="row">

						<!-- Footer Bucket 1 -->
						<div class="col-sm-3 bucket">
							<h3>Company</h3>
							<?php footer_bucket_1(); ?>
						</div>

						<!-- Footer Bucket 2 -->
						<div class="col-sm-3 bucket">
							<h3>Product</h3>
							<?php footer_bucket_2(); ?>
						</div>
						
						<!-- Footer Bucket 3 -->
						<div class="col-sm-3 bucket resources">
							<h3>Resources</h3>
							<?php footer_bucket_3(); ?>
						</div>

						<!-- Footer Bucket 4 -->
						<div class="col-sm-3 bucket badges">
							<h3>Certifications</h3>
							<img src="<?php bloginfo('template_directory'); ?>/library/images/bbb-logo.gif" alt="">
							<img src="<?php bloginfo('template_directory'); ?>/library/images/certified-b.jpg" alt="">
							<!-- disable bucket 4 if you want to put logos there instead -->
							<?php /* footer_bucket_4(); */ ?>
						</div>
					</div>

				</div> <!-- end #inner-footer -->

				<p class="text-center source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?><br class="visible-xs"><span class="hidden-xs">&nbsp;&nbsp;|</span> <a href="?p=175">Terms &amp; Conditions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?p=547">Privacy Policy</a></p>

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
