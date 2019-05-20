<?php
/**
 * The template for displaying the footer.
 *
 * @package Legacy_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="footer-container">
						<div class="row">
							<div class="col col-4 footer-item">
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>'>
									<div class='footer-logo'></div>
								</a>
							</div>
							<div class="col col-4 footer-item">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</div>
							<div class="col col-4 footer-item">
								<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social-menu' ) ); ?>
							</div>
						</div>
						<div class="copyright-container">
							<p>Copyright &copy; 2019 Legacy limited</p>
              <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
						</div>
					</div>


				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
