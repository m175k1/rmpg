	var controller = $.superscrollorama();
			// individual element tween examples
			$('#works .quad').css('position','relative').each(function() {
					controller.addTween('#works .quad', TweenMax.from( $(this), 1, {delay:Math.random()*.2,css:{left:Math.random()*200-100,top:Math.random()*200-100,opacity:0}, ease:Back.easeOut}));
						
				
				});
				$('.label p').css('position','relative').each(function() {
					controller.addTween('.label p', TweenMax.from( $(this), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}));
						
				
				});

				controller.addTween('#prices',TweenMax.from( $('#prices .title'), .5, {css:{opacity: 0}}));
				controller.addTween('#works',TweenMax.from( $('#works .title'), .5, {css:{opacity: 0}}));
				controller.addTween('#spin-it',TweenMax.from( $('#spin-it'), .5, {css:{opacity: 0}}));
				controller.addTween('.starts',TweenMax.fromTo( $('.starts h1'), .25, {css:{opacity:0, fontSize:'2px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'36px'}, ease:Quad.easeInOut}));
				
	
