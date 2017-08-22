<?php

function odin_transparence_taxonomy() {

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

    $video->set_arguments(
      array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_tagcloud'     => true,
        'publicly_queryable'  => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
    )
  );
}

add_action( 'init', 'odin_transparence_taxonomy', 1 );

function odin_pdf_group_taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => false,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        __('Grupo de documento', 'odin'), // Nome (Singular) da nova Taxonomia.
        'grupo-de-documento', // Slug do Taxonomia.
        'pdf' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Grupos de documentos', 'odin' ),
            'name'               => __( 'grupo de documentos', 'odin' ),
            'singular_name'      => __( 'grupo de documentos', 'odin' ),
            'add_new'            => __( 'adicionar novo grupo de documentos', 'odin' ),
            'new_item'           => __( 'novo grupo de documentos', 'odin' ),
            'edit_item'          => __( 'editar grupo de documentos', 'odin' ),
            'view_item'          => __( 'Ver grupo de documentos', 'odin' ),
            'all_items'          => __( 'todos os grupos de documentos', 'odin' ),
            'search_items'       => __( 'pesquisar grupos de documentos', 'odin' ),


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
        'show_in_nav_menus' => false,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        __('Grupo acionista', 'odin'), // Nome (Singular) da nova Taxonomia.
        'grupos-acionistas', // Slug do Taxonomia.
        'acionistas' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Grupos acionistas', 'odin' ),
            'name'               => __( 'grupo acionista', 'odin' ),
            'singular_name'      => __( 'grupo acionista', 'odin' ),
            'add_new'            => __( 'adicionar novo grupo acionista', 'odin' ),
            'new_item'           => __( 'novo grupo acionista', 'odin' ),
            'edit_item'          => __( 'editar grupo acionista', 'odin' ),
            'view_item'          => __( 'Ver grupo acionista', 'odin' ),
            'all_items'          => __( 'todos os grupos acionistas', 'odin' ),
            'search_items'       => __( 'pesquisar grupos acionistas', 'odin' ),
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
        'show_in_nav_menus' => false,
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
        'show_in_nav_menus' => false,
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
        'show_in_nav_menus' => false,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        'Local', // Nome (Singular) da nova Taxonomia.
        'acoes-sociais-da-obra', // Slug do Taxonomia.
        'acoes-sociais-obra' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Locais', 'odin' ),
            'name'               => __( 'local', 'odin' ),
            'singular_name'      => __( 'local', 'odin' ),
            'add_new'            => __( 'adicionar novo local', 'odin' ),
            'new_item'           => __( 'novo local', 'odin' ),
            'edit_item'          => __( 'editar local', 'odin' ),
            'view_item'          => __( 'Ver local', 'odin' ),
            'all_items'          => __( 'todos os locais', 'odin' ),
            'search_items'       => __( 'pesquisar locais', 'odin' ),
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
        'show_in_nav_menus' => false,
        'show_tagcloud'     => true,
    );

    $video = new Odin_Taxonomy(
        __('ação social', 'odin'), // Nome (Singular) da nova Taxonomia.
        'tag-acoes-sociais-da-obra', // Slug do Taxonomia.
        'acoes-sociais-obra' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'Ações sociais', 'odin' ),
            'name'               => __( 'ação social', 'odin' ),
            'singular_name'      => __( 'ação social', 'odin' ),
            'add_new'            => __( 'adicionar nova ação social', 'odin' ),
            'new_item'           => __( 'nova ação social', 'odin' ),
            'edit_item'          => __( 'editar ação social', 'odin' ),
            'view_item'          => __( 'Ver ação social', 'odin' ),
            'all_items'          => __( 'todas as ações sociais', 'odin' ),
            'search_items'       => __( 'pesquisar ações sociais', 'odin' ),
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
        __( 'categoria', 'odin' ), // Nome (Singular) da nova Taxonomia.
        'valores-category', // Slug do Taxonomia.
        'valores' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $video->set_labels(
        array(
            'menu_name' => __( 'categoria', 'odin' )
        )
    );

    $video->set_arguments( $args );
}

add_action( 'init', 'odin_valores_category__taxonomy', 1 );
