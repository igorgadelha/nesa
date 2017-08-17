<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" class="container" tabindex="-1" role="main">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php echo post_type_archive_title( '<header class="entry-header uppercase"><h1 class="entry-title text-gray text-left">', '</h1></header>' ); ?>
				</header><!-- .page-header -->

				<?php get_template_part( '_inc/breadcrumb' ); ?>

				<div class="row" style="margin-bottom:20px;">
					<form method="get" class="form-inline" action="<?php echo '/'; ?>" role="search">
						<fieldset>
							<legend><?php _e( 'Search:', 'odin' ); ?></legend>

							<label for="navbar-search" class="sr-only">
								<?php _e( 'Search:', 'odin' ); ?>
							</label>

							<div class="form-group">
								<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" placeholder="digite aqui sua busca" id="navbar-search" />
							</div>

							<div class="form-group">
								<select class="form-control" id="sct-multmidia" name="post_type">
									<option value="audio">Áudios</option>
									<option value="video">Vídeos</option>
									<option value="galeria">Galerias</option>
								</select>
							</div>

							<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
						</fieldset>
					</form>
				</div>

				<div class="row">
					<div class="col-md-9 col-lg-9 col-xs-12">
						<div class="row">

							<?php

									// Start the Loop.
									while ( have_posts() ) : the_post();

									/*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
									 if( get_post_type() !== 'post') {
										 get_template_part( 'content-docs', get_post_format() );
									 } else {
										 get_template_part( 'content-category-2', get_post_format() );
									 }


									endwhile;
									?>
									</div>

									<div class="row">
									<?php
									// Page navigation.
									odin_paging_nav();
									?>
								</div>

									<?php
								else :
									// If no content, include the "No posts found" template.
									get_template_part( 'content', 'none' );

							endif;
						?>
				</div>
				<?php get_sidebar(); ?>
			</div>
	</main><!-- #main -->


<?php
get_footer();
