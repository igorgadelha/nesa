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
	<header class="entry-header <?php if ( is_single() ) { echo 'parallax'; } ?>" style="<?php if ( is_single() ) { echo 'background:    linear-gradient(rgba(255, 255, 255, 0.45), rgba( 0, 0, 0, 0.45)), url(' . get_the_post_thumbnail_url(null, "large") .')'; } ?>">
		<?php
			$date = explode ( '-', get_the_date('F-d') );
			?>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title text-center">', '</h1>' );
			else :
				the_post_thumbnail( 'medium', array ('class' => 'img-responsive' ) );
				the_title(
					'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><span class="hidden-xs"><span class="text-center date number">'.$date[1].'</span><span class="text-center date month">'.$date[0].'</span></span>', '</a></h2>' );
			endif;
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php 	if ( is_single() ) : ?>
			<!-- <div class="entry-meta"> -->
				<!-- <?php odin_posted_on(); ?> -->
			<!-- </div> --><!-- .entry-meta -->
		<?php endif; ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php
				if ( is_single() ) {
						the_content();
						if (get_post_type() == 'transparencia') {
							 echo do_shortcode(get_post_meta( get_the_ID(),'docs_code', true ));
						}
					} else {
						the_excerpt();
					}
				?>
		</div><!-- .entry-summary -->

	<footer class="entry-meta">
		<?php if ( !is_single() ) : ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-white-flat"><?php _e( 'Leia mais', 'odin' ); ?></a>
		<?php endif; ?>
	</footer>
</article><!-- #post-## -->
