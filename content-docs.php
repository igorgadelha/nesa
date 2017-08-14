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

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-lg-4 col-xs-12 article'); ?>>
		<?php
			if ( is_single() ) :

			else :
				$doc_file_type = get_post_meta( get_the_ID(),'doc_file_type', true );
				$doc_file_link = get_post_meta( get_the_ID(), 'doc_files', true );
				echo '<i class="fa fa-5x center-block text-center '. $doc_file_type.'" aria-hidden="true" style="margin-top: 40px;"></i>';
			endif;
			?>
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h4 class="entry-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;
				?>

			<?php if ( 'post' == get_post_type() ) : ?>
				<?php 	if ( is_single() ) : ?>
					<div class="entry-meta">
						<!-- <?php odin_posted_on(); ?> -->
					</div><!-- .entry-meta -->
				<?php endif; ?>
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-summary text-center center-block">
			<!-- <?php the_excerpt('',array('class' => 'text-center center-block')); ?> -->
		</div><!-- .entry-summary -->

		<footer class="entry-meta">
			<a href="<?php echo esc_url( get_permalink() ) ?>" class="btn btn-white-flat text-center center-block"><?php _e( 'Ver documento', 'odin' ); ?></a>
		</footer>


</article><!-- #post-## -->
