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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>
<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-top">
				@include('frontend.layouts.navigation')
			</div>
			<!-- <section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slider-info">
								<h3>Welcome</h3>
								<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>

							</div>
						</li>
					</ul>
				</div>
			</section> -->
		</div>
	</div>
	<!--header-->
	<div class="content">
				<!--about-->
					<div class="about">
					<div class="container">
						<div class="about-head">
						<h2>Gallery</h2>
					</div>
					<div class="about-grids">
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img1.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img2.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img3.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img4.jpg')}}" class="img-responsive" alt="/">
						</div>

						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img5.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img6.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img7.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img8.jpg')}}" class="img-responsive" alt="/">
						</div>

						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img9.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img10.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img11.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="col-md-3 about-grid test1" style="margin-bottom:10px">
							<img src="{{asset('frontend/images/12/resize/img12.jpg')}}" class="img-responsive" alt="/">
						</div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--about-->
		<!--hot-offer-->
			<!--hot-offer-->
					@include('frontend.comment')
					<div class="wedding-news">
						<div class="container">
							<h3>Waktu dan Tempat</h3>
								<div class="wedding-grid">
									<div class="col-md-12 weeding-new">
											<div class="wedding-inner">
												<h2 style="color: #a50812; font-family: 'Comic Sans MS', cursive, sans-serif">Minggu, 24 Maret 2019</h2>
												<br>
												<h4 style="color: #a50812; font-family: 'Comic Sans MS', cursive, sans-serif">16.00 Wita</h4>
												<br>
												<h4 style="color: #a50812; font-family: 'Comic Sans MS', cursive, sans-serif">Jl. Teges Gede II No. 8, Br. Mumbul, Kel. Benoa, Kec. Kuta Selatan, Kab. Badung</h4>
												<br>
												<a href="https://bit.ly/2Tzgjsh" target="_blank" class="btn btn-primary btn-info"><i class="fa fa-directions"></i> Get Direction</a>
											</div>
										</div>
									<div class="clearfix"></div>
								</div>
						</div>
					</div>
			</div>

			<!--footer-->
		@include('frontend.layouts.footer')

</body>
</html>
