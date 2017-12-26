<?php
/**
 * Template Name: about 2
 *
 *
 *
 *
 */?>
 <!doctype html>
<html> 
    <head>

        <meta charset="utf-8 without BOM">
     
        <title>About RMPG Design Web Design Laguna</title>
       
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		 	
		
   <?php wp_head(); ?>


    </head>
	<body <?php body_class(); ?>>
	<div id="fb-root"></div>

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



wp_nav_menu( $args); ?>


</li>
</ul>

<div class="headertxt"><form role="search" class="upper-search" method="get" id="searchform" action="http://rmpg-design.com"> <input type="text" class="headersearch" value="" type="search" result="5" name="s" id="s" placeholder="Search"></input></form><i class="fa fa-search"></i><div class="socdiv"><i class="fa fa-facebook soclog"></i><i class="fa fa-twitter soclog"></i></div></div>
</nav>

<article>

<div class="clearer">
</div>
<div class="top-header">
<h1>ABOUT RMPG <span class="txt-darker thin">DESIGN</span></h1>
</div>
<div class="clearer">
</div>
<div class="b-whiter">
<div class="wrap">
<div class="dual">
<p>RMPG stands for <span class="arte">Rampage Design </span>.</p><p><span class="arte">Rampage Design </span> is part of RMPG located in <span class="arte">Paete, Laguna Philippines</span> that offers a wide range of affordable and responsive websites created by professional web developer specialized in custom design. We create websites for both personal and business themes. RMPG Design delivers great services and looking after our clients to enhance their presence on the web.</p>
<p>We also accept other services such as <span class="arte">website repair, web hosting, graphic and logo making, SEO, and mobile apps development.</span></p>
</div>
<div class="dual">
<div class="fbs">
<span class="fa fa-facebook"></span>
<span class="fa fa-twitter"></span>
<span class="fa fa-google-plus"></span>
</div>

</div>
</div></div>
<div class="clearer">
</div>
<div class="team">
    <h2 class="small-title">MEET <span class="arte thin">THE TEAM</span>    </h2>
    <hr>
    <div class="card">
        <div class="left-card">
            <figure>
            <img src="<?php bloginfo('template_directory'); ?>/img/milski.jpg"></img>
            </figure>
            <div class="fbs">
            <span class="fa fa-facebook"></span><span class="fa fa-twitter"></span><span class="fa fa-google-plus"></span>
            </div>
        </div>

        <div class="right-card">
        <h1>Emil</h1>
        <h3><span class="txtbox"><span class="txtbox">Real name:</span></span> <span>Emil Mendoza</span></h3>
        <h3><span class="txtbox"><span class="txtbox">Skill:</span></span> <span>Woocommerce Ninja</span></h3>
        <p>Making the world a better place through efficient search engine optimization and asynchronous web access.</p>
        </div>
    </div>

    <div class="card">
        <div class="left-card">
            <figure>
            <img src="<?php bloginfo('template_directory'); ?>/img/rykes.jpg"></img>
            </figure>
            <div class="fbs">
            <span class="fa fa-facebook"></span><span class="fa fa-twitter"></span><span class="fa fa-google-plus"></span>
            </div>
        </div>
        <div class="right-card">
            <h1>Rykes</h1>
            <h3><span class="txtbox">Real name:</span> <span>Richael Anthony Bodino</span></h3>
            <h3><span class="txtbox">Skills:</span> <span>Seo / Copywriter</span></h3>
            <p>Evidence of multiple intelligence. A talented writer and composer ranging from music, copywriting and programming</p>
        </div>
    </div>

    <div class="clearer mar-bot1"></div>
    <div class="card">
        <div class="left-card">
            <figure>
            <img src="<?php bloginfo('template_directory'); ?>/img/waren.jpg"></img>
            </figure>
            <div class="fbs">
            <span class="fa fa-facebook"></span><span class="fa fa-twitter"></span><span class="fa fa-google-plus"></span>
            </div>
        </div>
        <div class="right-card">
            <h1>Waren</h1>
            <h3><span class="txtbox">Real name:</span> Waren Gonzaga</h3>
            <h3><span class="txtbox">Skills:</span> <span>Web Developer Monk</span></h3>
            <p>Award winning developer. Expert in mobile and front Web development and design. Minecraft player</p>
        </div>
    </div>

    <div class="card">
        <div class="left-card">
            <figure>
            <img src="<?php bloginfo('template_directory'); ?>/img/mhie.jpg"></img>
            </figure>
            <div class="fbs">
            <span class="fa fa-facebook"></span><span class="fa fa-twitter"></span><span class="fa fa-google-plus"></span>
            </div>
        </div> 
        <div class="right-card">
            <h1>Jhen</h1>
            <h3><span class="txtbox">Real name:</span> <span>Jeanie Lou Mendoza</span></h3>
            <h3><span class="txtbox">Skills:</span> <span>Photographer</span></h3>
            <p>Prepare your selfie-posing skills as she takes photo of you or your products for your website.</p>
        </div>
    </div>
</div>



</article>
</div>
<footer>
<div id="footer" class="container">  
<div class="about">
<div id="address1">
<h2>Contact Us</h2>
<div id="phones">
<h3><i class="fa fa-phone"> </i>GLOBE 09268498059</h3>

<h3><i class="fa fa-phone"> </i>PLDT  049 5570089</h3>
</div>
 
</div> 
<div id="rox" class="clearer"></div>
<div id="address2">
<h2>Our Studio address</h2>
<h3>4 1011 J. Rizal ST.</h3>
<h3 class="mar-bot">Paete, Laguna</h3>
<div class="clearer"></div>
<div class="soc-div-foot"><h3><i class="fa fa-facebook"> </i>             <h3><i class="fa fa-skype"> </i>             <h3><i class="fa fa-youtube"> </i>             <i class="fa fa-twitter"> </i></h3></div>
</div>

</div>

 
<div class="map"> 
<h2>Contact Us</h2> 
<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>

 
</div>

</div>
<div class="clearer"></div>
<div class="relfoot">© Copyright 2016. RMPG Design. Web design and dev. Paete, Laguna Philippines   </div>
</footer>
</div>
	
		
	
	<script>				
 (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-59384890-1','auto');ga('send','pageview');
</script>
	 <?php wp_footer(); ?> 	
    </body>
</html>

