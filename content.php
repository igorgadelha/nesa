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
	<header class="entry-header">
		<?php
			$date = explode ( '-', get_the_date('F-d') );
			?>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_post_thumbnail( 'medium', array ('class' => 'img-responsive center-block' ) );
				the_title(
					'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><span class="hidden-xs"><span class="text-center date number">'.$date[1].'</span><span class="text-center date month">'.$date[0].'</span></span>', '</a></h2>' );
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

	<?php if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php else : ?>
		<div class="entry-content">
			<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'odin' ) );
				if (get_post_type() == 'galeria') {
					$gallery = get_post_meta( get_the_ID(), 'images_files', true );
					?>
					<div class="fotorama center-block" data-nav="thumbs" data-width="100%" data-ratio="800/600" data-allowfullscreen="true">
						<?php
						$total = count( explode( ',', $gallery ));
						$i = 1;
							foreach ( explode( ',', $gallery ) as $image_id ) {
							    // Sua mágica aqui!

									echo wp_get_attachment_image ( $image_id, 'large', false, array('class' => 'img-responsive', 'data-caption'=> get_post_meta( $image_id, '_wp_attachment_image_alt', true ).' '.$i. ' de '.$total ) );
									$i++;
							}
						?>
					</div>

					<?php
				}

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'odin' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
			<span class="cat-links"><?php echo __( 'Posted in:', 'odin' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'odin' ) ); ?></span>
		<?php endif; ?>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged as:', 'odin' ) . ' ', ', ', '</span>' ); ?>
		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'odin' ), __( '1 Comment', 'odin' ), __( '% Comments', 'odin' ) ); ?></span>
		<?php endif; ?>
	</footer>
</article><!-- #post-## -->
