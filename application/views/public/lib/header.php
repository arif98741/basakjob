<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<!-- Meta Tags -->	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta charset="utf-8">
	<meta name="description" content="learapress || Education & Courses HTML5 Template">
	<meta name="keywords" content="corporate, consulting, college, courses, education, learning management system, online education, responsive, school, training center, university, modern & creative, teaching">
	<meta name="author" content="Theme Garbage">
	<!-- Title -->
	<title> Jobs Portal</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="<?php echo base_url(); ?>asset/public/img/logo2019-04-04-18-57-53_5ca6379160493.png" href="img/favicon.png">	



	<!-- Stylesheets Start -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/meanmenu.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/responsive.css">	

</head>
<body class="home-v1">
	<!-- Header Start -->
	<header>
		<!-- Header Topbar Start -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-8">
						<div class="header-left">
							<ul>
								<li><i class="fa fa-phone"></i> 01711-101010</li>							
								<li><i class="fa fa-envelope-o"></i> admin@gmail.com</li>
							</ul>	
						</div>
					</div>				
					<div class="col-md-5 col-sm-4">
						<div class="header-right-div">
							<div class="soical-profile">
								<span class="social-title">Follow Us</span>
								<ul>
									<li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-google"></i></a></li>
									<li><a href=""><i class="fa fa-skype"></i></a></li>
								</ul>
								<?php if(!$this->session->employee_login): ?>
									<span class="social-title" > <a href="<?php echo base_url();?>registration">Create Account</a></span>
									| 
									<span class="social-title"><a href="<?php echo base_url();?>login">Login</a></span>

									<?php else: ?>
										<span class="social-title"><a href="<?php echo base_url();?>profile">Profile</a></span> | <span class="social-title"><a href="<?php echo base_url();?>logout">Logout</a></span>
									<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Header Topbar End -->
					<!-- Main Bar Start -->
					<div class="hd-sec">
						<div class="container">
							<div class="row">
								<!-- Logo Start -->
								<div class="col-md-3 col-sm-12 col-xs-8">
									<div class="logo">
										<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>asset/public/img/logo2019-04-04-18-57-53_5ca6379160493.png"  style="height: 50px;" alt=""/></a>
									</div>
								</div>	
								<!-- Logo End -->
								<!-- Main Menu Start -->
								<div class="mobile-nav-menu"></div>						
								<div class="col-md-6 col-sm-9 menu-center">
									<div class="menu">
										<nav id="main-menu" class="main-menu">
											<ul>
												<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>									
												<li><a href="<?php echo base_url(); ?>">Home</a></li>	
												<li><a href="<?php echo base_url(); ?>jobs">Jobs</a></li>									
												<li><a href="<?php echo base_url(); ?>jobs/category">Category </a></li>	
												<li><a href="<?php echo base_url(); ?>jobs/search">Search Job</a></li>	
												<li><a href="#">Contact</a></li>
											</ul>
										</nav>

									</div>					
								</div>	
								<!-- Main Menu End -->
								<!-- Main Apply Button Start -->
								<div class="col-md-3 col-sm-3 applay-button-area">
									<form action="<?php echo base_url(); ?>jobs/search">
										<div class="applay-button">
											<input type="text" name="search" class="form-control" placeholder="Search Job">
											<button type="submit" class="btn btn-primary" style="margin-top: 4px">Search</button>
										</div>		
									</form>			
								</div>
								<!-- Main Apply Button End -->
							</div>
						</div>
					</div>
					<!-- Main Bar End -->
				</header>
				<!-- Header End -->		



