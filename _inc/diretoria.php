<?php
  $diretores = new WP_Query (
    array (
        'posts_per_page' => -1,
        'post_type'      => 'diretoria',
        'orderby'        => 'menu_order',
        // 'paged'          => $paged
      )
  );
?>
<h2 class="text-gray headline">Diretoria</h2>
<?php if ( $diretores->have_posts() ) :  ?>
  <?php while ( $diretores->have_posts() ) : $diretores->the_post(); ?>
    <div class="media col-xs-6 col-md-2 col-lg-2">
      <div class="media-left">
        <!-- <a href="#">
          <?php $thumb =  has_post_thumbnail( get_the_ID() ); ?>
          <?php if ( $thumb ) :  ?>
            <?php  the_post_thumbnail ( 'thumbnail', array('class' => 'img-responsive img-circle' ) ); ?>
          <?php else: ?>
            <i class="fa fa-5x fa-user-circle-o " aria-hidden="true"></i>
          <?php endif; ?>
        </a> -->
      </div>
      <div class="media-body">
        <h5 class="media-heading"><?php the_title();?></h5>
        <?php the_content();?>
      </div>
    </div>
  <?php endwhile; ?>
<?php
  else:
    // If no content, include the "No posts found" template.
    get_template_part( 'content', 'none' );
  endif;
?>
