<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav class="navbar navbar-light mx-3">
      <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
      <?php wp_nav_menu([
          'theme_location' => 'header',
          'menu_class' => 'nav  justify-content-end',
          ]) ?>
    <!--
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    -->
    </nav>
  <style>
  header{
  background-image: url('<?php header_image() ?>');
  background-size: cover;}
  </style>
</header>
  
