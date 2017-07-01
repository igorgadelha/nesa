<h2 class="text-gray headline">Status da Obra</h2>
<?php     $custom_terms = get_terms('sitio-da-obra', array(
    'hide_empty' => true,
) ); ?>
<?php     $custom_tags = get_terms('acoes-da-obra', array(
    'hide_empty' => true,
) ); ?>
<?php
  foreach($custom_terms as $custom_term) {
    foreach($custom_tags as $custom_tag) {
        wp_reset_query();
        $args = array(
            'post_type' => 'status-da-obra',
            'status' => 'publish',
            'hide_empty' => true,
            'tax_query' => array(
              'relation' => 'AND',
                array(
                    'taxonomy' => 'sitio-da-obra',
                    'field' => 'slug',
                    'terms' => $custom_term->slug,
                ),
                array(
                    'taxonomy' => 'acoes-da-obra',
                    'field' => 'slug',
                    'terms' => $custom_tag->slug,
                ),
            ),
         );

         ?>

         <?php $loop = new WP_Query ( $args ); ?>
         <?php $i = 1; ?>
         <?php if($loop->have_posts()): ?>
           <div class="row">

             <div class="col-lg-4 col-md-4 col-xs-12" style="border-left: 2px solid #079ca5;">
               <h3><?php echo  $custom_term->name; ?></h3>
               <p class="text-justify"><?php echo $custom_term->description ?></p>
             </div>

               <div class="col-lg-8 col-md-8 col-xs-12">
                 <h2><?php echo $custom_tag->name  ?></h2>
                 <hr>
                 <?php  while($loop->have_posts()) : $loop->the_post(); ?>

                   <?php $percentual = get_post_meta ( get_the_ID(), 'percentual', true );?>
                   <?php $unidade = get_post_meta ( get_the_ID(), 'unidade', true );?>
                   <?php $color = get_post_meta ( get_the_ID(), 'colorbar', true );?>


                   <h4><?php echo the_title(); ?></h4>
                   <span class=""><?php echo $unidade;?></span>
                   <div class="progress">
                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="  <?php echo $percentual;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentual;?>%;background-color: <?php echo $color;?>">
                       <span class=""><?php echo $percentual."%";?></span>
                     </div>
                   </div>

                  <?php $i++; ?>
                  <?php endwhile; ?>
                </div>
             </div>
              <?php
                else:
                  // If no content, include the "No posts found" template.
                  // get_template_part( 'content', 'none' );
                endif;
              ?>
       <?php } ?>
     <?php } ?>
