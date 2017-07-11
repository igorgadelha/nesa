<div class="owl-carousel owl-theme" id="destaque">
<?php
  $new_query = new WP_Query (
    array (
        'posts_per_page' => 5,
        'post_type'      => 'destaque',
        'orderby'        => 'menu_order',
        // 'paged'          => $paged
      )
  );
?>
<?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

  <div class="item" style="background-image: url('<?php the_post_thumbnail_url(  'large' ); ?>'); background-size:cover; background-position:center center; background-repeat: no-repeat;">
		<div class="container center">
			<div class="col-md-7 col-md-offset-5 slider-content">
				<h1 class="text-white highlight-title"> <?php the_title(); ?></h1>
        <h2 class="text-white"><?php the_content(); ?></h2>
        <br/>
        <div class="center-block">
          <a href="<?php  echo get_post_meta( get_the_ID(), 'url', true ); ?>" class="btn btn-lg btn-white center-block">Veja mais</a>
        </div>
			</div>
		</div>
	</div>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <div class="dotsCont"></div>
    </div>
  </div>
</div>
