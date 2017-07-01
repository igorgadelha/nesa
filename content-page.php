<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<header class="entry-header"><h1 class="text-gray headline">', '</h1></header><!-- .entry-header -->' ); ?>
	<?php if( function_exists('bootstrap_breadcrumb') ): ?>
		<section class="section-breadcrumb">
				<?php bootstrap_breadcrumb('<i class="fa fa-home fa-lg"></i>', array('video', 'galeria', 'audio') ); ?>
		</section>
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'odin' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
