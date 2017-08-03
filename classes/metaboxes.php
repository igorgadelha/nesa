<?php

// destaque metabox
function odin_carousel_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox(
		'destaques', // Slug/ID do Metabox (obrigatório)
		'Configurações de destaque', // Nome do Metabox  (obrigatório)
		'destaque', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'advanced', // Contexto (opções: normal, advanced, ou side) (opcional)
		'high' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
					array(
							'id'         => 'url', // Required
							'label'      => __( 'Link da publicação', 'odin' ), // Required
							'type'       => 'text', // Required
							'attributes' => array( // Optional (html input elements)
									'placeholder' => __( 'URL' )
							),
							// 'default'  => 'Default text', // Optional
							// 'description' => __( 'Text field description', 'odin' ) // Optional
					)
			)
	);

}
add_action( 'init', 'odin_carousel_cpt_metabox', 1 );

// acionistas metabox
function odin_acionistas_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox(
		'destaques', // Slug/ID do Metabox (obrigatório)
		'Website do acionista', // Nome do Metabox  (obrigatório)
		'acionistas', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'advanced', // Contexto (opções: normal, advanced, ou side) (opcional)
		'high' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
					array(
							'id'         => 'url', // Required
							'label'      => __( 'Link da publicação', 'odin' ), // Required
							'type'       => 'text', // Required
							'attributes' => array( // Optional (html input elements)
									'placeholder' => __( 'URL' )
							),
							// 'default'  => 'Default text', // Optional
							// 'description' => __( 'Text field description', 'odin' ) // Optional
					)
			)
	);

}

add_action( 'init', 'odin_acionistas_cpt_metabox', 1 );

// page metabox
function odin_page_values_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox(
		'valores', // Slug/ID do Metabox (obrigatório)
		'Valores', // Nome do Metabox  (obrigatório)
		'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'advanced', // Contexto (opções: normal, advanced, ou side) (opcional)
		'high' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
					array(
							'id'         => 'valores_title', // Required
							'label'      => __( 'Título', 'odin' ), // Required
							'type'       => 'text', // Required
							'attributes' => array( // Optional (html input elements)
									'placeholder' => __( 'Título' )
							),
							// 'default'  => 'Default text', // Optional
							// 'description' => __( 'Text field description', 'odin' ) // Optional
					),
					array(
					    'id'          => 'valores_text', // Obrigatório
					    'label'       => __( 'Texto', 'odin' ), // Obrigatório
					    'type'        => 'textarea', // Obrigatório
					    'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
					        'placeholder' => __( 'Deixe sua descrição aqui' )
					    ),
					    'default'     => '', // Opcional
					    // 'description' => __( 'Descrition Example', 'odin' ), // Opcional
					)
			)
	);

}

add_action( 'init', 'odin_page_values_cpt_metabox', 1 );

// status da obra metabox
function odin_status_da_obra_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox(
		'percentual', // Slug/ID do Metabox (obrigatório)
		'Percentual de andamento da obra', // Nome do Metabox  (obrigatório)
		array ( 'status-da-obra', 'acoes-sociais-obra' ), // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'advanced', // Contexto (opções: normal, advanced, ou side) (opcional)
		'high' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
					array(
							'id'         => 'percentual', // Required
							'label'      => __( 'Percentual de andamento da obra (sem símbolo)', 'odin' ), // Required
							'type'       => 'text', // Required
							'attributes' => array( // Optional (html input elements)
									'placeholder' => __( 'Ex: 99' )
							),
							// 'default'  => 'Default text', // Optional
							// 'description' => __( 'Text field description', 'odin' ) // Optional
					),
					array(
				    'id'   => 'separator1', // Obrigatório
				    'type' => 'separator' // Obrigatório
					),
					array(
						'id'          => 'unidade', // Obrigatório
						'label'       => __( 'Unidade de Medida', 'odin' ), // Obrigatório
						'type'        => 'text', // Obrigatório
						// 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
						'default'     => '%', // Opcional (cor em hexadecimal)
						// 'description' => __( 'Descrition Example', 'odin' ), // Opcional
					),
					array(
				    'id'   => 'separator2', // Obrigatório
				    'type' => 'separator' // Obrigatório
					),
					array(
						'id'          => 'colorbar', // Obrigatório
						'label'       => __( 'Selecione a cor da barra de status', 'odin' ), // Obrigatório
						'type'        => 'color', // Obrigatório
						// 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
						'default'     => '#ffffff', // Opcional (cor em hexadecimal)
						// 'description' => __( 'Descrition Example', 'odin' ), // Opcional
					)
				)
	);

}
add_action( 'init', 'odin_status_da_obra_cpt_metabox', 1 );

