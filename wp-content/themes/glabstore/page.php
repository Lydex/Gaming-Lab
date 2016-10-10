<!-- Contenido de las páginas -->

<?php get_header(); ?>

<div class="row">
	<div class="container">
		<?php if ( have_posts() ) : the_post(); ?>
			<section>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</section>
		<?php endif; ?>
	</div>
</div>

<?php 
	$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);

	if($disableSidebar !== 'true')
		get_sidebar();
?>

<?php get_footer(); ?>