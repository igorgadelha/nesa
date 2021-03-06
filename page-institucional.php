<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" class="" tabindex="-1" role="main">
			<div class="container">
				<div class="row">

					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							// Include the page content template.
							get_template_part( 'content', 'pagecustom' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
					?>
				</div>
				<div class="row">
					<?php get_template_part('_inc/diretoria') ?>
				</div>
				<hr/>
				<div class="row">
					<?php get_template_part('_inc/composicao-acionaria') ?>
				</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
