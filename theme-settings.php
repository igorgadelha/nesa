<?php

function odin_theme_settings_example() {
  $general = array(
    // Section fields (Required)
       // Logo field.
       array(
           'id'          => 'logo_image', // Required
           'label'       => __( 'Logo', 'odin' ), // Required
           'type'        => 'image', // Required
           // 'default'     => '', // Optional (image attachment id)
           'description' => __( 'Escolha o logotipo do header', 'odin' ), // Optional
       ),
       // Favico field.
       array(
           'id'          => 'favico_image', // Required
           'label'       => __( 'Favico', 'odin' ), // Required
           'type'        => 'upload', // Required
           // 'default'     => '', // Optional (image attachment id)
           'description' => __( 'Escolha o favico', 'odin' ), // Optional
       ),
       // footer image field.
       array(
         'id'          => 'footer_image', // Required
         'label'       => __( 'Footer', 'odin' ), // Required
         'type'        => 'image', // Required
         // 'default'     => '', // Optional (image attachment id)
         'description' => __( 'Escolha o logotipo do footer', 'odin' ), // Optional
       )
    );

  $odin_config = array(
      // Section fields (Required)
      array(
          'id'          => 'highlight_config', // Obrigatório
          'label'       => __( 'Exibir destaque como carrosel', 'odin' ), // Obrigatório
          'type'        => 'checkbox', // Obrigatório
          // 'attributes' => array(), // Opcional (atributos para input HTML/HTML5)
          'default'     => 'no', // Opcional (utilize 'yes' para deixar marcado como padrão)
          'description' => __( '', 'odin' ), // Opcional
        )
    );

  $odin_ad = array(
       // Logo field.
       array(
           'id'          => 'ad_1', // Required
           'label'       => __( 'Banner', 'odin' ), // Required
           'type'        => 'upload', // Required
           // 'default'     => '', // Optional (image attachment id)
           'description' => __( 'Escolha o banner da propaganda 01', 'odin' ), // Optional
       ),
       // facebook
        array(
           'id'          => 'ad_1_url', // Obrigatório
           'label'       => __( 'Link', 'odin' ), // Obrigatório
           'type'        => 'text', // Obrigatório
           'default'     => '', // Opcional
           'description' => __( 'Link do banner 01. Deixe vazio, para não exibir', 'odin' ), // Opcional
       ),
       // Favico field.
       array(
           'id'          => 'ad_2', // Required
           'label'       => __( 'Banner', 'odin' ), // Required
           'type'        => 'upload', // Required
           // 'default'     => '', // Optional (image attachment id)
           'description' => __( 'Escolha o banner da propaganda 02', 'odin' ), // Optional
       ),
       // facebook
       array(
         'id'          => 'ad_2_url', // Obrigatório
         'label'       => __( 'Link', 'odin' ), // Obrigatório
         'type'        => 'text', // Obrigatório
         'default'     => '', // Opcional
         'description' => __( 'Link do banner 02. Deixe vazio, para não exibir', 'odin' ), // Opcional
       )
    );

  $odin_social = array( // Section fields (Required)
      // facebook
       array(
          'id'          => 'fb', // Obrigatório
          'label'       => __( 'Facebook', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional
          'description' => __( 'Deixe vazio, para não exibir', 'odin' ), // Opcional
      ),
      // twitter
       array(
          'id'          => 'tt', // Obrigatório
          'label'       => __( 'Twitter', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional
          'description' => __( 'Deixe vazio, para não exibir', 'odin' ), // Opcional
      ),
      // isntagram
       array(
          'id'          => 'ig', // Obrigatório
          'label'       => __( 'Instagram', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional
          'description' => __( 'Deixe vazio, para não exibir', 'odin' ), // Opcional
      ),
      // YouTube
       array(
          'id'          => 'yt', // Obrigatório
          'label'       => __( 'YouTube', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional
          'description' => __( 'Deixe vazio, para não exibir', 'odin' ), // Opcional
      ),
      // linkedIn
       array(
          'id'          => 'in', // Obrigatório
          'label'       => __( 'LinkedIn', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional
          'description' => __( 'Deixe vazio, para não exibir', 'odin' ), // Opcional
      ),
      // linkedIn
       array(
          'id'          => 'fk', // Obrigatório
          'label'       => __( 'Flicker', 'odin' ), // Obrigatório
          'type'        => 'text', // Obrigatório
          'default'     => '', // Opcional
          'description' => __( 'Deixe vazio, para não exibir', 'odin' ), // Opcional
      )
    );

    $settings = new Odin_Theme_Options(
        'odin-settings', // Slug/ID of the Settings Page (Required)
        'Opções do tema', // Settings page name (Required)
        'manage_options' // Page capability (Optional) [default is manage_options]
    );

    $settings->set_tabs(
        array(
            array(
                'id' => 'odin_general', // Slug/ID of the Settings tab (Required)
                'title' => __( 'Informações Gerais', 'odin' ), // Settings tab title (Required)
            ),
            array(
              'id' => 'odin_social', // Slug/ID of the Settings tab (Required)
              'title' => __( 'Redes Sociais', 'odin' ), // Settings tab title (Required)
            ),
            array(
                'id' => 'odin_ad', // Slug/ID of the Settings tab (Required)
                'title' => __( 'Gerenciamento de Propagandas (AdSense)', 'odin' ), // Settings tab title (Required)
            ),
            array(
                'id' => 'odin_config', // Slug/ID of the Settings tab (Required)
                'title' => __( 'Configurações', 'odin' ), // Settings tab title (Required)
            )
        )
    );

    $settings->set_fields(
        array(
            'odin_general_fields_section' => array( // Slug/ID of the section (Required)
                'tab'   => 'odin_general', // Tab ID/Slug (Required)
                'title' => __( 'Section Example', 'odin' ), // Section title (Required)
                'fields' => $general
            ),
            'odin_social' => array( // Slug/ID of the section (Required)
                'tab'   => 'odin_social', // Tab ID/Slug (Required)
                'title' => __( 'Redes Sociais', 'odin' ), // Section title (Required)
                'fields' => $odin_social
            ),
            'odin_ad' => array( // Slug/ID of the section (Required)
                'tab'   => 'odin_ad', // Tab ID/Slug (Required)
                'title' => __( 'Propagandas', 'odin' ), // Section title (Required)
                'fields' => $odin_ad
            ),
            'odin_config' => array( // Slug/ID of the section (Required)
                'tab'   => 'odin_config', // Tab ID/Slug (Required)
                'title' => __( 'Configurações', 'odin' ), // Section title (Required)
                'fields' => $odin_config
            )
        )
    );
}

add_action( 'init', 'odin_theme_settings_example', 1 );
