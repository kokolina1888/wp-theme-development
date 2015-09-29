<?php 
get_header();
?>
<!--sidebar-->
<div class="sidebar_container">       
	<div class="sidebar">
		<?php 
		if(dynamic_sidebar('sidebar1')) : 
			get_sidebar('sidebar1') ;
		else:
			endif;
		?>
		
	</div><!--close sidebar-->  		
</div><!--close sidebar_container-->		  

<div id="content">
	<div class="content_item">	
	<h1><?php the_title(); ?></h1>
		<?php 
		if (have_posts()) :
			while(have_posts()) :				
				the_post();
			the_content();
			endwhile;
			endif;
			?>	
		<?php 
		if (have_posts()) :
			while(have_posts()) :				
				the_post();
			?>
			<h3><?php the_title();?></h3>
			<?php
			the_content();
			?>
			<p><span>written by</span> 
				<?php the_author(); echo ", ";
				the_time( get_option( 'date_format' ) );
				?>
			</p>
			<?php
			endwhile;
			endif;
			?>
		</div><!--close content_item-->
	</div><!--close content-->   
	<div id="content_beige">
		<?php 
		if(dynamic_sidebar('sidebar_bottom')) : 
			get_sidebar('sidebar_bottom') ;
		else:
			endif;
		?>
		<br style="clear:both"/>
	</div><!--close content_beige--> 	
</div>


<?php 
get_footer();
?>
