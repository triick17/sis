			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<a href="" id="footer" class="nav-anchor visuallyhidden">Footer</a>
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<?php
								// get the Footer (Page)
								$sidebar = get_post(143); // insert ID of left Footer page
								echo "<div class=''>" . apply_filters( 'the_content', $sidebar->post_content ) . "</div>";
							?>
						</div>
						<div class="col-sm-4">
							<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-3')) ?>
						</div>
						<div class="col-sm-4">
							<?php
								// get the Footer (Page)
								$sidebar = get_post(244); // insert ID of right Footer page
								echo "<div class=''>" . apply_filters( 'the_content', $sidebar->post_content ) . "</div>";
							?>
						</div>
					</div>

					<!-- copyright -->
					<p class="copyright">
						&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
					</p>
				<!-- /copyright -->
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
