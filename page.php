
<?php get_header(); ?>

<div class="container"> 

<div class="blog-container">
<div class="blog-art">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_post_thumbnail('page-static');?>

	 <?php endwhile; else: ?>
    <!--Insert default image?-->
    <?php endif; ?>
	<div class="clearer"></div>

     
        <div class="blog-art-padding">
         
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Begin the first div -->
	
				
					
			<!-- Display the Page's Content in a div box. -->
			
				<?php the_content(); ?>
	
	
		<!-- Closes the first div -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, the page you requested was not found</div>
	
	<!--End the loop -->
	<?php endif; ?>
		</div>		</div>	
     </div>	
  

	<!-- end row -->
	</div>	

<?php get_footer(); ?>
