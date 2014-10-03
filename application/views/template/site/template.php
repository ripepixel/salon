<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $this->lang->line('sitename'); ?></title>

		<!-- Bootstrap -->
		<link href="<?php echo base_url(); ?>site/css/bootstrap.min.css" rel="stylesheet">
		<!-- IcoMoon Icon Font -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>site/fonts/icomoon/icomoon.css">
		<!-- FontAwesome Icon Font -->
		<link href="<?php echo base_url(); ?>site/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="<?php echo base_url(); ?>site/scripts/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>site/scripts/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>site/scripts/owl-carousel/owl.transitions.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="<?php echo base_url(); ?>site/css/style.css" rel="stylesheet">

		<link rel="shortcut icon" href="<?php echo base_url(); ?>site/images/favicon.ico" type="image/ico" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body data-spy="scroll" data-target=".primary-navigation">		



		<!--

		HOME PAGE

		-->
		<div id="home" class="section blue text-center">
			<div class="section-inner">
				<h1>Awesome Salon Software Name</h1>
				<h3>Salon management made easy</h3>
				<hr class="line" />
				<p class="button-list"><a href="#pricing" class="button solid-button white-button">Pricing</a><a href="<?php echo base_url(); ?>auth/login" class="button solid-button green-button">Log In</a></p>
			</div> <!-- end section-inner -->
		</div> <!-- end section -->


		
		<!--
		
		HEADER
		
		-->
		<div class="primary-nav">
			<div class="container clearfix">
				<div class="logo"><a href="background-solid-color.html#"><img src="<?php echo base_url(); ?>site/images/logo.png" alt="logo alt"></a></div>
				<nav class="primary-navigation">
					<ul class="nav">
						<li><a href="background-solid-color.html#home">Home</a></li>
						<li><a href="background-solid-color.html#features">Features</a></li>
						<li><a href="background-solid-color.html#testimonials">Testimonials</a></li>
						<li><a href="background-solid-color.html#services">Services</a></li>
						<li><a href="background-solid-color.html#pricing">Pricing</a></li>
						<li><a href="background-solid-color.html#team">Team</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="rwd-nav">
			<span class="rwd-nav-trigger">Menu<span></span></span>
			<nav id="rwd-main-nav">
				<ul>
					<li><a href="background-solid-color.html#home">Home</a></li>
					<li><a href="background-solid-color.html#features">Features</a></li>
					<li><a href="background-solid-color.html#testimonials">Testimonials</a></li>
					<li><a href="background-solid-color.html#services">Services</a></li>
					<li><a href="background-solid-color.html#pricing">Pricing</a></li>
					<li><a href="background-solid-color.html#team">Team</a></li>
				</ul>
			</nav>
		</div>



		<div id="features" class="section white">
			<div class="section-inner">
				<div class="container">
					<h2>Amazing Features<span class="icon"><i class="fa fa-paper-plane"></i></span></h2>
					<div class="row">
						<div class="col-sm-4 text-right">
							<h4>Graphic Design <i class="fa fa-thumbs-o-up inline-icon right"></i></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto minima excepturi fugit.</p>
							<h4>Color Changer <i class="icon-paint-format inline-icon right"></i></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus maxime cum, incidunt.</p>
							<h4>Strategy Planning <i class="icon-play2 inline-icon right"></i></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione tempore quas ut minus.</p>
						</div> <!-- end col-sm-4 -->
						<div class="col-sm-4">
							<img src="<?php echo base_url(); ?>site/images/mockup01.png" alt="image alt" class="feature-img img-responsive">
						</div> <!-- end col-sm-4 -->
						<div class="col-sm-4">
							<h4><i class="icon-play2 inline-icon"></i> Strategy Planning</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut modi, delectus at nesciunt.</p>
							<h4><i class="icon-eye inline-icon"></i> Style Guidelines</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ut, maxime deserunt.</p>
							<h4><i class="icon-paint-format inline-icon"></i> Color Changer</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, doloremque soluta.</p>
						</div> <!-- end col-sm-4 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->
		<div class="section light">
			<div class="section-inner">
				<div class="container">
					<h2>Create Something Totally Amazing<span class="icon"><i class="fa fa-paint-brush"></i></span></h2>
					<div class="row">
						<div class="col-sm-6">
							<h5 class="highlight-blue feature-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ratione commodi officiis corporis.</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae rem eligendi, eveniet aperiam, cum laboriosam. Aut, doloremque esse possimus, iure iste officiis odio laborum dolores quis, nostrum nemo, qui neque.</p>
							<ul class="list-unstyled list-with-icons">
								<li><span class="small-icon icon-blue left"><i class="fa fa-globe"></i></span>Business Strategy Planning</li>
								<li><span class="small-icon icon-blue left"><i class="icon-location2"></i></span>Brainstorming Startup Ideas</li>
								<li><span class="small-icon icon-blue left"><i class="icon-cloud"></i></span>Easy Cloud Server Connection</li>
								<li><span class="small-icon icon-blue left"><i class="icon-droplet"></i></span>Website Design Coding Service</li>
							</ul>
						</div> <!-- end col-sm-6 -->
						<div class="col-sm-6">
							<img src="<?php echo base_url(); ?>site/images/mockup02.png" alt="image alt" class="feature-img img-responsive">
						</div> <!-- end col-sm-6 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->
		<div class="section light">
			<div class="section-inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<img src="<?php echo base_url(); ?>site/images/image01.jpg" alt="image alt" class="feature-img img-responsive img-popup" data-image="<?php echo base_url(); ?>site/images/image01.jpg" data-title="Image Title" data-caption="The images caption.">
						</div> <!-- end col-sm-6 -->
						<div class="col-sm-6">
							<h4 class="highlight-blue feature-heading">Intense Image Popup</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sunt deserunt dolore perferendis molestiae. Earum veritatis unde eaque nemo. Magni autem, quasi magnam suscipit repudiandae dignissimos eius fugiat rerum nihil!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat iure facilis, id excepturi. Magnam laboriosam.</p>
						</div> <!-- end col-sm-6 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->
		<div class="section dark text-center">
			<div class="section-inner">
				<div class="container">
					<h4>Watch the Video</h4>
					<h3>Explain it with a video</h3>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://player.vimeo.com/video/77580463?color=ff0000"></iframe>
					</div> <!-- end embed-responsive -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		Testimonials

		-->
		<div id="testimonials" class="section blue transparent text-center" style="background-image: url('<?php echo base_url(); ?>/site/images/background02.JPG');">
			<div class="section-inner">
				<span class="big-icon icon-white"><i class="icon-quotes-left"></i></span>
				<div id="testimonial-slider" class="testimonial-slider">
					<div>
						<p class="testimonial">"These guys are the best! Truly amazing support and supper quality work!"</p>
						<p class="author">John Doe - Web Designer & Enterpreneur</p>
					</div>
					<div>
						<p class="testimonial">"This is just truly amazing!"</p>
						<p class="author">John Smith - Web Designer & Graphic Designer</p>
					</div>
					<div>
						<p class="testimonial">"Their work will just blow you away!"</p>
						<p class="author">John Doe - Web Designer & Developer</p>
					</div>
				</div> <!-- end testimonial-slider -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		CLIENTS

		-->
		<div class="section light text-center">
			<div class="section-inner">
				<div class="container">
					<div id="client-slider" class="client-slider">
						<div>
							<img src="<?php echo base_url(); ?>site/images/graphicriver.png" alt="alt">
						</div>
						<div>
							<img src="<?php echo base_url(); ?>site/images/photodune.png" alt="alt">
						</div>
						<div>
							<img src="<?php echo base_url(); ?>site/images/themeforest.png" alt="alt">
						</div>
						<div>
							<img src="<?php echo base_url(); ?>site/images/videohive.png" alt="alt">
						</div>
						<div>
							<img src="<?php echo base_url(); ?>site/images/activeden.png" alt="alt">
						</div>
					</div> <!-- end client-slider -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		SECTION + SERVICES

		-->
		<div id="services" class="section white">
			<div class="section-inner">
				<div class="container">
					<h2>Some of Our Services<span class="icon"><i class="icon-cogs"></i></span></h2>
					<div class="row">
						<div class="col-sm-4 service-center">
							<div class="service-icon icon-blue"><i class="icon-droplet"></i></div>
							<div class="service-desc">
								<h4>Graphic Design</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit error reiciendis, debitis.</p>
							</div> <!-- end service-desc -->
						</div> <!-- end col-sm-4 -->
						<div class="col-sm-4 service-center">
							<div class="service-icon icon-purple"><i class="icon-heart2"></i></div>
							<div class="service-desc">
								<h4>Report Writing</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eaque inventore.</p>
							</div> <!-- end service-desc -->
						</div> <!-- end col-sm-4 -->
						<div class="col-sm-4 service-center">
							<div class="service-icon icon-green"><i class="icon-location2"></i></div>
							<div class="service-desc">
								<h4>Strategy Panning</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ab maiores error.</p>
							</div> <!-- end service-desc -->
						</div> <!-- end col-sm-4 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->
		<div class="section white">
			<div class="section-inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 service-left">
							<div class="service-icon icon-blue"><i class="icon-eye"></i></div>
							<div class="service-desc">
								<h5>Style Guidelines</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit error reiciendis, debitis.</p>
							</div> <!-- end service-desc -->
						</div> <!-- end col-sm-4 -->
						<div class="col-sm-4 service-left">
							<div class="service-icon icon-purple"><i class="fa fa-puzzle-piece"></i></div>
							<div class="service-desc">
								<h5>Brand Creation</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eaque inventore.</p>
							</div> <!-- end service-desc -->
						</div> <!-- end col-sm-4 -->
						<div class="col-sm-4 service-left">
							<div class="service-icon icon-green"><i class="fa fa-flask"></i></div>
							<div class="service-desc">
								<h5>Company Analysis</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ab maiores error.</p>
							</div> <!-- end service-desc -->
						</div> <!-- end col-sm-4 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->
		<div class="section white">
			<div class="section-inner">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class="service-card blue">
								<div class="service-icon"><i class="fa fa-star-o"></i></div>
								<div class="service-desc">
									<h5>First Class Templates</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eaque inventore.</p>
								</div> <!-- end service-desc -->
							</div> <!-- end service-card -->
						</div> <!-- end col-sm-3 -->
						<div class="col-sm-3">
							<div class="service-card green">
								<div class="service-icon"><i class="fa fa-check-square-o"></i></div>
								<div class="service-desc">
									<h5>Files Included</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit error reiciendis, debitis.</p>
								</div> <!-- end service-desc -->
							</div> <!-- end service-card -->
						</div> <!-- end col-sm-3 -->
						<div class="col-sm-3">
							<div class="service-card purple">
								<div class="service-icon"><i class="icon-lightning"></i></div>
								<div class="service-desc">
									<h5>High Res Layouts</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eaque inventore.</p>
								</div> <!-- end service-desc -->
							</div> <!-- end service-card -->
						</div> <!-- end col-sm-3 -->
						<div class="col-sm-3">
							<div class="service-card">
								<div class="service-icon"><i class="icon-droplet"></i></div>
								<div class="service-desc">
									<h5>Color Swatching</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ab maiores error.</p>
								</div> <!-- end service-desc -->
							</div> <!-- end service-card -->
						</div> <!-- end col-sm-3 -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		CALL TO ACTION

		-->
		<div class="section blue text-center cta">
			<div class="section-inner">
				<div class="container">
					<h3 class="cta-heading">Like what you see? Request a Proposal Now!</h3>
					<a href="background-solid-color.html#" class="button solid-button white-button large-button">Request A Proposal</a>
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->


		
		<!--

		Pricing Tables

		-->
		<div id="pricing" class="section white">
			<div class="section-inner">
				<div class="container">
					<h2>Choose Your Plan<span class="icon"><i class="icon-pencil"></i></span></h2>
					<div class="row pricing-tables">
						<div class="col-sm-4 pricing-table purple">
							<div class="pricing-table-header">
								<h3>Solo</h3>
								<div class="pricing-table-price-border"></div>
								<div class="pricing-table-price">
									&pound;9<span class="price-per-mo">/mo</span>
								</div> <!-- end pricing-table-price -->
							</div> <!-- end pricing-table-header -->
							<div class="pricing-table-info">
								<ul class="list-unstyled">
									<li><i class="fa fa-check-circle-o"></i>Easy Installation</li>
									<li><i class="fa fa-times-circle-o"></i>Easy Installation</li>
									<li><i class="fa fa-times-circle-o"></i>Easy Installation</li>
								</ul>
								<a href="background-solid-color.html#" class="button solid-button purple-button">Get It Now</a>
							</div> <!-- end pricing-table-info -->
						</div> <!-- end pricing-table -->
						<div class="col-sm-4 pricing-table blue featured">
							<div class="pricing-table-header">
								<h3>Salon</h3>
								<div class="pricing-table-price-border"></div>
								<div class="pricing-table-price">
									&pound;19<span class="price-per-mo">/mo</span>
								</div> <!-- end pricing-table-price -->
							</div> <!-- end pricing-table-header -->
							<div class="pricing-table-info">
								<ul class="list-unstyled">
									<li><i class="fa fa-check-circle-o"></i>Easy Installation</li>
									<li><i class="fa fa-check-circle-o"></i>Easy Installation</li>
									<li><i class="fa fa-times-circle-o"></i>Easy Installation</li>
								</ul>
								<a href="background-solid-color.html#" class="button solid-button blue-button">Get It Now</a>
							</div> <!-- end pricing-table-info -->
						</div> <!-- end pricing-table -->
						<div class="col-sm-4 pricing-table green">
							<div class="pricing-table-header">
								<h3>Pro</h3>
								<div class="pricing-table-price-border"></div>
								<div class="pricing-table-price">
									&pound;29<span class="price-per-mo">/mo</span>
								</div> <!-- end pricing-table-price -->
							</div> <!-- end pricing-table-header -->
							<div class="pricing-table-info">
								<ul class="list-unstyled">
									<li><i class="fa fa-check-circle-o"></i>Easy Installation</li>
									<li><i class="fa fa-check-circle-o"></i>Easy Installation</li>
									<li><i class="fa fa-check-circle-o"></i>Easy Installation</li>
								</ul>
								<a href="background-solid-color.html#" class="button solid-button green-button">Get It Now</a>
							</div> <!-- end pricing-table-info -->
						</div> <!-- end pricing-table -->
					</div> <!-- end pricing-tables -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		CALL TO ACTION

		-->
		<div class="section dark text-center cta">
			<div class="section-inner">
				<div class="container">
					<h3 class="cta-heading">Download Our Apps</h3>
					<p>Download it from the App Store for FREE if you don't mins some advertisments<br />popping up or if you prefer an ad-free experience then you can download the</p>
					<a href="background-solid-color.html#" class="button solid-button blue-button large-button"><i class="icon-apple"></i>Download Now</a>
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		NEWSLETTER SIGNUP

		-->
		<div class="section white text-center cta">
			<div class="section-inner">
				<div class="container">
					<h3 class="cta-heading">Stay in the Loop</h3>
					<p>Sign up for our email newsletter.</p>
					<div id="newsletter-loading" class="alert alert-info form-alert col-sm-6 col-sm-offset-3">Loading...</div>
					<div id="newsletter-success" class="alert alert-success form-alert col-sm-6 col-sm-offset-3">Success!</div>
					<div id="newsletter-error" class="alert alert-danger form-alert col-sm-6 col-sm-offset-3">Error!</div>
					<form action="scripts/newsletter.html" id="newsletter-form" class="col-sm-6 col-sm-offset-3">
						<div class="col-sm-9">
							<input type="email" id="newsletter-email" name="newsletter-email" placeholder="enter your email" />
						</div>
						<div class="col-sm-3">
							<input type="submit" id="newsletter-submit" name="newsletter-submit" value="Sign Up" class="button solid-button blue-button" />
						</div>
					</form>
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		SECTION + TEAM

		-->
		<div id="team" class="section white transparent" style="background-image: url('<?php echo base_url(); ?>site/images/background03.jpg');">
			<div class="section-inner">
				<div class="container">
					<h2>Meet Our Team<span class="icon"><i class="icon-users"></i></span></h2>
					<div class="team-boxes row">
						<div class="col-sm-3">
							<div class="team-member">
								<div class="team-name">
									<img src="<?php echo base_url(); ?>site/images/team_square01.jpg" alt="team" class="img-responsvie">
									<h5 class="name">Ethan Hunt</h5>
									<h5 class="role highlight-blue">CEO</h5>
									<div class="team-desc">
										<h5 class="name">Ethan Hunt</h5>
										<h5 class="role highlight-blue">CEO</h5>
										<p>I work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that's right for you.</p>
									</div> <!-- end team-desc -->
								</div> <!-- end team-name -->
								<div class="team-social">
									<a href="background-solid-color.html#"><i class="icon-facebook"></i></a>
									<a href="background-solid-color.html#"><i class="icon-twitter"></i></a>
									<a href="background-solid-color.html#"><i class="icon-googleplus"></i></a>
									<a href="background-solid-color.html#"><i class="icon-dribbble"></i></a>
									<a href="background-solid-color.html#"><i class="fa fa-linkedin"></i></a>
								</div> <!-- end team-social -->
							</div> <!-- end team-member -->
						</div> <!-- end col-sm-3 -->
						<div class="col-sm-3">
							<div class="team-member">
								<div class="team-name">
									<img src="<?php echo base_url(); ?>site/images/team_square02.jpg" alt="team" class="img-responsvie">
									<h5 class="name">Mike Banning</h5>
									<h5 class="role highlight-blue">CEO Twitch</h5>
									<div class="team-desc">
										<h5 class="name">Mike Banning</h5>
										<h5 class="role highlight-blue">CEO Twitch</h5>
										<p>I work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that's right for you.</p>
									</div> <!-- end team-desc -->
								</div> <!-- end team-name -->
								<div class="team-social">
									<a href="background-solid-color.html#"><i class="icon-facebook"></i></a>
									<a href="background-solid-color.html#"><i class="icon-twitter"></i></a>
									<a href="background-solid-color.html#"><i class="icon-googleplus"></i></a>
									<a href="background-solid-color.html#"><i class="icon-dribbble"></i></a>
									<a href="background-solid-color.html#"><i class="fa fa-linkedin"></i></a>
								</div> <!-- end team-social -->
							</div> <!-- end team-member -->
						</div> <!-- end col-sm-3 -->
						<div class="col-sm-3">
							<div class="team-member">
								<div class="team-name">
									<img src="<?php echo base_url(); ?>site/images/team_square03.jpg" alt="team" class="img-responsvie">
									<h5 class="name">Jonathan Doe</h5>
									<h5 class="role highlight-blue">Web Designer</h5>
									<div class="team-desc">
										<h5 class="name">Jonathan Doe</h5>
										<h5 class="role highlight-blue">Web Designer</h5>
										<p>I work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that's right for you.</p>
									</div> <!-- end team-desc -->
								</div> <!-- end team-name -->
								<div class="team-social">
									<a href="background-solid-color.html#"><i class="icon-facebook"></i></a>
									<a href="background-solid-color.html#"><i class="icon-twitter"></i></a>
									<a href="background-solid-color.html#"><i class="icon-googleplus"></i></a>
									<a href="background-solid-color.html#"><i class="icon-dribbble"></i></a>
									<a href="background-solid-color.html#"><i class="fa fa-linkedin"></i></a>
								</div> <!-- end team-social -->
							</div> <!-- end team-member -->
						</div> <!-- end col-sm-3 -->
						<div class="col-sm-3">
							<div class="team-member">
								<div class="team-name">
									<img src="<?php echo base_url(); ?>site/images/team_square04.jpg" alt="team" class="img-responsvie">
									<h5 class="name">Arthur King</h5>
									<h5 class="role highlight-blue">CFO Twitch</h5>
									<div class="team-desc">
										<h5 class="name">Arthur King</h5>
										<h5 class="role highlight-blue">CFO Twitch</h5>
										<p>I work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that's right for you.</p>
									</div> <!-- end team-desc -->
								</div> <!-- end team-name -->
								<div class="team-social">
									<a href="background-solid-color.html#"><i class="icon-facebook"></i></a>
									<a href="background-solid-color.html#"><i class="icon-twitter"></i></a>
									<a href="background-solid-color.html#"><i class="icon-googleplus"></i></a>
									<a href="background-solid-color.html#"><i class="icon-dribbble"></i></a>
									<a href="background-solid-color.html#"><i class="fa fa-linkedin"></i></a>
								</div> <!-- end team-social -->
							</div> <!-- end team-member -->
						</div> <!-- end col-sm-3 -->
					</div> <!-- end team -->
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<!--

		Contact

		-->
		<div id="contact" class="section white">
			<div class="section-inner">
				<div class="container">
					<h2>Contact Us<span class="icon"><i class="icon-envelope"></i></span></h2>
					<form action="scripts/contact.php" method="post" id="contact-form" target="_blank">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="contact-name">Name</label>
									<input type="text" id="contact-name" name="contact-name" placeholder="enter a name" />
								</div>
								<div class="form-group">
									<label for="contact-email">Email</label>
									<input type="email" id="contact-email" name="contact-email" placeholder="enter your email" />
								</div>
								<div class="form-group">
									<label for="contact-subject">Subject</label>
									<input type="text" id="contact-subject" name="contact-subject" placeholder="enter a subject" />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="contact-message">Message</label>
									<textarea name="contact-message" id="contact-message" rows="7" placeholder="type in a message"></textarea>
								</div>
							</div>
						</div>
						<div class="text-right">
							<div id="contact-loading" class="alert alert-info form-alert">Loading...</div>
							<div id="contact-success" class="alert alert-success form-alert">Success!</div>
							<div id="contact-error" class="alert alert-danger form-alert">Error!</div>
							<button type="submit" class="button solid-button green-button">Send Message <i class="fa fa-chevron-circle-right right"></i></button>
						</div>
					</form>
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->




		<div class="section white text-center">
			<div class="section-inner">
				<div class="container">
					<hr>
					<div class="social-icons">
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Facebook"><i class="icon-facebook"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Dribbble"><i class="icon-dribbble"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Twitter"><i class="icon-twitter"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="YouTube"><i class="icon-youtube"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="deviantART"><i class="icon-deviantart"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Skype"><i class="icon-skype"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Behance"><i class="fa fa-behance"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Instagram"><i class="icon-instagram"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Pinterest"><i class="icon-pinterest"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Vimeo"><i class="icon-vimeo"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Blogger"><i class="icon-blogger"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Google+"><i class="icon-googleplus"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Tumblr"><i class="icon-tumblr"></i></a>
						<a href="background-solid-color.html#" class="social-icon tool-tip" title="Flickr"><i class="icon-flickr"></i></a>
					</div> <!-- end social-icons -->
					<img src="<?php echo base_url(); ?>site/images/logo.png" alt="logo" class="img-responsive center-block">
					<p class="copyright">Copryright &copy; 2014</p>
				</div> <!-- end container -->
			</div> <!-- end section-inner -->
		</div> <!-- end section -->



		<a href="background-solid-color.html#" class="go-top"><i class="fa fa-angle-up"></i></a>


		
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url(); ?>site/js/bootstrap.min.js"></script>
		<!-- Intense -->
		<script src="<?php echo base_url(); ?>site/js/intense.js"></script>
		<!-- Owl Carousel -->
		<script src="<?php echo base_url(); ?>site/scripts/owl-carousel/owl.carousel.min.js"></script>
		<!-- inview -->
		<script src="<?php echo base_url(); ?>site/js/jquery.inview.min.js"></script>

		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
		<!-- Scripts.js -->
		<script src="<?php echo base_url(); ?>site/js/scripts.js"></script>
	</body>
</html>