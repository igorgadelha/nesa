<h2 class="text-gray headline">Grupos Acionistas</h2>
<ul class="nav nav-pills gallery-nav">
  <?php  $i = 0;  ?>
  <?php  $j = 0;  ?>
  <?php
    $custom_terms = get_terms(
      array (
        'taxonomy' => 'grupos-acionistas',
        'meta_key' => 'order_field',
        'orderby' => 'meta_value',
        'order' => 'DESC',
        'hide_empty' => true,
      )
    );

    foreach ( $custom_terms as $custom_term ) {
        wp_reset_query();
        $args = array(
          'post_type' => 'acionistas',
          'orderby' => 'menu_order',
          'tax_query' => array(
                array(
                    'taxonomy' => 'grupos-acionistas',
                    'field' => 'slug',
                    'terms' => $custom_term->slug
                ),
            ),
         );

         ?>
         <?php $loop = new WP_Query($args); ?>
         <!-- <?php get_term_meta ( $custom_term->term_id,'order_field', true ) ?> -->

           <?php  if($loop->have_posts()) { ?>
              <li class="<?php if ( $i == 0 ) { echo 'active';} ?>"><a data-toggle="pill" href="<?php echo '#'.$custom_term->slug; ?>"><?php echo $custom_term->name; ?></a></li>
              <?php $i++; ?>
            <?php }; ?>

    <?php } ?>
</ul>
<div class="tab-content">
<?php
  foreach($custom_terms as $custom_term) {
      wp_reset_query();
      $args = array(
        'post_type' => 'acionistas',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'hide_empty' => true,
          'tax_query' => array(
              array(
                  'taxonomy' => 'grupos-acionistas',
                  'field' => 'slug',
                  'terms' => $custom_term->slug
              ),
          ),
       );

       ?>

       <?php $loop = new WP_Query($args); ?>
       <?php if($loop->have_posts()) { ?>
         <div id="<?php echo  $custom_term->slug; ?>" class="tab-pane fade <?php if ( $j == 0 ) { echo 'active in';} ?>">
           <div class="col-xs-12">
             <?php  while($loop->have_posts()) : $loop->the_post(); ?>
                <div class="item col-xs-12 col-md-3 col-lg-3">
                  <?php  the_post_thumbnail('medium', array('class'=> 'img-responsive center-block')); ?>
                  <?php  echo '<a href="'.get_post_meta(get_the_ID(),'url', true ).'" target="blank" class="center-block text-center" >'.get_the_title().'</a><br>'; ?>
                  <?php $j++; ?>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
      <?php } ?>
       <?php
     }
  ?>
</div>
