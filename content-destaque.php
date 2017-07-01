<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>


	<div class="item">
		<?php $date = explode ( '-', get_the_date('F-d') ); ?>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				?>
				<div class="col-md-4 col-lg-4 col-xs-12">
					<?php  the_post_thumbnail( 'large', array ('class' => 'img-responsive thumbnail' ) ); ?>
				</div>
					<div class="col-md-8 col-lg-8 col-xs-12">
						<?php the_title('<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
						<div class="text-justify">
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn-amber-flat pull-right"><?php _e( 'Leia mais', 'odin' ); ?></a>
						</div>
					</div>
			<?php endif; ?>
		</div><!-- .entry-header -->
