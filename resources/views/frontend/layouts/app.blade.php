<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Mepandes | Page</title>
<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Wedding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" type="text/css" media="screen" />
<script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.js')}}"></script>
</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-top">
				@include('frontend.layouts.navigation')
			</div>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slider-info">
								<h3>Welcome</h3>
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
									<!-- <div class="button">
										<a href="services.html" class="button1 hvr-rectangle-in">get started</a>
										<a href="#" class="button2 hvr-rectangle-in">read more</a>
									</div> -->

							</div>
						</li>
					</ul>
				</div>
			</section>
		  <script defer src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
			  <script type="text/javascript">
					$(function(){
					  SyntaxHighlighter.all();
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
			  </script>
		</div>
	</div>
	<!--header-->
	<div class="content">
				<!--about-->
					<div class="about">
					<div class="container">
						<div class="about-head">
						<h2>Gallery</h2>
							<p>Autem vel eum iriure dolor in hendrerit in volestie consequat vel illum</p>
					</div>
					<div class="about-grids">
						<div class="col-md-3 about-grid test1">
						<img src="{{asset('frontend/images/p1.jpg')}}" class="img-responsive" alt="/">
							<div class="textbox">
								<h4>my wedding</h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu.</p>
							</div>
						</div>
						<div class="col-md-3 about-grid test1">
						<img src="{{asset('frontend/images/p2.jpg')}}" class="img-responsive" alt="/">
						<div class="textbox">
								<h4>my wedding</h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu.</p>
							</div>
						</div>
						<div class="col-md-3 about-grid test1">
						<img src="{{asset('frontend/images/p3.jpg')}}" class="img-responsive" alt="/">
						<div class="textbox">
								<h4>my wedding</h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu.</p>
							</div>
						</div>
						<div class="col-md-3 about-grid test1">
						<img src="{{asset('frontend/images/p4.jpg')}}" class="img-responsive" alt="/">
						<div class="textbox">
								<h4>my wedding</h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu.</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--about-->
		<!--hot-offer-->
			<!--hot-offer-->
					@include('frontend.comment')
					<!--news-->
					@include('frontend.form-comment')
          <!-- @include('frontend.form-comment') -->
							<!--news-->
					<!--indicate-->
				<!-- <div class="indicate">
					<div class="container">
						<div class="indicate-grids">
							<div class="col-md-3 indicate-grid">
								<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Newyork 9870 St Vincent</p>
							</div>
							<div class="col-md-3 indicate-grid">
								<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Telephone :  +1 800 603 6035</p>
							</div>
							<div class="col-md-3 indicate-grid">
								<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email : <a href="mailto:example@mail.com"> example@mail.com</a></p>
							</div>
							<div class="col-md-3 indicate-grid">
								<p><span class="glyphicon glyphicon-send" aria-hidden="true"></span>FAX :  +1 555 999 444</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div> -->
			<!--indicate-->

			</div>

			<!--footer-->
		@include('frontend.layouts.footer')

</body>
</html>
