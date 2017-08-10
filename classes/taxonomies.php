<?php

function odin_transparence_taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Tipo de documento', // Nome (Singular) da nova Taxonomia.
        'tipos-de-documento', // Slug do Taxonomia.
        'transparencia' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Tipos de documento', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_transparence_taxonomy', 1 );

function odin_pdf_group_taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        __('Grupo de documento'), // Nome (Singular) da nova Taxonomia.
        'grupo-de-documento', // Slug do Taxonomia.
        'pdf' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Grupos de documentos', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_pdf_group_taxonomy', 1 );

function odin_partners_taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Grupos acionista', // Nome (Singular) da nova Taxonomia.
        'grupos-acionistas', // Slug do Taxonomia.
        'acionistas' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Grupos acionistas', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_partners_taxonomy', 1 );

function odin_status_da_obra_taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Sítio', // Nome (Singular) da nova Taxonomia.
        'sitio-da-obra', // Slug do Taxonomia.
        'status-da-obra' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Sítio', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_status_da_obra_taxonomy', 1 );


function odin_acoes_da_obra__taxonomy() {
    $args = array(
        'hierarchical'      => false,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Ação', // Nome (Singular) da nova Taxonomia.
        'acoes-da-obra', // Slug do Taxonomia.
        'status-da-obra' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Ações', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_acoes_da_obra__taxonomy', 1 );

function odin_acoes_sociais_da_obra_taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Local', // Nome (Singular) da nova Taxonomia.
        'acoes-sociais-da-obra', // Slug do Taxonomia.
        'acoes-sociais-obra' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Locais', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_acoes_sociais_da_obra_taxonomy', 1 );

function odin_acoes_sociais_da_obra__taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Ação', // Nome (Singular) da nova Taxonomia.
        'tag-acoes-sociais-da-obra', // Slug do Taxonomia.
        'acoes-sociais-obra' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Ações sociais', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_acoes_sociais_da_obra__taxonomy', 1 );

function odin_valores_category__taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Categoria', // Nome (Singular) da nova Taxonomia.
        'valores-category', // Slug do Taxonomia.
        'valores' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Categoria', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_valores_category__taxonomy', 1 );