// galeria metabox
function odin_galleries_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox(
		'images', // Slug/ID do Metabox (obrigatório)
		'Galeria de Imagens', // Nome do Metabox  (obrigatório)
		'galeria', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
		'high' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
				array(
				    'id'          => 'images_files', // Obrigatório
				    'label'       => __( 'Faça upload das imagens', 'odin' ), // Obrigatório
				    'type'        => 'image_plupload', // Obrigatório
				    'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
				    'description' => __( 'Imagens da galeria', 'odin' ), // Opcional
				)
		 )
	);

}
add_action( 'init', 'odin_galleries_cpt_metabox', 1 );

// transparência metabox
function odin_transparence_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox(
		'documents', // Slug/ID do Metabox (obrigatório)
		'Documento para envio', // Nome do Metabox  (obrigatório)
		'transparencia', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'advanced', // Contexto (opções: normal, advanced, ou side) (opcional)
		'high' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
				array(
				    'id'          => 'doc_files', // Obrigatório
				    'label'       => __( 'upload do arquivo', 'odin' ), // Obrigatório
				    'type'        => 'upload', // Obrigatório
				    'default'     => '', // Opcional (deve ser o id de uma imagem em mídias, separe os ids com virtula)
				    'description' => __( 'Faça upload ou selecione o arquivo que será anexado', 'odin' ), // Opcional
						'attributes' => array('multiple'=>'multiple')
				),
        array(
            'id'   => 'separator1', // Obrigatório
            'type' => 'separator' // Obrigatório
        ),
        array(
            'id'            => 'doc_file_type', // Obrigatório
            'label'         => __( 'Tipo de Arquivo', 'odin' ), // Obrigatório
            'type'          => 'select', // Obrigatório
            // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
            // 'default'       => '<i class="fa fa-file-word-o" aria-hidden="true"></i>', // Opcional
            'description'   => __( 'Escolha o tipo de documento', 'odin' ), // Opcional
            'options'       => array( // Obrigatório (adicione aque os ids e títulos)
                'fa-file-word-o'   => 'DOC',
                'fa-file-pdf-o'   => 'PDF',
                'fa-file-powerpoint-o' => 'PPT',
                'fa-file-excel-o'  => 'XLS',
                'fa-file-archive-o'  => 'ARQUIVO',
                'fa-file-image-o'  => 'IMAGEM',
                'fa-file-o'  => 'OUTROS',
            ),
						'add_column'  => true,
        )
		 )
	);

}
add_action( 'init', 'odin_transparence_cpt_metabox', 1 );

// posts metabox
function odin_posts_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox (
		'post-destaque', // Slug/ID do Metabox (obrigatório)
		'Publicações destacadas', // Nome do Metabox  (obrigatório)
		array('post', 'galeria', 'video', 'audio'), // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'side', // Contexto (opções: normal, advanced, ou side) (opcional)
		'low' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
					array(
							'id'         => 'destaque', // Required
							'label'      => __( 'Publicação destacada?', 'odin' ), // Required
							'type'       => 'checkbox', // Required
							'default'  => 'no', // Optional
							// 'description' => __( 'Text field description', 'odin' ) // Optional
							'add_column'  => true,
					)
			)
	);

}

add_action( 'init', 'odin_posts_cpt_metabox', 1 );
// pages metabox
function odin_page_cpt_metabox () {
	$destaque_metabox = new Odin_Metabox (
		'page-gallery', // Slug/ID do Metabox (obrigatório)
		'Publicações destacadas', // Nome do Metabox  (obrigatório)
		'page', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
		'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
		'low' // Prioridade (opções: high, core, default ou low) (opcional)
	);

	$destaque_metabox->set_fields(
			array(
				array(
						'id'         => 'gallery_code', // Required
						'label'      => __( 'Digite o código da galeria', 'odin' ), // Required
						'type'       => 'text', // Required
						'attributes' => array( // Optional (html input elements)
								'placeholder' => __( 'Ex: [gallery id="10"]' )
						),
						// 'default'  => 'Default text', // Optional
						// 'description' => __( 'Text field description', 'odin' ) // Optional
				),
				array(
						'id'         => 'values_code', // Required
						'label'      => __( 'Digite o código dos valores', 'odin' ), // Required
						'type'       => 'text', // Required
						'attributes' => array( // Optional (html input elements)
								'placeholder' => __( 'Ex: [values id=\"10\"]' )
						),
						// 'default'  => 'Default text', // Optional
						// 'description' => __( 'Text field description', 'odin' ) // Optional
				),
				array(
						'id'         => 'acoes_code', // Required
						'label'      => __( 'Digite o código das acões', 'odin' ), // Required
						'type'       => 'text', // Required
						'attributes' => array( // Optional (html input elements)
								'placeholder' => __( 'Ex: [acoes_da_obra id=\"10\"]' )
						),
						// 'default'  => 'Default text', // Optional
						// 'description' => __( 'Text field description', 'odin' ) // Optional
				),
			)
	);

}

add_action( 'init', 'odin_page_cpt_metabox', 1 );
