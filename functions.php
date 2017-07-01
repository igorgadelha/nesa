<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
//require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/classes/class-metabox.php';
require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
require_once get_template_directory() . '/core/classes/class-post-status.php';
require_once get_template_directory() . '/core/classes/class-term-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';
// require_once get_template_directory() . '/core/classes/widgets/class-widget-custom-menu.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' ),
				'contact-menu' => __( 'Menu de contatos', 'odin' ),
				'institucional-menu' => __( 'Menu de Institucional Footer', 'odin' ),
				'documentos-menu' => __( 'Menu Documentos Footer', 'odin' ),
				'multimidia-menu' => __( 'Menu de Multimídia Footer', 'odin' ),
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */

function odin_widgets_init() {

	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Footer widgets Top', 'odin' ),
			'id' => 'footer-sidebar-top',
			'description' => __( 'Site Footer Top widget', 'odin' ),
			// 'before_widget' => '<div id="%1$s" class="widget col-md-3 col-lg-3 col-xs-12 %2$s">',
			// 'after_widget' => '</div>',
			'before_title' => '<h3 class="text-green widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Footer widgets Top', 'odin' ),
			'id' => 'footer-sidebar-top-1',
			'description' => __( 'Site Footer Top widget 1', 'odin' ),
			// 'before_widget' => '<div id="%1$s" class="widget col-md-3 col-lg-3 col-xs-12 %2$s">',
			// 'after_widget' => '</div>',
			'before_title' => '<h3 class="text-green widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Footer widgets Top', 'odin' ),
			'id' => 'footer-sidebar-top-2',
			'description' => __( 'Site Footer Top widget 2', 'odin' ),
			// 'before_widget' => '<div id="%1$s" class="widget col-md-3 col-lg-3 col-xs-12 %2$s">',
			// 'after_widget' => '</div>',
			'before_title' => '<h3 class="text-green widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Footer widgets Top', 'odin' ),
			'id' => 'footer-sidebar-top-3',
			'description' => __( 'Site Footer Top widget 3', 'odin' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="text-green widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Footer widgets left', 'odin' ),
			'id' => 'footer-sidebar-left',
			'description' => __( 'Site Footer left widget', 'odin' ),
			'before_widget' => '<div id="%1$s" class="widget col-md-12 col-lg-12 col-xs-12 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="text-green widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => __( 'Footer widgets right ', 'odin' ),
			'id' => 'footer-sidebar-right',
			'description' => __( 'Site Footer right widget', 'odin' ),
			'before_widget' => '<div id="%1$s" class="widget col-md-12 col-lg-12 col-xs-12 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);

}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
		$template_url = get_template_directory_uri();

		// pace-css
		wp_enqueue_style( 'pace-css', $template_url . '/assets/library/pace/dataurl.css' );
		// font-awesome
		wp_enqueue_style( 'font-awesome', $template_url . '/assets/library/font-awesome/css/font-awesome.css', array(), null, 'all' );

		// owlcarouselcss
		wp_enqueue_style( 'owlcarousel-css', $template_url . '/assets/library/owl.carousel/dist/assets/owl.carousel.css' );
		wp_enqueue_style( 'owlcarousel-theme', $template_url . '/assets/library/owl.carousel/dist/assets/owl.theme.default.css' );

		// bootstrap-toggle-js
		wp_enqueue_style( 'bootstrap-toggle-css', $template_url . '/assets/library/bootstrap-toggle/css/bootstrap-toggle.min.css' );

		// fotorama-css
		wp_enqueue_style( 'fotorama-css', $template_url . '/assets/library/fotorama/fotorama.css' );


		// Loads Odin main stylesheet.
		wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

		// pace-js
		wp_enqueue_script( 'pace-js', $template_url . '/assets/library/pace/pace.min.js' );
		// jQuery.
		wp_enqueue_script( 'jquery' );
		// owlcarouseljs
		wp_enqueue_script( 'owlcarousel-js', $template_url . '/assets/library/owl.carousel/dist/owl.carousel.js' );
		// bootstrap-toggle-js
		wp_enqueue_script( 'bootstrap-toggle-js', $template_url . '/assets/library/bootstrap-toggle/js/bootstrap-toggle.min.js' );
		// fotorama-js
		wp_enqueue_script( 'fotorama-js', $template_url . '/assets/library/fotorama/fotorama.js' );
		// resizer
		wp_enqueue_script( 'resizer-js', $template_url . '/assets/library/font-resizer.js' );

	// Html5Shiv
	wp_enqueue_script( 'html5shiv', $template_url . '/assets/js/html5.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	// General scripts.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		// Bootstrap.
		wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array(), null, true );

		// FitVids.
		wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true );

		// Main jQuery.
		wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );
	} else {
		// Grunt main file with Bootstrap, FitVids and others libs.
		wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );
	}

	// Grunt watch livereload in the browser.
	wp_enqueue_script( 'odin-livereload', 'http://default.dev:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

function generate_post_select ( $select_id, $post_type, $selected = 0 ) {
    $post_type_object = get_post_type_object($post_type);
    $label = $post_type_object->label;
    $posts = get_posts(array('post_type'=> $post_type, 'post_status'=> 'publish', 'suppress_filters' => false, 'posts_per_page'=>-1));
    echo '<select name="'. $select_id .'" id="'.$select_id.'">';
    echo '<option value = "" >All '.$label.' </option>';
    foreach ($posts as $post) {
        echo '<option value="', $post->ID, '"', $selected == $post->ID ? ' selected="selected"' : '', '>', $post->post_title, '</option>';
    }
    echo '</select>';
}
// menu order for posts
add_action( 'admin_init', 'posts_order_wpse_91866' );

function posts_order_wpse_91866()
{
    add_post_type_support(  'post', 'page-attributes' );
    add_post_type_support(  'acionistas', 'page-attributes' );
    add_post_type_support(  'diretoria', 'page-attributes' );
    add_post_type_support(  'galeria', 'page-attributes' );
    add_post_type_support(  'audio', 'page-attributes' );
    add_post_type_support(  'video', 'page-attributes' );
}


// Add the data to the custom columns for the book post type:
add_filter( 'manage_galeria_posts_columns', 'set_custom_edit_book_columns' );
add_action( 'manage_galeria_posts_custom_column' , 'custom_book_column', 10, 2 );

function set_custom_edit_book_columns($columns) {
    unset( $columns['author'] );
    $columns['shortcode'] = __( 'Shortcode', 'your_text_domain' );

    return $columns;
}

function custom_book_column( $column, $post_id ) {
    switch ( $column ) {

        case 'shortcode' :
                echo '[gallery id="'. $post_id.'" ]';
            break;

    }
}

function my_custom_taxonomy_columns( $columns )
{
	$columns['shortcode'] = __('Shortcode');

	return $columns;
}

add_filter('manage_edit-valores-category_columns' , 'my_custom_taxonomy_columns');
add_filter('manage_edit-acoes-sociais-da-obra_columns' , 'my_custom_taxonomy_columns');

function my_custom_taxonomy_valores_columns_content( $content, $column_name, $term_id )
{
    if ( 'shortcode' == $column_name ) {
        $content = '[valores id="'. $term_id .'" ]';
    }
	return $content;
}
function my_custom_taxonomy_columns_content( $content, $column_name, $term_id )
{
    if ( 'shortcode' == $column_name ) {
        $content = '[acoes_da_obra id="'. $term_id .'" ]';
    }
	return $content;
}

add_filter( 'manage_valores-category_custom_column', 'my_custom_taxonomy_valores_columns_content', 10, 3 );
add_filter( 'manage_acoes-sociais-da-obra_custom_column', 'my_custom_taxonomy_columns_content', 10, 3 );



/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * post-types.
 */
require_once get_template_directory() . '/classes/post-types.php';

/**
 * Taxonomies.
 */
require_once get_template_directory() . '/classes/taxonomies.php';

/**
 * metaboxes.
 */
require_once get_template_directory() . '/classes/metaboxes.php';

/**
 * terms meta.
 */
require_once get_template_directory() . '/classes/termsmeta.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';
/**
 * Theme Settings.
 */
require_once get_template_directory() . '/theme-settings.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}
