jQuery(document).ready(function($){
$("#loader").hide();
$("#page").show();

$("#logo2").click(function(){
$("#logo2").css({
'-webkit-transform':'rotate(360deg)',
'-moz-transform':'rotate(360deg)',
'transform':'rotate(360deg)'}
).hide(1000),$("#page nav").animate({left: '0'}),$("#page article, footer").animate({left: '160px'}),$("#logo-hidden").delay(1000).fadeIn().css({position: 'fixed'});
});
 
$("#top-art h1").hide();
$("#top-art p").hide();
$("#top-art button").hide();
 
setTimeout(
  function() 
  {
$("#top-art h1").show();
$("#top-art p").fadeIn();
$("#top-art h1").addClass("hanimate");
$("#top-art p").addClass("panimate");
$("#top-art button").fadeIn();
  }, 2000);
 
$("nav .drop-down").click(function(){
$("nav .menu").slideDown();
});

$("article").click(function(){
$("nav .menu").slideUp();
});


$("#logo-hidden").click(function(){
$("#logo-hidden").css({
'-webkit-transform':'rotate(360deg)',
'-moz-transform':'rotate(360deg)',
'transform':'rotate(360deg)'}
).hide(1000),$("#page nav").animate({left: '-160px'}),$("#page article, footer").animate({left: '0'}),$("#logo2").delay(1000).fadeIn().css({color: 'yellow'}).css({position: 'fixed'});
});




				var controller = $.superscrollorama();
			// individual element tween examples
		/*	$('#works .dual').css('position','relative').each(function() {
					controller.addTween('#works .dual', TweenMax.from( $(this), 1, {delay:Math.random()*.2,css:{left:Math.random()*200-100,top:Math.random()*200-100,opacity:0}, ease:Back.easeOut}));
						
				
				});*/
				
				
				$('#prices .pricetag').css('position','relative').each(function() {
					controller.addTween('#prices .pricetag', TweenMax.from( $(this), 1, {delay:Math.random()*.2,css:{left:Math.random()*200-100,top:Math.random()*200-100,opacity:0}, ease:Back.easeOut}));
					
				
				});
				
				
				
				$('.label p').css('position','relative').each(function() {
					controller.addTween('.label p', TweenMax.from( $(this), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}));
						
				
				});

 
				controller.addTween('#prices',TweenMax.from( $('#arrow1'), .5, {Sscss:{opacity: 0}}));
				controller.addTween('#works',TweenMax.from( $('#works .title'), .5, {css:{opacity: 0}}));
				controller.addTween('#works',TweenMax.from( $('#arrow2'), .5, {css:{opacity: 0}}));
				controller.addTween('#spin-it',TweenMax.from( $('#spin-it'), .5, {css:{opacity: 0}}));
				controller.addTween('.starts',TweenMax.fromTo( $('.starts h1'), .25, {css:{opacity:0, fontSize:'2px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'36px'}, ease:Quad.easeInOut}));
				
	
	$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

});

var myApp = angular.module('myApp',[]);

myApp.controller('xcontroller', ['$scope', 	function($scope){
		
		$scope.example =[
		{name: 'milski oleynik', power: 'hacking'},
		{name: 'peter parker', power: 'super strength'},
		{name: 'bruce wayne', power: 'technology'}
		];


 $scope.eat = function() {
	 
$scope.formimagesquan = 0;     
 $("#hiddenwiki").toggle();
    };

 $scope.cont = function() {
if ($scope.formcontent == true){
$scope.tae = ($scope.pages + 5) * 500;
}else{
$scope.tae = ($scope.pages + 5) * 0;
	
}
};



 $scope.logochange = function() {
if ($scope.formlogo == true){
$scope.logo = 3000;
}else{
$scope.logo = 0;
	
}
};


 $scope.bannerchange = function() {
if ($scope.formbanner == true){
$scope.banner = 3000;
}else{
$scope.banner = 0;
	
}
};


 $scope.hostchange = function() {
if ($scope.formhost == true){
$scope.host = 2000;
}else{
$scope.host = 0;
	
}
};


 $scope.seochange = function() {
if ($scope.formseo == true){
$scope.seo = 300000;
}else{
$scope.seo = 0;
	
}
};




}]);


