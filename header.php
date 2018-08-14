<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body id="page-top">
  <?php
  	$custom_logo_id = get_theme_mod( 'custom_logo' );
  	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo $logo[0]; ?>" alt=""></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
        	<?php wp_nav_menu( array(
        		'theme_location' 	=> 'header-menu',
        		'container_id'		=> 'navbarResponsive',
        		'container_class' 	=> 'collapse navbar-collapse',
        		'menu_class'     	=> 'navbar-nav ml-auto'
        		)
        	); ?>
        <?php } ?>
        
      </div>
    </nav>
    <?php
      if ( current_user_can( 'administrator' ) ) {
        echo '<div style="text-align: center">Eres el administrador</div>';
      } else {
        echo '<div style="text-align: center">Hola Muggle</div>';
      }
    ?>
