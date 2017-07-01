<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<?php get_template_part('_inc/destaque'); ?>
	<main id="content" class="<?php echo 'container'; ?>" tabindex="-1" role="main">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<h2 class="text-gray headline">Destaque</h2>
				</div>
				<div class="col-md-8 col-xs-12">
					<a href="/noticias" class="pull-right category-link text-amber hidden-xs">+Notícias</a>
				</div>
			</div>
			<div class="row">
				<?php  $odin_config = get_option( 'odin_config' ); ?>
				<?php if ( $odin_config['highlight_config'] ) :			?>
					<div class="owl-carousel owl-theme destaque">
					<?php endif; ?>
				<?php
				$args;

				if ( $odin_config['highlight_config'] ) {
					$args = array(
						// 'orderby'          => 'post_date',
						'orderby' => 'menu_order',
						'order'            => 'ASC',
						'post_status'      => 'publish',
						'meta_query' => array(
							array(
								'key'     => 'destaque',
								'value'   => 'yes',
								'compare' => 'LIKE',
							),
						),
					);

				} else {
					$args = array(
						'posts_per_page'   => 1,
						'orderby' => 'menu_order',
						'order'            => 'ASC',
						'post_status'      => 'publish',
						'meta_query' => array(
							array(
								'key'     => 'destaque',
								'value'   => 'yes',
								'compare' => 'LIKE',
							),
						),
					);

				}

					query_posts( $args );
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();
							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content-destaque', get_post_format() );

						endwhile;

						// Post navigation.
						// odin_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
				?>
				<?php if ( $odin_config['highlight_config'] ) { ?>
					</div>
					<?php } ?>
			</div>

			<?php get_template_part( '_inc/galeria-home' ); ?>
	</div>
	</main><!-- #content -->

<?php
// get_sidebar();
get_footer();
