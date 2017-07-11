<?php
  $new_query = new WP_Query (
    array (
        'posts_per_page' => 3,
        'post_type'      => 'galeria',
        'orderby'        => 'menu_order',
        // 'paged'          => $paged
      )
  );
?>
<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
		<div class="col-xs-12 center">
      <?php	the_post_thumbnail( 'thumbnail', array ('class' => 'img-responsive center-block' ) ); ?>
			<div class="overlayer">
	       <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        <p><?php the_content(); ?></p>
			</div>
		</div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
