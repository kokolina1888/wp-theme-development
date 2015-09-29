<?php 
/*
Template name: full-height
*/
get_header(); ?>
<div class="content full-width">
	<div class="full-width">		
		<h1><?php the_title(); ?></h1>
		<?php 
		if (have_posts()) :
			while(have_posts()) :				
			the_post();
			the_content();
			endwhile;
			endif;
			?>
		</div><!--close content_item-->
	</div><!--close content-->  
	</div><!--close site_content--> 
</div><!--close main--> 	
<?php 
get_footer();
?>
