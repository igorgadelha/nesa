<nav class="navbar navbar-default">
  <div class="container">
    <div class="row">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header col-md-3 col-lg-3 col-xs-12">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php odin_the_custom_logo(); ?>

        <?php if ( get_header_image() ) : ?>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <?php  $odin_general_opts = get_option( 'odin_general' ); ?>
          <?php echo wp_get_attachment_image ( $odin_general_opts['logo_image'], 'large', false, [ 'class' => 'img-resposive'] ); ?>
          <!-- <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /> -->
        </a>
      <?php endif; ?>
      </div>
      <div class=" col-md-9 col-lg-9 col-xs-12 menu-container">
        <div class="col-md-2 col-lg-2 col-xs-12 simple-menu">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <ul class="nav nav-pills">
            <li><a href="javascript:(0);" class="font-resizer minus"><i class="fa fa-font" aria-hidden="true"></i>-</a></li>
            <li><a href="javascript:(0);" class="font-resizer plus"><i class="fa fa-font" aria-hidden="true"></i>+</a></li>
          </ul>
        </div>

        <div class="col-md-5 col-lg-5 col-xs-12 simple-menu">
          <ul class="nav nav-pills">
            <?php get_template_part('_inc/_social-links-header'); ?>
          </ul>
        </div>

        <div class="col-md-5 col-lg-5 col-xs-12">

          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'contact-menu',
              'depth'          => 2,
              'container'      => false,
              'menu_class'     => 'nav nav-pills',
              'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
              'walker'         => new Odin_Bootstrap_Nav_Walker()
              )
            );
            ?>

        </div>

    		<!-- <ul class="toolbar"></ul> -->
        <nav class="collapse navbar-collapse navbar-main-navigation" role="navigation"  id="bs-example-navbar-collapse-1">

          <?php
          wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'main-menu',
              'depth'             => 4,
              'container'         => false,
              'menu_class'        => 'nav navbar-nav yamm',
              'fallback_cb'       => 'Yamm_Nav_Walker_menu_fallback',
              'walker'            => new Yamm_Nav_Walker())
          );
            // wp_nav_menu(
            //   array(
            //     'theme_location' => 'main-menu',
            //     'depth'          => 3,
            //     'container'      => false,
            //     'menu_class'     => 'nav navbar-nav',
            //     'fallback_cb'       => 'Yamm_Nav_Walker_menu_fallback',
            //     'walker'            => new Yamm_Nav_Walker()
            //   )
            // );
          ?>
          <form method="get" class="navbar-form navbar-right hidden-md hidden-lg" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
            <label for="navbar-search" class="sr-only">
              <?php _e( 'Search:', 'odin' ); ?>
            </label>

            <div class="form-group">
              <input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" placeholder="Pesquisar" id="navbar-search" />
            </div>
            <button type="submit" class="btn btn-green-flat hidden-lg hidden-md"><?php _e( 'Search', 'odin' ); ?></button>
          </form>
        </nav><!-- .navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
</nav>
