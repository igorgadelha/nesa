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

<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-md-12 col-lg-12 article'); ?>>
	<div class="col-md-3 col-lg-3 col-xs-12">
		<?php
			if ( is_single() ) :

			else :
				$doc_file_type = get_post_meta( get_the_ID(),'doc_file_type', true );
				$doc_file_link = get_post_meta( get_the_ID(), 'doc_files', true );
				echo '<i class="fa fa-5x center-block text-center '. $doc_file_type.'" aria-hidden="true" style="margin-top: 40px;font-size: 100pt;"></i>';
			endif;
			?>
	</div>
	<div class="col-md-9 col-lg-9 col-xs-12">
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
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
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-meta">
			<a href="<?php echo $doc_file_link; ?>" class="btn btn-white-flat pull-right" download><?php _e( 'Download', 'odin' ); ?></a>
		</footer>
	</div>


</article><!-- #post-## -->
