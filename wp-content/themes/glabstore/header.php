<!-- Cabecera del sitio web -->

<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body class="container">
	<div class="row">
		<?php $menu_header = array(
			 'theme_location' => 'menu-header',
			 'container_class' => 'menuheader collapse navbar-collapse',
			 'container_id'    => 'navbar',
			 'menu_class'      => 'nav navbar-nav navbar-right',
		); ?>
		
		<?php wp_nav_menu( $menu_header ); ?>
	

	<header class="tituloedit">
		<h1><?php bloginfo('name'); ?></h1>
	</header>
	

	<?php $menu_principal = array( 
		 'theme_location' => 'menu-principal',
		 'container_class' => 'menuprincipal collapse navbar-collapse',
		 'container_id'    => 'navbar',
		 'menu_class'      => 'nav navbar-nav navbar-left',
	); ?>

	<?php wp_nav_menu( $menu_principal ); ?>
	</div>

