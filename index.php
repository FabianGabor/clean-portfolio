<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Fábián Gábor | fotograf</title>

  <!-- Included CSS Files -->
  <link rel="stylesheet" href="stylesheets/foundation.css">
  <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
  

  <!--
  <script src="javascripts/modernizr.foundation.js"></script>
  -->

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <!-- these are loaded asynchronously -->	
	<script>
		(function(doc, script) {
			var js, 
				fjs = doc.getElementsByTagName(script)[0],
				add = function(url, id) {
				if (doc.getElementById(id)) {return;}
				js = doc.createElement(script);
				js.src = url;
				id && (js.id = id);
				fjs.parentNode.insertBefore(js, fjs);
				};

			// Google Analytics
			add(('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js', 'ga');
			// Google+ button
			//add('http://apis.google.com/js/plusone.js');
			// Facebook SDK
			add('//connect.facebook.net/en_US/all.js', 'facebook-jssdk');
			// Twitter SDK
			//add('//platform.twitter.com/widgets.js', 'twitter-wjs');
			add('//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', 'jquery');			
			add('javascripts/jquery.foundation.orbit.js', 'orbit');
			add('javascripts/modernizr.foundation.js', 'modernizr');
		}(document, 'script'));
	</script>

</head>
<body>

<!-- Not sure to use it or not. Not recommended...
<div class="preload">
	<div class="animation">
		<div class="ball-arc2nd">  
			<div class="point2nd"></div>  
		</div>  
       
		<div class="ball-arc3nd">  
			<div class="point3nd"></div>  
		</div>  
       
		<div class="ball-arc4nd">  
			<div class="point4nd"></div>  
		</div>  
	</div>
</div>
-->

<header class="text-center">

<div class="gradient">
<div class="row">
	<div class="ten columns centered text-center">
		<nav>
			<ul class="block-grid mobile five-up nav-bar">
				<li class="active"><a href="#">comerciale</a></li>
				<li><a href="#">portrete</a></li>
				<li><a href="#">glamour</a></li>
				<li><a href="#">nud artistic</a></li>
				<li><a href="#">web design</a></li>
			</ul>
		</nav>
	</div>	
</div>
</div>

<div id="title" class="row">
	<div class="six columns centered">
		<h1 class="h2">fabian gabor fotograf</h1>
	</div>
</div>
</header>



<div id="featured">
	<img src="images/fotografii-comerciale-14.jpg" width="100%" height="auto" alt="fotografii comerciale" />
	<img src="images/fotografie-portret-32-Ordinul-Dragonilor-Transilvania.jpg" width="100%" height="auto" alt="fotografii portrete" />
	<img src="images/fotografie-glamour-15.jpg" width="100%" height="auto" alt="fotografii glamour" />
	<img src="images/fotografie-nud-artistic-15.jpg" width="100%" height="auto" alt="fotografii nud artistic" />
	
	<!-- maybe this center nav will be removed -->
	<!--
	<nav id="navcenter" class="">
		<div class="row">
			<ul class="block-grid four-up nav-bar">
				<li><a href="">
					<img src="images/comerciale-300x100.jpg" width="100%" height="auto" alt="" />
					<h3>Fotografii comerciale</h3>
					<p>
					Au menirea de a atrage privitorul, prin expresivitatea imaginii.
					</p>
				</a></li>
				<li><a href="">
					<img src="images/portrete-300x100.jpg" width="100%" height="auto" alt="" />
					<h3>Fotografii portrete</h3>
					<p>
					 Il poate hipnotiza pe privitor, oferind o patrundere adanca nu numai in ceea ce priveste aspectul fizic, ci si emotiile si sentimentele subiectului.
					</p>
				</a></li>
				<li><a href="">
					<img src="images/glamour-300x100.jpg" width="100%" height="auto" alt="" />
					<h3>Fotografii glamour</h3>
					<p>
					Au menirea de a atrage privitorul, prin expresivitatea imaginii.
					</p>
				</a></li>
				<li><a href="">
					<img src="images/nud-300x100.jpg" width="100%" height="auto" alt="" />
					<h3>Fotografii nud</h3>
					<p>
					Au scopul de a studia corpul feminin si de a releva intregului public feminitatea.
					</p>
				</a></li>
				
			</ul>
		</div>
	</nav>
	-->
</div>

<nav id="navbottom" class="text-center twelve">		
	<div class="row">
		<ul class="block-grid two-up nav-bar three right">
			<li><a href="#">blog</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	</div>
</nav>

<div class="row">
	<div class="eight columns">
		<h1 class="line">Lorem ipsum</h1>
		<p class="twocol">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fermentum convallis tellus vel ornare. In ac lectus eu dolor ultrices auctor. Donec porta, quam in imperdiet congue, nisl dolor imperdiet enim, vitae vestibulum orci lorem vel nunc. Curabitur elit diam, malesuada at eleifend ut, elementum ut dui. Nulla ut libero justo, eu rutrum ante. Nunc nec ultrices arcu. Sed sit amet odio vel dolor rutrum volutpat. Maecenas a urna ut metus varius volutpat ut eu ligula. Pellentesque consectetur malesuada sapien, in tincidunt mi tristique ac. Nulla quis turpis purus, in pulvinar orci. Nunc interdum lobortis metus et porta. Aliquam fermentum libero in purus feugiat eget faucibus diam cursus.
		</p>
	</div>
	<div class="four columns">
		<aside>
			<h2 class="h1 line">Clients</h2>
			<ul class="block-grid two-up">
				<li><img src="images/clients/yonder-logo.jpg" width="100%" height="auto" alt="Yonder" /></li>
				<li><img src="images/clients/carioca-logo.jpg" width="100%" height="auto" alt="Yonder" /></li>
				<li><img src="images/clients/malio-company-logo.jpg" alt="Malio Company hostess" /></li>
			</ul>
		</aside>
	</div>
</div>

<!-- Remove this 2 when done -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!--
<script src="javascripts/jquery.foundation.orbit.js"></script>
-->
  
<script>
window.onload = function() {
 
	$('#featured').orbit({
     animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
     animationSpeed: 800,                // how fast animtions are
     timer: true, 			 // true or false to have the timer
     advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
     pauseOnHover: false, 		 // if you hover pauses the slider
     startClockOnMouseOut: false, 	 // if clock should start on MouseOut
     startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
     directionalNav: false, 		 // manual advancing directional navs
     captions: true, 			 // do you want captions?
     captionAnimation: 'fade', 		 // fade, slideOpen, none
     captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
     bullets: false,			 // true or false to activate the bullet navigation
     bulletThumbs: true,		 // thumbnails for the bullets
     bulletThumbLocation: 'images/thumbs/',		 // location from this file where thumbs will be
     afterSlideChange: function(){} 	 // empty function 
	});
	
	$.responsive = function () {
		if ( ($("#featured img").height()) > $(window).height() ) {
			$(".orbit-wrapper").css("marginTop", -$(".gradient").height() - 7 );
			$(".orbit-wrapper").height( $(window).height() - $(".gradient").height() );
			//$(".orbit-wrapper").css("marginBottom", $(".gradient").height() );
			$(".orbit-slide").css("marginTop", ($ (".orbit-wrapper").height()-$(".orbit-slide").height() ) / 2 - $(".gradient").height() );
		} else {
			$(".orbit-wrapper").height ( "inherit" );
			$(".orbit-wrapper").css("marginTop", -$("#title").height() );
			$(".orbit-slide").css("marginTop", 0 );
		}
	};
	
	$.responsive();
	$(window).resize(function() {
		$.responsive();
	});
	
  // When the page has loaded
  $(".preload").fadeOut(500);
	
};
</script>

<script>/*
$(document).ready(function() {
	$.responsive = function () {
		$(".orbit-wrapper").css("top", $(".gradient").height() );
		$(".orbit-wrapper").height( $(window).height() - $(".gradient").height() );
		$(".orbit-wrapper").css("marginBottom", $(".gradient").height() );
		$(".orbit-slide").css("marginTop", ($ (".orbit-wrapper").height()-$(".orbit-slide").height() ) / 2 - $(".gradient").height() );
	};
	
	$.responsive();
	$(window).resize(function() {
		$.responsive();
	});
});*/
</script>

</body>
</html>