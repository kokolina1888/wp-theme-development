<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @subpackage StonesMT
 * 
 */

get_header(); ?>
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

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			?>
			<h2><?php the_title();?></h2>
			<?php the_content(); ?>
			<p>author <?php the_author(); echo " - ";the_time( get_option( 'date_format' ) );?></p>
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'StonesMT' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'StonesMT' ) . '</span> ' .
				'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'StonesMT' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'StonesMT' ) . '</span> ' .
				'<span class="post-title">%title</span>',
				) );

		// End the loop.
			endwhile;		
			?>
