<?php 
/*
Template name: full-width
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
	

	<div id="content_beige">
		<div class="content_beige_container_box">
			<h4>Latest Blog Post</h4>
			<p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
			<div class="readmore">
				<a href="#">Read more</a>
			</div><!--close readmore-->
		</div><!--close content_beige_container_box-->
		<div class="content_beige_container_box">
			<h4>Latest News</h4>
			<p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
			<div class="readmore">
				<a href="#">Read more</a>
			</div><!--close readmore-->
		</div><!--close content_beige_container_box-->
		<div class="content_beige_container_boxl">
			<h4>Latest Projects</h4>
			<p> Phasellus laoreet feugiat risus. Ut tincidunt, ante vel fermentum iaculis.</p>
			<div class="readmore">
				<a href="#">Read more</a>
			</div><!--close readmore-->	  
		</div><!--close content_beige_container_box1-->      
		<br style="clear:both"/>
	</div><!--close content_beige--> 	
</div><!--close site_content--> 

</div><!--close main-->

<?php 
get_footer();
?>
