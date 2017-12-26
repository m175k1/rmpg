<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>About RMPG Design | Web Design Laguna Philippines</title>
       
		

		 
		
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		 
		
   <?php wp_head(); ?>
		 

    </head>
	<body <?php body_class(); ?> ng-app="myApp">
	<div id="fb-root"></div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=761497850629516";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '761497850629516',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



	<img id="loader" src="<?php bloginfo('template_directory'); ?>/img/images.gif"></img>
	<div id="page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <b>outdated</b> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      
<i id="logo-hidden" class="fa fa-navicon"></i>
<i id="logo2" class="fa fa-navicon"></i>


<nav>
<img id="logo1" src="<?php bloginfo('template_directory'); ?>/img/lightlogo.png"></img>
<ul><a href="<?php bloginfo('url'); ?>#page">
<li class="active"><i class="fa fa-home"></i>
Home
</li></a>
<a href="/about-rmpg/">
<li class="inactive"><i class="fa fa-user"></i>
About
</li></a>
<a href="<?php bloginfo('url'); ?>#works">
<li class="inactive"><i class="fa fa-lightbulb-o"></i>
Our Works
</li></a>
<a href="#footer">
<li class="inactive"><i class="fa fa-phone"></i>
Contact
</li></a>


<li class="inactive drop-down">
<a href="#">Articles <span class="arrow">&#9660;</span></a>
 
 
<?php  

$arg = array(
 'theme_location' => 'primary'
 );



wp_nav_menu( $arg); ?>


</li>
</ul>

<div class="headertxt"><form role="search" class="upper-search" method="get" id="searchform" action="http://rmpg-design.com"> <input type="text" class="headersearch" value="" type="search" result="5" name="s" id="s" placeholder="Search"></input></form><i class="fa fa-search"></i><div class="socdiv"><i class="fa fa-facebook soclog"></i><i class="fa fa-twitter soclog"></i></div></div>
</nav>
<article>






<div class="smenu">
<img id="logo3" src="<?php bloginfo('template_directory'); ?>/img/lightlogo.png"></img><h1>RMPG Design</h1>
<i class="fa fa-search mob-menu anima"></i><i class="fa fa-facebook mob-menu anima"></i><i class="fa fa-twitter mob-menu anima"></i><i class="fa fa-comment-o mob-menu anima"></i>
</div>
<div class="clearer"></div>


<div class="top-header">
<h1><?php the_title(); ?></h1>  
</div>