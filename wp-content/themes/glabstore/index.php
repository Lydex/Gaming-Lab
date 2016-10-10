<?php get_header(); ?>

		<?php
			if(have_posts()) :
				while (have_posts()) : {
					the_post();
						the_title();
						echo( '<br>' );
						the_content();
						echo( '<br>' );
				}
				endwhile;
			endif;
		?>

<?php 
	$disableSidebar = get_post_meta($post->ID, 'disableSidebar', $single = true);

	if($disableSidebar !== 'true')
		get_sidebar();
?>
