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
      </div>
      <!--close sidebar_container-->		  
	 
	  <div id="content">
        <div class="content_item">
        <h2><?php the_title(); ?></h2>
					<?php 
					if (have_posts()) :
						while(have_posts()) :
							?>
						<p>
							<?php the_post();
							the_content();?>
						</p>

					<?php endwhile;
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
	</div><!--close site_content--> 
  
  
  
 <?php 
 get_footer();
 ?>
