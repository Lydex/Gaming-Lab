<!-- Listado de entradas del sitio web -->

<?php get_header(); ?>

<br>
<?php if ( have_posts() ) : ?>

	<section>

		<?php while ( have_posts() ) : the_post(); ?>

				<article>
				<div class="panel panel-default">
					<div class="panel-body">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
							<address>Por <?php the_author_posts_link() ?></address>
							<hr>
							<?php
								the_post_thumbnail( 'single-post-thumbnail' ); 
							?>
						<?php the_excerpt(); ?>
					</div>

					<div class="panel-footer">
						<footer>
							<?php the_tags(); ?>
							<time datatime="<?php the_time('Y-m-j'); ?>">Fecha: <?php the_time('j F, Y'); ?></time>
							Categoría: <?php the_category(); ?>
						</footer>
					</div>
					</div>
				</article>

		<?php endwhile; ?>

		<div class="pagination">
			<span class="in-left"><?php next_posts_link('<< Entradas antiguas'); ?></span>
			<span class="in-right"><?php previous_posts_link('Entradas más recientes >>'); ?></span>
		</div>
	</section>

<?php else: ?>
	<p><?php _e('Ups!, no hay entradas. '); ?></p>
<?php endif; ?>

<?php 
	$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);

	if($disableSidebar !== 'true')
		get_sidebar();
?>

<?php get_footer(); ?>	