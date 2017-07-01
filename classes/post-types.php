<?php


function odin_videos_cpt() {
    $video = new Odin_Post_Type(
        'video', // Nome (Singular) do Post Type.
        'video' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Videos', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' ),
						'menu_icon'	=> 'dashicons-video-alt3',
						'public' => true,
						'rewrite' => array('slug' => 'video'),
            'show_in_nav_menus' => true
        )
    );
		flush_rewrite_rules();
}

add_action( 'init', 'odin_videos_cpt', 1 );

function odin_audio_cpt() {
    $video = new Odin_Post_Type(
        'audio', // Nome (Singular) do Post Type.
        'audio' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Audios', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' ),
						'menu_icon'	=> 'dashicons-format-audio',
						'public' => true,
						'rewrite' => array('slug' => 'audio'),
            'show_in_nav_menus' => true
        )
    );
		flush_rewrite_rules();
}

add_action( 'init', 'odin_audio_cpt', 1 );

function odin_gallery_cpt() {
	$args = array(
	    'hierarchical'        => false,
	    'supports'            => array( 'title', 'editor', 'thumbnail' ),
	    'public'              => true,
	    'show_ui'             => true,
	    'show_in_menu'        => true,
	    'show_in_nav_menus'   => false,
	    'publicly_queryable'  => true,
	    'exclude_from_search' => false,
	    'has_archive'         => true,
	    'query_var'           => true,
	    'can_export'          => true,
	    'rewrite'             => true,
	);
    $video = new Odin_Post_Type(
        'galeria', // Nome (Singular) do Post Type.
        'galeria' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Galerias', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' ),
						'menu_icon'	=> 'dashicons-images-alt2',
						'public' => true,
						'rewrite' => array('slug' => 'galeria'),
            'show_in_nav_menus' => true
        )
    );
		flush_rewrite_rules();
}

add_action( 'init', 'odin_gallery_cpt', 1 );

function odin_carousel_cpt() {
    $video = new Odin_Post_Type(
        'destaque', // Nome (Singular) do Post Type.
        'destaque' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Destaque', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' ),
						'menu_icon'	=> 'dashicons-admin-home',
        )
    );
}

add_action( 'init', 'odin_carousel_cpt', 1 );

function odin_transparence_cpt() {
    $video = new Odin_Post_Type(
        'documento', // Nome (Singular) do Post Type.
        'transparencia' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Documentos', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'editor' ),
						'menu_icon'	=> 'dashicons-media-document',
        )
    );
}

add_action( 'init', 'odin_transparence_cpt', 1 );

function odin_diretoria_cpt() {
    $video = new Odin_Post_Type(
        'diretor', // Nome (Singular) do Post Type.
        'diretoria' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Diretoria', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' ),
						'menu_icon'	=> 'dashicons-admin-users',
        )
    );
}

add_action( 'init', 'odin_diretoria_cpt', 1 );

function odin_partners_cpt() {
    $video = new Odin_Post_Type(
        'acionista', // Nome (Singular) do Post Type.
        'acionistas' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Composição Acionária', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'thumbnail' ),
						'menu_icon'	=> 'dashicons-chart-pie',
        )
    );
}

add_action( 'init', 'odin_partners_cpt', 1 );

function odin_status_da_obra_cpt() {
    $video = new Odin_Post_Type(
        'Status da Obra', // Nome (Singular) do Post Type.
        'status-da-obra' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Status da obra', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title' ),
						'menu_icon'	=> 'dashicons-building',
        )
    );
}

add_action( 'init', 'odin_status_da_obra_cpt', 1 );

function odin_acoes_da_obra_cpt() {
    $video = new Odin_Post_Type(
        'Ações da Obra', // Nome (Singular) do Post Type.
        'acoes-sociais-obra' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Ações Socioambientais da obra', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title' ),
						'menu_icon'	=> 'dashicons-building',
        )
    );
}

add_action( 'init', 'odin_acoes_da_obra_cpt', 1 );

function odin_valores_cpt() {
    $video = new Odin_Post_Type(
        'Valor', // Nome (Singular) do Post Type.
        'valores' // Slug do Post Type.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Valores', 'odin' )
        )
    );

    $video->set_arguments(
        array(
            'supports' => array( 'title', 'editor' ),
						'menu_icon'	=> 'dashicons-smiley',
        )
    );
}

add_action( 'init', 'odin_valores_cpt', 1 );
