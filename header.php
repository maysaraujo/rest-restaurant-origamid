<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>
  <!-- <?php bloginfo('name'); ?>  -->
  <meta name="description" content="<?php wp_title(''); ?> <?php the_field('description_seo'); ?>">

  <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <!-- Header WordPress -->
  <?php wp_head(); ?>
  <!-- Fecha Header WordPress -->
</head>

<body>
  <header>
    <nav>
      <?php $args = [
        'menu' => 'principal',
        'container' => false
      ];
      wp_nav_menu($args); ?>
    </nav>

    <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

    <!-- <?php $sobre = get_page_by_title('Sobre')->ID; ?>
    <p><?php echo get_post_meta($sobre, 'historia', true); ?></p> -->

    <?php $contato = get_page_by_title('Contato')->ID; ?>
    <p><?php the_field('endereco_header', $contato) ?></p>
    <p class="telefone"><?php the_field('telefone_header', $contato) ?></p>
  </header>
