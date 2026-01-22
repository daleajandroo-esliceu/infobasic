<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>

    <title>Mi página de inicio</title>
</head>
<body <?php body_class()?>>

<div class="cabecer">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url( "/") ?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

  <?php
        wp_nav_menu(
          array(
            'theme_location' => ''
          )
        )
  ?>
  
  </div>
</nav>
</div>