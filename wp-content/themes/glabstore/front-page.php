<!-- Contenido de la página de inicio -->

<?php get_header(); ?>

<?php $menu_slider = array( 
		 'theme_location' => 'menu-slider',
		 'container_class' => 'menuslider collapse navbar-collapse',
		 'container_id'    => 'navbar',
		 'menu_class'      => 'nav navbar-nav navbar-left',
	); ?>



<?php if ( have_posts() ) : the_post(); ?>
	<div class="principal">
		<section>
			<?php wp_nav_menu( $menu_slider ); ?>
			<?php the_content(); ?>
		</section>
	</div>
<?php endif; ?>

<?php 
	$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);

	if($disableSidebar !== 'true')
		get_sidebar();
?>
<?php get_footer(); ?> 