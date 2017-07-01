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
	<?php get_template_part( '_inc/breadcrumb' ); ?>


	<div class="row">
		<div class="col-md-6 col-lg-6 col-xs-12">
			<?php echo do_shortcode ( get_post_meta(get_the_ID(),'gallery_code', true ) ); ?>
		</div>
		<?php echo do_shortcode ( get_post_meta(get_the_ID(),'values_code', true ) ); ?>
	</div>
	<?php echo do_shortcode ( get_post_meta(get_the_ID(),'acoes_code', true ) ); ?>

	<div class="entry-content" style="text-align:justify; font-size: 12pt; line-height: 1.5; padding: 30px 5px 5px 10px;">
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
<hr/>
