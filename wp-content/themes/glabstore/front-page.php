<!-- Contenido de la página de inicio -->

<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
	<section>
		<?php the_content(); ?>
	</section>
<?php endif; ?>

<?php 
	$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);

	if($disableSidebar !== 'true')
		get_sidebar();
?>
<?php get_footer(); ?> 