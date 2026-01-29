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
  <button class="navbar-toggler" 
          type="button" 
          data-toggle="collapse" 
          data-target="#navbarNav" 
          aria-controls="navbarNav" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <?php    
        wp_nav_menu( array(
          'theme_location' => 'infobasic_main_menu',
          'depth'          => 3, 
          'container'      => false,
          'container_id'     => 'navbarNav',
          'menu_class'     => 'navbar-nav ml-auto',
          'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
          'walker'         => new WP_Bootstrap_Navwalker(),
        ) );
    ?>

</nav>
</div>