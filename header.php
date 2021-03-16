<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.png">
  <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/www.jpg">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>