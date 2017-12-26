<?php
function register_my_menus() { 
register_nav_menus(
array( 'primary' => __( 'Header Menu' ) )
);

}
add_action( 'init', 'register_my_menus' );


// Disable WordPress version reporting as a basic protection against attacks
function remove_generators() {
	return '';
}	

// custom admin login logo 
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/img/studio-clear.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');
add_filter('the_generator','remove_generators');

// Add thumbnail support
add_theme_support( 'post-thumbnails');

set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   

add_image_size( 'page-feature', 1230, 440, true ); //(cropped)
add_image_size( 'thumb-feature', 325, 180, true ); //(cropped)
add_image_size( 'page-static', 1230, 410, true ); //(cropped)


 


 





// Add theme support for Automatic Feed Links

add_theme_support( 'automatic-feed-links' );

// Custom Navigation

add_theme_support('nav-menus');



// Sidebars

if (function_exists('register_sidebar')) {
	
    // Home Sidebar
	
	register_sidebar(array(
		'name'=> 'Home Sidebar',
		'id' => 'home_sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	));
    
	// Right Sidebar

	register_sidebar(array(
		'name'=> 'Right Sidebar',
		'id' => 'right_sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
	
	// Footer Sidebar
	
	register_sidebar(array(
		'name'=> 'Footer Sidebar',
		'id' => 'footer_sidebar',
		'before_widget' => '<div id="%1$s" class="span4 %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}


 add_action( 'wp_head', 'mp6_override_toolbar_margin', 11 );
function mp6_override_toolbar_margin() { ?>
<style type="text/css" media="screen">
	html { margin-top: 0 !important; }
	* html body { margin-top: 0 !important; }
</style>
<?php
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
} }



function add_theme_scripts() {

   wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', array('style'), '1.1', 'all');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array('style'), '1.1', 'all');
 
  wp_enqueue_script( 'TweenMax.min', get_template_directory_uri() . '/js/greensock/TweenMax.min.js', array ('jquery'), 1.1, true);
  wp_enqueue_script( 'jquery.superscrollorama', get_template_directory_uri() . '/js/jquery.superscrollorama.js', array ('jquery'), 1.1, true);
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array (), 1.1, true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array (), 1.1, true);
  
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ); 