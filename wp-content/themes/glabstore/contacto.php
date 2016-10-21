<?php
/***
* Template Name: Plantilla contacto
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
		
		<section>
			<h1><?php the_title(); ?></h1>
			<div class="row">
				<div class="col-sm-offset-1 col-sm-4">
					<?php the_content(); ?>
				</div>
				<div class="col-sm-7">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13576.632588220466!2d-106.4275565!3d31.7115747!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x24f693960500dcdf!2sGaming+Lab!5e0!3m2!1ses-419!2smx!4v1476480672716" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</section>
		
<?php endif; ?>

<?php get_footer(); ?>