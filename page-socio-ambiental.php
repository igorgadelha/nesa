<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" class="" tabindex="-1" role="main">
			<div class="container">
				<div class="row">

					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'content', 'pagecustom' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								// comments_template();
							endif;
						endwhile;
					?>
				</div>
				<h2>Abrangência</h2>
				<hr>
				<div class="row-fluid">
					<?php

					$args = array(
					    'post_type'      => 'page',
					    'posts_per_page' => -1,
					    'post_parent'    => $post->ID,
					    'order'          => 'ASC',
					    'orderby'        => 'menu_order'
					 );


					$parent = new WP_Query( $args );

					if ( $parent->have_posts() ) : ?>

					    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
								<div class="col-xs-12 col-md-4 col-lg-4" style="height:300px;margin-bottom:10px;">
							     <div class="thumbnail">
							       <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
							       <div class="caption center-caption">
							         <h3 class="center-block text-center"><?php the_title(); ?></h3>
							         <p><?php the_excerpt(); ?></p>
							         <p class="center-block"><a href="<?php the_permalink(); ?>" class="btn btn-green-flat center-block" role="button">Ver</a></p>
							       </div>
							     </div>
							   </div>

					    <?php endwhile; ?>

					<?php endif;  ?>
					<?php wp_reset_query(); ?>
				</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
