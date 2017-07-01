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
<<?php $term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
	<main id="content" class="container" tabindex="-1" role="main">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="text-gray headline">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php get_template_part( '_inc/breadcrumb' ); ?>

				<div class="row">
					<form method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" style="padding:20px;margin-bottom:20px;">
						<fieldset>
							<legend>Pesquisar</legend>
						<label for="navbar-search" class="sr-only">
							<?php _e( 'Search:', 'odin' ); ?>
						</label>
						<div class="form-group">
							<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" placeholder="digite aqui sua busca" />
						</div>
						<div class="form-group">
							<?php wp_dropdown_categories( array ( 'class' => 'form-control', 'show_option_all'   => 'Todos', 'taxonomy'=> $term->taxonomy  ) ); ?>
						</div>
						<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
					</fieldset>
					</form>
				</div>

				<div class="row">
					<div class="col-md-9 col-lg-9 col-xs-12">
							<?php
									// Start the Loop.
									while ( have_posts() ) : the_post();

									/*
									 * Include the post format-specific template for the content. If you want to
									 * use this in a child theme, then include a file called content-___.php
									 * (where ___ is the post format) and that will be used instead.
									 */
									get_template_part( 'content-docs', get_post_format() );

									endwhile;

								else :
									// If no content, include the "No posts found" template.
									get_template_part( 'content', 'none' );

							endif;
						?>
				</div>
				<?php get_sidebar(); ?>
			</div>
			<div class="row">
				<?php odin_paging_nav(); ?>
			</div>
	</main><!-- #main -->


<?php
get_footer();
