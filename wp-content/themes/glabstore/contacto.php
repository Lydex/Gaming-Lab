<?php
/***
* Template Name: Plantilla personalizada (Ej. contacto)
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
		<section>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>

		</section>
<?php endif; ?>

<?php get_footer(); ?>