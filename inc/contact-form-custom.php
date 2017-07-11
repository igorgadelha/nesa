<?php
  require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
  require_once get_template_directory() . '/core/classes/class-contact-form.php';

  function odin_contact_form() {

      $form = new Odin_Contact_Form(
          'contact_form',
          'igor.gadelhaweb@gmail.com'
      );

            $form->set_fields(
                array(
                    array(
                        'fields' => array(
                            array(
                                'id'          => 'sender_name', // Required
                                'label'       => array( 'text' => __( 'Name', 'odin' ) ), // Required
                                'type'        => 'text', // Required
                                'required'    => false, // Optional (bool)
                                'attributes'  => array( // Optional (html input elements)
                                    'placeholder' => __( 'Digite o seu nome' )
                                ),
                                'description' => __( 'Digite seu primeiro nome e sobrenome', 'odin' ) // Optional
                            ),
                        )
                    ),
                    array(
                        'fields' => array(
                            array(
                                'id'          => 'sender_email', // Required
                                'label'       => array('text' => __( 'E-mail', 'odin' ) ), // Required
                                'type'        => 'email', // Required
                                'required'    => true, // Optional (bool)
                                'attributes'  => array( // Optional (html input elements)
                                    'placeholder' => __( 'Digite o seu e-mail!' )
                                ),
                                'description' => __( 'Precisa ser um endere&ccedil;o de e-mail v&aacute;lido', 'odin' ) // Optional
                            ),
                            array(
                                'id'          => 'sender_message', // Required
                                'label'       => array('text' => __( 'Mensagem', 'odin' ) ), // Required
                                'type'        => 'textarea', // Required
                                'required'    => true, // Optional (bool)
                                'attributes'  => array( // Optional (html input elements)
                                    'placeholder' => __( 'Digite a sua mensagem' )
                                ),
                            ),
                            array(
                                'id'          => 'sender_file', // Required
                                'label'       => array('text' => __( 'Arquivo', 'odin' ) ), // Required
                                'type'        => 'file', // Required
                                'required'    => false, // Optional (bool)
                            )
                        )
                    )
                )
            );

      $form->set_subject( __( 'Email enviado por [sender_name] <[sender_email]>', 'odin' ) );

      $form->set_content_type( 'html' );

      $form->set_reply_to( 'sender_email' );

      return $form;
  }

  add_action( 'init', array( odin_contact_form(), 'init' ), 1 );
