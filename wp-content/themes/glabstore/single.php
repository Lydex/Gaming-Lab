<!-- Contenido de entradas del sitio web -->

<?php get_header(); ?>
<div class="row">
	<div class="container">
		<?php if( have_posts() ) : the_post(); ?>
			<br>
			<div class="panel panel-default">
  				<div class="panel-body">
					<section>
						<h2><?php the_title(); ?></h2>
						<address>Por <?php the_author_posts_link(); ?></address>
						

						<?php the_content(); ?>
					</section>
				</div>
						<div class="panel-footer">
							<time datatime="<?php the_time('Y-m-j'); ?>"> Fecha: <?php the_time('j F, Y'); ?></time>
							Categoría: <?php the_category(); ?>
						</div>
			</div>

		<?php else : ?>
			<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
		<?php endif; ?>
	</div>
</div>

<?php 
	$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);

	if($disableSidebar !== 'true')
		get_sidebar();
?>
<?php get_footer(); ?>