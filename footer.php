<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
			</div><!-- .row -->
		</div><!-- #wrapper -->

		<div class="container">
			<hr class="col-xs-12"/>
			<!-- row widgets top -->
			<div class="row">

				<div class="col-xs-12 col-md-3 col-lg-3">
					<h3 class="text-green widgettitle widget-title">Institucional</h3>
					<?php
          wp_nav_menu(
            array(
              'theme_location' => 'institucional-menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'nav nav-pills nav-stacked',
              'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
              'walker'         => new Odin_Bootstrap_Nav_Walker()
              )
            );
            ?>
				</div><!-- .row widgets top -->

				<div class="col-xs-12 col-md-3 col-lg-3">
					<h3 class="text-green widgettitle widget-title">Documentos</h3>
					<?php
          wp_nav_menu(
            array(
              'theme_location' => 'documentos-menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'nav nav-pills nav-stacked',
              'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
              'walker'         => new Odin_Bootstrap_Nav_Walker()
              )
            );
            ?>
				</div><!-- .row widgets top -->

				<div class="col-xs-12 col-md-3 col-lg-3">
					<h3 class="text-green widgettitle widget-title">Multimídia</h3>
					<?php
          wp_nav_menu(
            array(
              'theme_location' => 'multimidia-menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'nav nav-pills nav-stacked',
              'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
              'walker'         => new Odin_Bootstrap_Nav_Walker()
              )
            );
            ?>
				</div><!-- .row widgets top -->

				<div class="col-xs-12 col-md-3 col-lg-3">
					<?php  dynamic_sidebar( 'footer-sidebar-top-3' ); ?>
				</div><!-- .row widgets top -->

			</div><!-- .container -->
		</div><!-- .container -->
		<!-- Return to Top -->
		<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
		<!-- /Return to Top -->
		<footer id="footer" role="contentinfo">

			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- widget endereços -->
					<div class="col-xs-12 col-md-4 col-lg-4">
						<h4 class="text-gray widget-title hidden-lg hidden-md">Endereços</h4>
						<?php  dynamic_sidebar( 'footer-sidebar-left' ); ?>
					</div>
					<!-- widget endereços -->

					<!-- linha separadora mobile -->
					<div class="col-xs-12 hidden-lg hidden-md"><hr/></div>
					<!-- linha separadora mobile -->
					<!-- widgets de endereços do lado direito (visíveis apenas no mobile) -->
					<div class="col-xs-12 col-md-4 col-lg-4 hidden-lg hidden-md">
						<?php  dynamic_sidebar( 'footer-sidebar-right' ); ?>
					</div>
					<!-- widgets de endereços do lado direito (visíveis apenas no mobile) -->

					<!-- logotipo de centro e link das redes sociais -->
					<div class="col-xs-12 col-md-4 col-lg-4">
							<!-- logotipo de centro -->
							<?php  $odin_general_opts = get_option( 'odin_general' ); ?>
							<?php echo wp_get_attachment_image ( $odin_general_opts['footer_image'], 'large', false, [ 'class' => 'attachment-large size-large img-resposive img-responsive center-block'] ); ?>
							<!-- logotipo de centro -->
							<!-- link das redes sociais -->
							<div class="col-md-12 col-xs-12 col-ls-12 center-block">
								<?php get_template_part('_inc/_social-links'); ?>
							</div>
							<!-- link das redes sociais -->
					</div>
					<!-- logotipo de centro e link das redes sociais -->

					<!-- widgets de endereços do lado direito (visíveis apenas no desktop) -->
					<div class="col-xs-12 col-md-4 col-lg-4 hidden-xs">
						<?php  dynamic_sidebar( 'footer-sidebar-right' ); ?>
					</div>
					<!-- widgets de endereços do lado direito (visíveis apenas no desktop) -->

				</div><!-- .row -->
			</div><!-- .container -->

			<!-- .#copyright -->
			<div id="copyright">
				<div class="container">
					<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Powered by the <a href="%s" rel="nofollow" target="_blank">Odin</a> forces and <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>
				</div><!-- .container -->
			</div><!-- .#copyright -->

		</footer><!-- #footer -->

		<?php wp_footer(); ?>
	</body>
</html>
