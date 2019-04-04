
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/asset/css/style.css">
	<title>Document</title>
</head>
<body>
	<!-- header part -->
	<!-- Navigation Part -->
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>asset/public/asset/img/logo/logo.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="jobs.html">Jobs</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Category</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Company</a>
					</li><!-- 

					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="profile.html" tabindex="-1" aria-disabled="false">Profile</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Login/Create Account
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Login</a>
							<a class="dropdown-item" href="#">Create Account</a>
						</div>
					</li>

					
				</ul>
				
			</div>
		</nav>
	</section>

	<!-- Slideer Section -->
	<div id="slider-part">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/5.jpg" class="d-block img-fluid" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="text-muted">Hi Boss</h5>
						<p class="text-muted">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="carousel-item ">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/3.jpg" class="d-block img-fluid" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="text-muted">Hi Dear</h5>
						<p class="text-muted">Nothing is Impossible</p>
					</div>
				</div>
				<div class="carousel-item ">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/4.jpg" class="d-block img-fluid" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="text-muted">Hi Engineer</h5>
						<p class="text-muted">Better than Half</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Content Section -->
	<div id="content-part">

		<div class="container">
			<h4>Job Category List</h4>
			<div class="row">
				<div class="col-md-3">
					<div class="list-group sidebar">
						<a class="list-group-item list-group-item-action" href="#list-item-1">Academic</a>
						<a class="list-group-item list-group-item-action" href="#list-item-3">Accounting</a>
						<a class="list-group-item list-group-item-action" href="#list-item-2">Bank</a>
						<a class="list-group-item list-group-item-action" href="#list-item-2">Customer Service</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">IT</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">Law Legal</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">Marketing</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">Mechanical</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">Security & Support Service</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">Software Industry</a>
					</div>
				</div>

				<div class="col-md-9">
					
					<div class="row">
						<div class="col-md-3">
							<h4>Posted Jobs</h4> 
						</div>
						<div class="col-md-9">
							<form action="" class="form-inline">
								<input type="text" class="form-control" style="width: 70%;"  placeholder="Search Jobs Here....">
								<input type="button" class="btn btn-success" value="search" style="width: 20%; padding: 6px 0px; margin-left: 4px;">
							</form>
						</div>
					</div>
					<br>

					
					<div class="job-list">
						<div class="row">
							<div class="cold-md-3">
								<img src="<?php echo base_url(); ?>asset/public/asset/img/3.jpg" alt="" class="img-fluid">
							</div>
							<div class="cold-md-9">
								<h5><a href="#" class=" text-muted">Assistant Programmer Required</a></h5>
								<small><strong>Company: Samsung</strong></small><br>
								<small><strong>Salary Range: 25k-45k</strong></small><br>
								<small><strong>Posted on:</strong> 12-12-2019</small> ,<small><strong>Application Deadline:</strong> 20-12-2019</small><br>
								<small>Lorem ipsum dolor sit amet elit. Asperiores, aliquid Lorem ipsum dolor sit amet, iure odit  ipsam. <a href="#" class="btn btn-link">Read more</a></small>
							</div>
						</div>
						<br><br>
						<div class="row">
							<div class="cold-md-3">
								<img src="<?php echo base_url(); ?>asset/public/asset/img/3.jpg" alt="" class="img-fluid">
							</div>
							<div class="cold-md-9">
								<h5><a href="#" class="text-muted">Data Entry Operator</a></h5>
								<small><strong>Company: Tiger IT</strong></small><br>
								<small><strong>Salary Range: 15k-25k</strong></small><br>
								<small><strong>Posted on:</strong> 12-12-2019</small> ,<small><strong>Application Deadline:</strong> 20-12-2019</small><br>
								<small>Lorem ipsum dolor sit amet elit. Asperiores, aliquid Lorem ipsum dolor sit amet, iure odit  ipsam. <a href="#" class="btn btn-link">Read more</a></small>
							</div>
						</div>

						<br><br>
						<div class="row">
							<div class="cold-md-3">
								<img src="<?php echo base_url(); ?>asset/public/asset/img/3.jpg" alt="" class="img-fluid">
							</div>
							<div class="cold-md-9">
								<h5><a href="#" class="text-muted">Senior PHP Developer Recuritment</a></h5>
								<small><strong>Company: Kazi Pvt. Ltd.</strong></small><br>
								<small><strong>Salary Range: 45k-55k</strong></small><br>
								<small><strong>Posted on:</strong> 12-12-2019</small> ,<small><strong>Application Deadline:</strong> 20-12-2019</small><br>
								<small>Lorem ipsum dolor sit amet elit. Asperiores, aliquid Lorem ipsum dolor sit amet, iure odit  ipsam. <a href="#" class="btn btn-link">Read more</a></small>
							</div>
						</div>

						<br><br>

						<div class="row">
							<div class="cold-md-3">
								<img src="<?php echo base_url(); ?>asset/public/asset/img/3.jpg" alt="" class="img-fluid">
							</div>
							<div class="cold-md-9">
								<h5><a href="#" class="text-muted">Senior PHP Developer Recuritment</a></h5>
								<small><strong>Company: Kazi Pvt. Ltd.</strong></small><br>
								<small><strong>Salary Range: 45k-55k</strong></small><br>
								<small>Lorem ipsum dolor sit amet elit. Asperiores, aliquid Lorem ipsum dolor sit amet, iure odit  ipsam. <a href="#" class="btn btn-link">Read more</a></small>
							</div>
						</div>

						<br><br>

						<p class="text-center"><a href="">1</a> | <a href="">2</a> | <a href="">3</a>  | <a href="">4</a> | <a href="">5</a> | <a href="">6</a> | <a href="#">next</a></p> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Company List -->
	<div id="company-list">
		<div class="container">
			<h4 class="text-center text-underline">Featured Jobs</h4>
			<div class="row">
				<div class="col-md-3">
					<div class="card" style="width: 18rem;" style="padding: 5px;">
						<img class="card-img-top img-fluid" src="/asset/img/company/10.png" alt="Card image cap" style="width: 100%;">
						<div class="card-body">
							<h5 class="card-title">HR Manager Required</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card" style="width: 18rem;" style="padding: 5px;">
						<img class="card-img-top img-fluid" src="/asset/img/company/10.png" alt="Card image cap" style="width: 100%;">
						<div class="card-body">
							<h5 class="card-title">Database Admistrator</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="card" style="width: 18rem;" style="padding: 5px;">
						<img class="card-img-top img-fluid" src="/asset/img/company/10.png" alt="Card image cap" style="width: 100%;">
						<div class="card-body">
							<h5 class="card-title">Pharmacy Specialist</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="card" style="width: 18rem;" style="padding: 5px;">
						<img class="card-img-top img-fluid" src="/asset/img/company/10.png" alt="Card image cap" style="width: 100%;">
						<div class="card-body">
							<h5 class="card-title">Lab Attendant</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Read more</a>
						</div>
					</div>
				</div>

				

			</div>
		</div>
	</div>

	<!-- Company List -->
	<br><br>
	<div id="company-list">
		<div class="container">
			<h4 class="text-center text-underline">Featured Companies</h4>
			<div class="row">

				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/11.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/12.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/3.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/4.png" alt="" class="img-fluid">
				</div>

				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/5.png" alt="" class="img-fluid">
				</div>

				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/6.png" alt="" class="img-fluid">
				</div>

			</div>

			<div class="row">

				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/1.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/2.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/10.png" alt="" class="img-fluid">
				</div>
				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/9.png" alt="" class="img-fluid">
				</div>

				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/8.png" alt="" class="img-fluid">
				</div>

				<div class="col-md-2">
					<img src="<?php echo base_url(); ?>asset/public/asset/img/company/7.png" alt="" class="img-fluid">
				</div>

			</div>

			

		</div>
	</div>

	<!-- footer part -->
	<br>
	<div id="footer-part">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<h3 class="text-muted text-left">About Us</h3>
					<small class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem ex qui quod atque, rem, praesentium odit recusandae maiores, aut dicta cumque hic. Rem ducimus ipsam error, quo voluptates modi!</small>
				</div>

				<div class="col-md-4">
					<h3 class="text-muted text-left">Important Links</h3>
					<a href="#" class="btn btn-link text-muted">Contact</a><br>
					<a href="#" class="btn btn-link text-muted">Faq</a><br>
					<a href="#" class="btn btn-link text-muted">Recent Jobs</a><br>
					<a href="#" class="btn btn-link text-muted">Take Training</a>
				</div>

				<div class="col-md-4">
					<h3 class="text-muted text-left">Social Media</h3>
					<a href="#" class="btn btn-link text-muted"><i class="fas fa-cart-plus"></i>&nbsp; Facebook</a><br>
					<a href="#" class="btn btn-link text-muted"><i class="fas fa-car"></i>&nbsp; Twitter</a><br>
					<a href="#" class="btn btn-link text-muted"><i class="fas fa-car"></i>&nbsp; Instagram</a><br>
					<a href="#" class="btn btn-link text-muted"><i class="fas fa-car"></i>&nbsp; Youtube</a>
				</div>


			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>asset/public/node_modules/jquery/dist/jquery.min.js"></script>
	<!-- <script src="node_modules/popper.js/dist/popper.min.js"></script> -->
	<script src="<?php echo base_url(); ?>asset/public/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {

		});
	</script>


</body>
</html>