<?php
/**
 * Template Name: Calcu
 *
 *
 *
 *
 */
 get_header(); ?>
 <div class="container">
 <div class="blog-container">
<div class="blog-art">
<div class="blog-art-padding">
	<form ng-controller="xcontroller">
		
		
	<h4>What type of website do you need?</h4>
	
	
	
	
	<div class="input-field" ng-init="typesite='company';theme='etheme';pages=0;formimagesquan=0">
    <select ng-model="typesite">
      <option value="" disabled selected>Choose your option</option>
      <option value="company">Company website</option>
      <option value="ecommerce">E-commerce website</option>
      <option value="personal">Personal website</option>
	  <option value="info">Informational website</option>
	  <option value="gallery">Gallery or photo website</option>
	  <option value="blog">Blogging site</option>
	  <option value="org">Organizational site</option>
	
    </select>

  </div>
  
  
	<h4>Do you want custom design or use our elegant themeplate?</h4>

	
	
<div class="input-field">
    <select ng-model="theme">
      <option value="" disabled selected>Choose your option</option>
      <option value="etheme">Themeplate</option>
      <option value="custom">Custom design</option>
    
	
    </select>

  </div>

	
	
	

	<h4>Website Pages</h4>

	

	 <label class="black-text" for="formabout">Our web packages includes Home, About, Contact, and Gallery page. Aside from that how many more pages would you like us make?</label>
		<br><input id="formabout" type="number" ng-model="pages"></input>

	
		<h4>Custom Contents</h4>

	
		
		
		
		
		

	<input id="formimages" type="checkbox" ng-model="formimages" ng-change="eat()"></input>	 <label class="black-text" for="formimages">Do you have images that needs editing?</label>
	<br>

	
	<span id="hiddenwiki">
			<input id="formimagesquan" type="number" ng-model="formimagesquan"></input>	 <label class="black-text" for="formimagesquan">How many images?</label>
			<br>
</span>
	
		
	
	
		<input id="formcontent" type="checkbox" ng-model="formcontent" ng-change="cont()"></input>	 <label class="black-text" for="formcontent">Do you need help in writing content for your website?</label>
	<br>
	

	
	
		<input id="formlogo" type="checkbox" ng-model="formlogo" ng-change="logochange()"></input>	 <label class="black-text" for="formlogo">Do you need a custom logo?</label>

	<br>
	
		<input id="formbanner" type="checkbox" ng-model="formbanner" ng-change="bannerchange()"></input>	 <label class="black-text" for="formbanner">Do you need a custom banner?</label>
	
<br>




		<h4>Special Services</h4>
	
	

		<input id="formhost" type="checkbox" ng-model="formhost" ng-change="hostchange()"></input>	 <label class="black-text" for="formhost">Do you need hosting and domain?</label>
	
	<br>
	

		<input id="formseo" type="checkbox" ng-model="formseo" ng-change="seochange()"></input>	 <label class="black-text" for="formseo">Do you need premium SEO services?</label>

		
<br>
	<div  ng-switch on="typesite">
		<div ng-switch-when="company">
			<div  class="row" ng-switch on="theme">
				<div class="" ng-switch-when="etheme"><h4>Total price:</h4><h1> PHP {{ (7000 + (pages * 80)) + (formimagesquan * 15) + tae + logo + banner + host + seo}} to PHP {{ (10000 + (pages * 100)) + (formimagesquan * 20) + tae + logo + banner + host + seo}}</h1></div>
				<div class="" ng-switch-when="custom"><h4>Total price:</h4><h1>PHP {{ ((7000 + (pages * 80)) * 2) + (formimagesquan * 15) + tae + logo + banner + host + seo}} to PHP {{ ((10000 + (pages * 100)) * 2) + (formimagesquan * 20) + tae + logo + banner + host + seo}}</h1></div>
			</div>
		</div>
		  
		<div ng-switch-when="ecommerce">
	<div  class="row" ng-switch on="theme">
		<div class="" ng-switch-when="etheme"><h4>Total price:</h4><h1>PHP  {{ (10000 + (pages * 80)) + (formimagesquan * 15) + tae + logo + banner + host + seo}} to PHP {{ (15000 + (pages * 100)) + (formimagesquan * 20) + tae + logo + banner + host + seo}}  </h1></div>
				<div class="" ng-switch-when="custom"><h4>Total price:</h4><h1> PHP {{ ((10000 + (pages * 80)) * 2) + (formimagesquan * 15) + tae + logo + banner + host + seo}} to PHP {{ ((15000 + (pages * 100)) * 2) + (formimagesquan * 20) + tae + logo + banner + host + seo}} </h1></div>
		
		
			</div>
		</div>
		
		 
		
		<div ng-switch-default>
		<div  class="row" ng-switch on="theme">
				<div class="" ng-switch-when="etheme"><h4>Total price: </h4><h1>Total price: PHP {{ (7000 + (pages * 80)) + (formimagesquan * 15) + tae + logo + banner + host + seo}} to PHP {{ (10000 + (pages *100)) + (formimagesquan * 20) + tae + logo + banner + host + seo}}</h1></div>
				<div class="" ng-switch-when="custom"><h4>Total price: </h4><h1>PHP {{ ((7000 + (pages * 80)) * 2) + (formimagesquan * 15) + tae + logo + banner + host + seo}} to PHP {{ ((10000 + (pages * 100)) * 2) + (formimagesquan * 20) + tae + logo + banner + host + seo}} </h1></div>
			</div></div>
			</div>	</form>	

		 
			</div>
	</div>
		</div>

  <div class="swidget">
 <?php dynamic_sidebar( 'home_sidebar' ); ?>
	</div>
</div>
<?php get_footer(); ?>