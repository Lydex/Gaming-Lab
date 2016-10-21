<!-- Cabecera del sitio web -->

<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body>

	<?php $menu_header = array(
		 'theme_location' => 'menu-header',
		 'container_class' => 'menuheader collapse navbar-collapse',
		 'container_id'    => 'navbar',
		 'menu_class'      => 'nav navbar-nav navbar-right',
	); ?>

	<?php $menu_principal = array( 
		 'theme_location' => 'menu-principal',
		 'container_class' => 'menuprincipal collapse navbar-collapse',
		 'container_id'    => 'navbar',
		 'menu_class'      => 'nav navbar-nav navbar-left',
	); ?>

	<?php $menu_login = array( 
		 'theme_location' => 'menu-login',
		 'container_class' => 'menuheader collapse navbar-collapse',
		 'container_id'    => 'navbar',
		 'menu_class'      => 'nav navbar-nav navbar-right',
	); ?>
	<header>
	<div class="row menu-header">
		<div class="container">
			<div class="col-sm-2">		
				<a href="<?php bloginfo('home'); ?>"><img class="img-responsive center-block" src="<?php bloginfo('template_directory'); ?> /assets/images/GamingLab_Logo.png" width="100"> </a>
			</div>
			<div class="col-sm-7">	
				<?php wp_nav_menu( $menu_principal ); ?>
			</div>
			<div class="hidden-xs col-sm-3">
				<address class="text-right direccion">
					<img src="https://cdn.shopify.com/s/files/1/0735/2017/t/1/assets/img__facebook_logo.png?9540070128477058459" height="18" width="18"> <br> <br>
					C. Aguirre Laredo #6715-D <br>
					Partido La Fuente <br>
					Ciudad Juárez, Chih.
				</address>
			</div>
		</div>
	</div>
	</header>
<?php
	if( is_user_logged_in() )
	{
?>
	<div class="row menuheader">
		<div class="container">
			<div class="col-sm-8">
				<div class="input-group search-menu">
			      <input type="text" class="form-control" placeholder="Buscar...">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
			      </span>
			    </div>
			</div>
			<div class="col-sm-4">
				<?php wp_nav_menu( $menu_header ); ?>
			</div>
		</div>
	</div>
	<br>
<?php } else { ?>
	<div class="row menuheader">
		<div class="container">
			<div class="col-sm-8">
				<form role="search" method="get" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
					<div class="input-group search-menu">
				      <input type="text" class="form-control" placeholder="Buscar...">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
				      </span>
				    </div>
			    </form>
			</div>
			<div class="col-sm-4">
				<?php wp_nav_menu( $menu_login ); ?>
			</div>
		</div>
	</div>
	<br>
<?php }?>

<div class="container">
	<div class="row container-principal">
		
    