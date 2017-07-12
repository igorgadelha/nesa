
	<div class="row">
    <div class="col-md-4 col-lg-4 col-xs-12">
      <h2 class="text-gray headline">Multimídia</h2>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-12">
      <ul class="nav nav-pills gallery-nav">
        <li class="active"><a data-toggle="pill" href="#menu1">Galerias</a></li>
        <li><a data-toggle="pill" href="#menu2">Vídeos</a></li>
        <li><a data-toggle="pill" href="#menu3">Áudios</a></li>
      </ul>
    </div>
    <div class="col-md-4 col-lg-4 col-xs-12">
      <a href="/video" class="pull-right category-link text-amber hidden-xs">+ Vídeos</a>
    </div>
	</div>

  <div class="tab-content row gallery-tab-content">
    <div id="menu1" class="tab-pane fade active in">
      <?php
        $new_query = new WP_Query (
          array (
              'posts_per_page' => 3,
              'post_type'      => 'galeria',
              'orderby'        => 'menu_order',
              // 'paged'          => $paged
							'post_status'      => 'publish',
							'meta_query' => array(
								array(
									'key'     => 'destaque',
									'value'   => 'yes',
									'compare' => 'LIKE',
								),
							),
            )
        );
      ?>
      <div class="row">

      <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
      		<div class="col-xs-12 col-md-4 col-lg-4 center-block"  style="min-height:230px;">
            <?php	the_post_thumbnail( 'large', array ('class' => 'img-responsive center-block', 'style' => 'height:230px !important;' ) ); ?>
            <div class="overlayer gallery">
              <?php the_title( '<h4 class="entry-title"><a class="text-black" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
              <!-- <?php the_content(); ?> -->
            </div>
      		</div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
			<!-- <hr/> -->
			<div class="row" style="margin-top:15px;">
				<a class="btn btn-green-flat text-center center-block" href="/galeria">Galerias</a>
			</div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <?php
        $new_query = new WP_Query (
          array (
              'posts_per_page' => 3,
              'post_type'      => 'video',
							// 'paged'          => $paged
              'orderby'        => 'menu_order',
							'post_status'      => 'publish',
							'meta_query' => array(
								array(
									'key'     => 'destaque',
									'value'   => 'yes',
									'compare' => 'LIKE',
								),
							),
            )
        );
      ?>
      <div class="row">

      <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
      		<div class="col-xs-12  col-md-4 col-lg-4 center-block"  style="min-height:230px;">
            <?php	the_post_thumbnail( 'large', array ('class' => 'img-responsive center-block', 'style' => 'height:230px !important;' ) ); ?>
            <div class="overlayer gallery">
              <?php the_title( '<h4 class="entry-title"><a class="text-black" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
              <?php //the_content(); ?>
            </div>
      		</div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      </div>
			<!-- <hr/> -->
			<div class="row center-block"  style="margin-top:15px;">
				<a class="btn btn-green-flat text-center center-block" href="/video">Vídeos</a>
			</div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <?php
        $new_query = new WP_Query (
          array (
              'posts_per_page' => 3,
              'post_type'      => 'audio',
              'orderby'        => 'menu_order',
              // 'paged'          => $paged
							'post_status'      => 'publish',
							'meta_query' => array(
								array(
									'key'     => 'destaque',
									'value'   => 'yes',
									'compare' => 'LIKE',
								),
							),
            )
        );
      ?>
      <div class="row">

      <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
      		<div class="col-xs-12 col-md-4 col-lg-4 center-block" style="min-height:230px;">
            <?php	the_post_thumbnail( 'large', array ('class' => 'img-responsive center-block', 'style' => 'height:230px !important;' ) ); ?>
            <div class="overlayer gallery">
              <?php the_title( '<h4 class="entry-title"><a class="text-black" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
              <?php //the_content(); ?>
            </div>
      		</div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

      </div>
			<!-- <hr/> -->
			<div class="row center-block"  style="margin-top:15px;">
				<a class="btn btn-green-flat text-center center-block" href="/audio">Áudios</a>
			</div>
  </div>
</div>
