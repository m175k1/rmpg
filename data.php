<!doctype html>
<html class="no-js">
    <head>
	<?php
$location = $_SERVER['DOCUMENT_ROOT'];
 

include ($location . '/wp-load.php');?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RMPG Design Web Design and Development Laguna</title>
        <meta name="description" content="RMPG Design Web Design and Development from Laguna. Wordpress, Webhosting, and Web Aps">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		
<meta property="og:url"                content="http://rmpg-design.com" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="RAMPAGE DESIGN Web Design and Development" />
<meta property="og:description"        content="RMPG Design is a Web designer and developer agency located in Laguna, Wordpress, Webhosting, and Web Aps" />
<meta property="og:image"              content="<?php bloginfo('template_directory'); ?>/img/gyb2.jpg" />
<!--<meta property="og:width"              content="1000px" />
<meta property="og:height"              content="500px" />-->
<meta property="fb:app_id" 			   content="761497850629516" />		
		
		

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
		 <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		 
		
   <?php wp_head(); ?>
		 
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
	<body class="data">
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
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      
<i id="logo-hidden" class="fa fa-navicon"></i>
<i id="logo2" class="fa fa-navicon"></i>


<nav>
<img id="logo1" src="<?php bloginfo('template_directory'); ?>/img/lightlogo.png"></img>
<ul><a href="<?php bloginfo('url'); ?>#page">
<li class="active"><i class="fa fa-home"></i>
Home
</li></a>
<a href="<?php bloginfo('template_directory'); ?>/about.php">
<li class="inactive"><i class="fa fa-user"></i>
About
</li></a>
<a href="#works">
<li class="inactive"><i class="fa fa-lightbulb-o"></i>
My Works
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



wp_nav_menu( $args); ?>


</li>
</ul>

<div class="headertxt"><input type="text" class="headersearch" value="" placeholder="Search"></input><i class="fa fa-search"></i><div class="socdiv"><i class="fa fa-facebook soclog"></i><i class="fa fa-twitter soclog"></i></div></div>
</nav>
<article>






<div class="smenu">
<img id="logo3" src="<?php bloginfo('template_directory'); ?>/img/lightlogo.png"></img><h1>RMPG Design</h1>
<i class="fa fa-search mob-menu anima"></i><i class="fa fa-facebook mob-menu anima"></i><i class="fa fa-twitter mob-menu anima"></i><i class="fa fa-comment-o mob-menu anima"></i>
</div>
<div class="clearer"></div>


	
	
<div class="container">

<div class="blog-container">
<div class="blog-art">
<?php
//if "email" variable is filled out, send email $conn = new mysqli("localhost","rmpgdesign","DvMEcTs6KdEy","rmpgdesi_milski");

$conn = new mysqli("localhost","rmpgdesign","DvMEcTs6KdEy","rmpgdesi_milski");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$cel=$_POST['cp'];
	$email=$_POST['email'];
	$message=$_POST['memo'];
	$today = date("F j, Y, g:i a");   
	// checking empty fields
	if(empty($name))
	{
		//if name field is empty
	
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty) messages
	{	 
	
	$sql = "INSERT INTO messages (name, email, cel, message, date)
VALUES ('$name', '$email', '$cel', '$message', '$today')";
if ($conn->query($sql) === TRUE) {
    echo "<h1>THANK YOU!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
	}
}
	
$conn->close();
?>
   </div>       <div class="swidget">     <?php dynamic_sidebar( 'home_sidebar' ); ?>  </div>  </div>  </div> 
   <div class="clearer"></div>

<?php get_footer(); ?>



