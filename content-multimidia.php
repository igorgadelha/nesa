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

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?> style="margin-bottom:10px;">
	<div class=""  style="height: 180px;">
		<?php	the_post_thumbnail( 'large', array ('class' => 'img-responsive thumbnail' ) ); ?>
	</div>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title(
					'<h4 class="entry-title text-center"  style=" overflow:hidden; text-overflow:ellipsis; white-space: nowrap;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><span class="hidden-xs">', '</a></h4>' );
			endif;
		?>

		<div class="entry-summary col-xs-12 col-md-12 col-lg-12" style=" overflow:hidden; text-overflow:ellipsis; white-space: nowrap;">
			<?php
				if ( is_single() ) :
						the_content();
					else :
						the_excerpt();
					endif;
				?>
		</div><!-- .entry-summary -->

		<footer class="entry-meta  col-xs-12 col-md-12 col-lg-12">
			<?php if ( !is_single() ) : ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-green-flat center-block"><?php _e( 'Leia mais', 'odin' ); ?></a>
			<?php endif; ?>
		</footer>
</article><!-- #post-## -->
