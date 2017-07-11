<?php

function category_term_meta_example() {

  $category_meta = new Odin_Term_Meta(
      'order', // Slug/ID do Term Meta (obrigatório)
       array ('sitio-da-obra', 'grupos-acionistas',  'acoes-sociais-da-obra') // Slug da Taxonomia, sendo possível enviar apenas um valor ou um array com vários (opcional)
  );
  $category_meta->set_fields(
    array(
        array(
            'id'          => 'order_field',
            'label'       => __( 'Ordem', 'odin' ),
            'type'        => 'input',
            'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
                'type'     => 'number',
                'required' => 'required'
            ),
            'default'     => 0, // Opcional
            'description' => __( 'Selecione a Ordem de Exibição', 'odin' )
        )
    )
  );
}

add_action( 'init', 'category_term_meta_example', 1 );

function status_da_obra_terms_meta () {

  $category_meta = new Odin_Term_Meta(
      'order', // Slug/ID do Term Meta (obrigatório)
       array ('acoes-da-obra', 'tag-acoes-sociais-da-obra' ) // Slug da Taxonomia, sendo possível enviar apenas um valor ou um array com vários (opcional)
  );
  $category_meta->set_fields(
    array(
        array(
            'id'          => 'total_field',
            'label'       => __( 'Total', 'odin' ),
            'type'        => 'input',
            'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
                'type'     => 'number',
                'required' => 'required'
            ),
            'default'     => 0, // Opcional
            'description' => __( 'Diga o total de itens dentro do grupo', 'odin' )
        )
    )
  );
}

add_action( 'init', 'status_da_obra_terms_meta', 1 );
