<?php 
/*
Template Name: Archives
*/

get_header();

?>

<!-- archives -->
    <div class="container-fluid">
	 	<div class="row">

            <div class="span8">
                <?php the_post(); ?>
                <h2 class="entry-title"><?php the_title(); ?></h2>
                            
                <h4 class="subheader">Archives by Month:</h4>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
                    
                <h4 class="subheader">Archives by Subject:</h4>
                <ul>
                     <?php wp_list_categories(); ?>
                </ul>
        
            </div>
    
  


		</div>
	</div>
<?php get_footer(); ?>

<!-- archives -->