<?php

function get_field($key, $page_id = 0)
{
  $id = $page_id !== 0 ? $page_id : get_the_ID();

  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0)
{
  echo get_field($key, $page_id);
}

// Página - Menu da Semana
add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home()
{
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Menu da Semana',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

  // Primeira categoria
  $cmb->add_field([
    'name' => 'Primeiro prato',
    'desc'    => 'Insira a categoria do cardápio.',
    'id' => 'primeiro_prato',
    'type' => 'text_small',
  ]);

  $pratos = $cmb->add_field([
    'name' => 'Pratos',
    'id' => 'pratos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Prato {#}',
      'add_button' => 'Adicionar Prato',
      'remove_button' => 'Remover Prato',
      'sortable' => true,
    ]
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Nome',
    'desc'    => 'Insira o nome do prato.',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Descriçao',
    'desc'    => 'Insira a descrição do prato.',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Preço',
    'desc'    => 'Insira o preço do prato (não precisa colocar o "R$").',
    'id' => 'preco',
    'type' => 'text',
  ]);

  // Segunda categoria

  $cmb->add_field([
    'name' => 'Segundo prato',
    'desc'    => 'Insira a categoria do cardápio.',
    'id' => 'segundo_prato',
    'type' => 'text_small',
  ]);

  $pratos2 = $cmb->add_field([
    'name' => 'Pratos2',
    'id' => 'pratos2',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Prato {#}',
      'add_button' => 'Adicionar Prato',
      'remove_button' => 'Remover Prato',
      'sortable' => true,
    ]
  ]);

  $cmb->add_group_field($pratos2, [
    'name' => 'Nome',
    'desc'    => 'Insira o nome do prato.',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos2, [
    'name' => 'Descriçao',
    'desc'    => 'Insira a descrição do prato.',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos2, [
    'name' => 'Preço',
    'desc'    => 'Insira o preço do prato (não precisa colocar o "R$").',
    'id' => 'preco',
    'type' => 'text',
  ]);
}

// Página - Sobre
add_action('cmb2_admin_init', 'cmb2_fields_historia');
function cmb2_fields_historia()
{
  $cmb = new_cmb2_box([
    'id' => 'historia_box',
    'title' => 'Historia',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-sobre.php',
    ],
  ]);

  $textos = $cmb->add_field([
    'name' => 'Textos',
    'id' => 'textos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Texto {#}',
      'add_button' => 'Adicionar Texto',
      'sortable' => true,
    ]
  ]);

  $cmb->add_group_field($textos, [
    'name' => 'Titulo',
    'id' => 'titulo',
    'type' => 'text',
  ]);

  $cmb->add_group_field($textos, [
    'name' => 'Conteúdo',
    'id' => 'conteudo',
    'type' => 'textarea',
  ]);

  $cmb->add_field(array(
    'name'    => 'Foto',
    'desc'    => 'Faça upload de uma imagem ou insira a URL.',
    'id'      => 'foto',
    'type'    => 'file',
    // Optional:
    'options' => array(
      'url' => false, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Add or Upload File' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    'query_args' => array(
      'type' => [
        'image/gif',
        'image/jpeg',
        'image/png',
      ]
    ),
    // 'preview_size' => 'large', // Image size to use when previewing in the admin.
  ));

  $cmb->add_field([
    'name' => 'Alt Text',
    'desc'    => 'Insira o alt text da imagem.',
    'id' => 'alt_text_historia',
    'type' => 'text_small',
  ]);
}

// Página - Contato
add_action('cmb2_admin_init', 'cmb2_fields_contato');

function cmb2_fields_contato()
{
  $cmb = new_cmb2_box([
    'id' => 'contato_box',
    'title' => 'Contato',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-contato.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Endereço Header',
    'desc'    => 'Insira o endereço do cabeçalho do site.',
    'id' => 'endereco_header',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Telefone Header',
    'desc'    => 'Insira o telefone do cabeçalho do site.',
    'id' => 'telefone_header',
    'type' => 'text',
  ]);
}