<?php get_header(); ?>

 

<div class="container">

<div class="blog-container">
<div class="blog-art">
	<!-- Start the Loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<!-- Begin the first article -->
	
				
			<!-- Display the Title as a link to the Post's permalink. -->
			
			<div class="clearer"></div>
			<div class="img"><?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail(full);
} 
?></div>
<h1>
				<?php the_title(); ?>
			</h1>
			<p class="date"><?php the_date('d','',' '); ?><span><?php the_time('F, Y') ?></span></p> <p class="author">BUSINESS | DESIGN | BY <?php the_author_posts_link() ?></p>
  	
	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
		
			
			<!-- Display the Post's Content in a div box. -->
			<div class="entry">
			<p>	<?php the_content(); ?></p>
			</div>
			
			<!-- Display a comma separated list of the Post's Categories. -->
		
		
		</div>	
		<!-- Closes the first article -->
		<hr>
		<!-- Begin Comments -->
	    <?php comments_template( '', true ); ?>
	    <!-- End Comments -->
	
	<!-- Stop The Loop (but note the "else:" - see next line). -->
	<?php endwhile; else: ?>
	
		<!-- The very first "if" tested to see if there were any Posts to -->
		<!-- display.  This "else" part tells what do if there weren't any. -->
		<div class="alert-box error">Sorry, no posts matched your criteria.</div>
	
	<!--End the loop -->
	<?php endif; ?>
	</div>	
	<div class="swidget">
 <?php dynamic_sidebar( 'home_sidebar' ); ?>

	</div>
	
	</div>
	<div class="clearer"></div>
<?php get_footer(); ?>