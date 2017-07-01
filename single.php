<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<div class="container">
		<div class="row">
			<main id="content" class="" tabindex="-1" role="main">
				<?php get_template_part( '_inc/breadcrumb' ); ?>
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						 if (get_post_type() == 'galeria') {
							 get_template_part( 'content', get_post_format() );
						} else {
							get_template_part( 'content-category', get_post_format() );
						}
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
				?>
			</main><!-- #main -->

<?php//get_sidebar();?>

	</div>
</div>

<?php

get_footer();
