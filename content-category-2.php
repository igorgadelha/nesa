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

<article id="post-<?php the_ID(); ?>" <?php post_class('row article'); ?>>
	<?php if( has_post_thumbnail ( get_the_ID() ) ): ?>
		<div class="col-md-4 col-lg-4 col-xs-12">
			<?php	the_post_thumbnail( 'large', array ('class' => 'img-responsive thumbnail' ) ); ?>
		</div>
	<?php endif; ?>
<div class=" 	<?php if( has_post_thumbnail ( get_the_ID() ) ) {echo 'col-md-8 col-lg-8'; } else { echo 'col-md-12 col-lg-12'; } ?> col-xs-12">
	<header class="entry-header <?php if ( is_single() ) { echo 'parallax'; }  else { echo 'col-xs-12 col-md-12 col-lg-12';} ?>" style="<?php if ( is_single() ) { echo 'background-image: url(' . get_the_post_thumbnail_url(null, "large") .')'; } ?>">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title(
					'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><span class="hidden-xs">', '</a></h2>' );
			endif;
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<?php 	if ( is_single() ) : ?>
			<div class="entry-meta">
				<?php odin_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

		<div class="entry-summary col-xs-12 col-md-12 col-lg-12">
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
				<a href="<?php the_permalink(); ?>" class="btn btn-amber-flat pull-right"><?php _e( 'Leia mais', 'odin' ); ?></a>
			<?php endif; ?>
		</footer>
	</div>
</article><!-- #post-## -->
