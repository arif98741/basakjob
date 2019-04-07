

<!-- About Us Section Start -->	
<div class="about-us-sec pt-100 pb-70">
	<div class="container">
		<div class="row">
			<!-- About Us Short Description Start -->	
			<div class="col-md-6">			
				<div class="about-desc">
					<h1> Introductuion</h1>
					<p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia totam voluptatibus error libero adipisci at veritatis, nulla, temporibus similique itaque blanditiis! Atque magnam cupiditate recusandae veritatis quaerat vero ipsa nesciunt aperiam? Dolor, porro veritatis! In rerum, porro. Harum, dicta quidem est provident voluptates totam, soluta ullam sit eos natus, amet ipsum perferendis dolor! Necessitatibus eaque praesentium eos. Repudiandae veniam corrupti repellat beatae enim voluptates architecto qui, numquam quibusdam neque nihil doloremque, consequatur fugiat ipsam sapiente. Fugiat atque dicta, inventore vitae. Ratione eveniet tempora amet consequuntur quos optio, sapiente dignissimos, cumque delectus itaque perferendis quod facere laboriosam deleniti distinctio, facilis voluptas!<span lang="BN-BD">�</p>
						<a href="page.php?id=1" class="about-btn">Details</a>
					</div>				
				</div>
				<!-- About Us Short Description End -->	
				<!-- Video Intro Start -->	
				<div class="col-md-6">
					<div class="vedio-inner">
						<img src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-03-11-13-45_5ca479497f7ee.jpg"  alt="">	

					</div>						
				</div>
				<!-- Video Intro End -->	
			</div>	
		</div>	
	</div>	
	<!-- About Us Section End -->		
	<!-- Course Heading Section Start -->
	<div class="course-header-sec">
		<div class="course-sec-image"></div>	
	</div>
	<!-- Course Heading Section End -->	
	<!-- Course Section Start -->	
	<div class="course-sec pb-70">
		<div class="container">
			<!-- Section Title Start -->	
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Our Courses </h1>
					</div>
				</div>
			</div>	
			<!-- Section Title End -->		
			<div class="row">						
				<div class="course-list-sec">		
					<div class="all-course">
						<!-- Course Single Inner Start -->	

						<?php foreach($jobs as $job){ ?>

							<div class="course-inner">
								<div class="course-thumb">
									<?php if(empty($job->job_thumbnail) || $job->job_thumbnail == null): ?>

										<img src="https://increasify.com.au/wp-content/uploads/2016/08/default-image.png" alt=""/>

									<?php endif; ?>

									<img src="<?php echo base_url(); ?>uploads/job/<?php echo $job->job_thumbnail;?>" alt=""/>



									<div class="teacher-thumb">
										<img src="<?php echo base_url(); ?>asset/public/img/teacher_1.png" alt=""/>
									</div>

									<div class="readmore-button">
										<a href="<?php echo base_url(); ?>jobs/job_single/<?php echo $job->job_id;?>">Details</a>
									</div>
								</div>
								<div class="course-meta">
									<span class="course-price"><?php echo $job->salary;?></span>
									<span class="course-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
									</span>
								</div>						
								<div class="course-desc">
									<h2><a href="<?php echo base_url(); ?>jobs/job_single/<?php echo $job->job_id;?>"><?php echo $job->job_title ;?></a></h2>
									<span style="font-size: 16px;" class="course-price"><?php echo $job->company_name;?></span>
									<p><p style="text-align: justify;"><?php echo substr($job->job_descri , 0,100);?></p>
								</div>
								<div class="course-info">
									<ul>

										<li><a href="#"><i class="fa fa-map-marker"></i><?php echo $job->location ;?> </a></li>
										<li><a href="#"><i class="fa fa-calendar"></i><?php echo $job->deadline ;?></a></li>
									</ul>
								</div>
							</div>	
						<?php } ?>


						<!-- Course Single Inner End -->		
					</div>																			
				</div>					
			</div>	
		</div>
	</div>
	<!-- Course Section End -->	

	<!-- Count Up Section Start -->	
	<div class="count-up-sec">
		<div class="count-up-sec-overlay"></div>
		<div class="container">
			<div class="row">	
				<!-- Count Up Inner Start -->
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="count-up-inner">
						<div class="count-up-icon">
							<img src="<?php echo base_url(); ?>asset/public/img/icon/employee.png" alt=""/>
						</div>
						<div class="countup-text">
							<h2 class="counter"><p>05</p></h2>
							<h4>Total Job</h4>						
						</div>
					</div>
				</div>	
				<!-- Count Up Inner End -->
				<!-- Count Up Inner Start -->
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="count-up-inner">
						<div class="count-up-icon">
							<img src="<?php echo base_url(); ?>asset/public/img/icon/customer.png" alt=""/>
						</div>					
						<div class="countup-text">
							<h2 class="counter"><p>320</p></h2>
							<h4>Total Company</h4>						
						</div>
					</div>
				</div>	
				<!-- Count Up Inner End -->
				<!-- Count Up Inner Start -->
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="count-up-inner">
						<div class="count-up-icon">
							<img src="<?php echo base_url(); ?>asset/public/img/icon/project.png" alt=""/>
						</div>						
						<div class="countup-text">
							<h2 class="counter"><p>100</p></h2>
							<h4>Total Courses</h4>						
						</div>
					</div>				
				</div>		
				<!-- Count Up Inner End -->
				<!-- Count Up Inner Start -->
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="count-up-inner">
						<div class="count-up-icon">
							<img src="<?php echo base_url(); ?>asset/public/img/icon/medal.png" alt=""/>
						</div>						
						<div class="countup-text">
							<h2 class="counter"><p>5</p>      </h2>
							<h4>Award</h4>						
						</div>
					</div>
				</div>
				<!-- Count Up Inner End -->
			</div>					
		</div>
	</div>
	<!-- Count Up Section End -->	

	<!-- Why Choose Us Start -->	
	<div class="gallery-sec pt-100 pb-100">	
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<div class="sec-title">
						<h1>Our Featured Jobs</h1>
					</div>
				</div>
			</div>		
			<div class="row">	
				<div class="col-md-12">
					<div class="why-choose-all">

						<?php foreach($featuredjobs as $featuredjob){ ?>
							<!-- Single Why Choose Inner Start -->	
							<div class="why-choose-inner">
								<div class="why-choose-thumb">

									<?php if(empty($featuredjob->job_thumbnail) || $featuredjob->job_thumbnail == null): ?>

										<img src="https://increasify.com.au/wp-content/uploads/2016/08/default-image.png" alt=""/>

									<?php endif; ?>
									<img src="<?php echo base_url(); ?>uploads/job/<?php echo $featuredjob->job_thumbnail;?>" alt=""/>

									<div class="why-choose-icon">
										<img src="<?php echo base_url(); ?>asset/public/img/icon/employees.png" alt=""/>
									</div>								
								</div>
								<div class="why-choose-text">
									<h2><a href="<?php echo base_url(); ?>jobs/job_single/<?php echo $featuredjob->job_id;?>"><?php echo $featuredjob->job_title ;?></a></h2>
									<p><p style="text-align: justify;"><?php echo substr($featuredjob->job_descri , 0,100);?></p>
								</div>
							</div>
							<!-- Single Why Choose Inner End -->	
						<?php } ?>


					</div>				
				</div>	
			</div>	
		</div>	
	</div>	
	<!-- Why Choose Us End -->		

	<!-- Testimonial Section Start -->
	<div class="testimonial-sec pt-100 pb-100">
		<div class="testimonial-sec-overlay"></div>
		<div class="container">			
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="all-testimonial">
						<!-- Single Testimonial Item Start -->
						<div class="single-testimonial">							
							<p style="text-align:center!important"><p style="text-align: justify;">Ipsum dolor sit amet, consectetur adipisicing elit. Tempora aliquid voluptas natus asperiores doloremque, omnis ad, recusandae sunt pariatur quo, provident unde nulla accusantium, quisquam velit atque neque. Numquam illo vitae, quibusdam provident reprehenderit laudantium, perferendis cum eligendi modi voluptatem voluptatum, nemo iste. Ipsam, voluptatem corporis deleniti quas architecto officiis?&nbsp;<span lang="BN-BD">de</p>
								<div class="testimonial">
									<div class="inner">
										<div class="client-info">
											<h2>Rahim</h2>
											<h3>Employee</h3>								
										</div>	
									</div>							
									<div class="inner">
										<div class="testimonial-client-img">
											<img src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-00-04-22_5ca52de661db0.jpg" alt=""/>
										</div>								
									</div>	
								</div>								
							</div>		
							<!-- Single Testimonial Item Start -->
							<div class="single-testimonial">							
								<p style="text-align:center!important"><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non magnam, ab at, modi libero nemo mollitia debitis unde iure voluptate ea eaque nam corporis iste, pariatur! Perferendis, aliquam, excepturi. Itaque facere, consequuntur, a repellendus necessitatibus doloribus. A ducimus doloremque minima nobis quaerat necessitatibus eveniet maxime et, molestias repudiandae ut dignissimos?&nbsp;<span lang="BN-BD">df .......</p>
									<div class="testimonial">
										<div class="inner">
											<div class="client-info">
												<h2>Kristen</h2>
												<h3>Employee</h3>								
											</div>	
										</div>							
										<div class="inner">
											<div class="testimonial-client-img">
												<img src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-00-03-27_5ca52daf01af6.jpg" alt=""/>
											</div>								
										</div>	
									</div>								
								</div>		

								<!-- Single Testimonial Item End -->

							</div>							
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
			<!-- Testimonial Section End -->	

			<!-- Blog Section Start -->
			<div class="blog-sec pt-100 pb-70">
				<div class="container">
					<!-- Section Title Start -->
					<div class="row">
						<div class="col-md-12">
							<div class="sec-title">
								<h1>Recent Blogs</h1>
							</div>
						</div>
					</div>	
					<!-- Section Title End -->
					<div class="row">								
						<div class="col-md-12">						
							<div class="all-latest-news">	
								<!-- Single Blog Item Start -->
								<div class="single-post">	
									<div class="single-post-thumb">	
										<img style="height:231px;" src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-14-51-02_5ca5fdb6e3a56.jpg"  alt=""/>	
										<div class="single-post-thumb-overlay">
											<div class="post-meta">
												<ul>
													<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
													<li><a href=""><i class="fa fa-calendar"></i>2019-04-04</a></li>

												</ul>
											</div>
										</div>
									</div>								
									<div class="single-post-text">						
										<h2><a href="page.php?id=49"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, voluptatum.</a></h2>			
										<p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est odit provident quos incidunt commodi.</p>
										<a href="page.php?id=49" class="blog-readmore"> read more</a>
									</div>
								</div>
								<div class="single-post">	
									<div class="single-post-thumb">	
										<img style="height:231px;" src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-14-51-02_5ca5fdb6e3a56.jpg"  alt=""/>	
										<div class="single-post-thumb-overlay">
											<div class="post-meta">
												<ul>
													<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
													<li><a href=""><i class="fa fa-calendar"></i>2019-04-04</a></li>

												</ul>
											</div>
										</div>
									</div>								
									<div class="single-post-text">						
										<h2><a href="page.php?id=49"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, voluptatum.</a></h2>			
										<p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est odit provident quos incidunt commodi.</p>
										<a href="page.php?id=49" class="blog-readmore"> read more</a>
									</div>
								</div><div class="single-post">	
									<div class="single-post-thumb">	
										<img style="height:231px;" src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-14-51-02_5ca5fdb6e3a56.jpg"  alt=""/>	
										<div class="single-post-thumb-overlay">
											<div class="post-meta">
												<ul>
													<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
													<li><a href=""><i class="fa fa-calendar"></i>2019-04-04</a></li>

												</ul>
											</div>
										</div>
									</div>								
									<div class="single-post-text">						
										<h2><a href="page.php?id=49"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, voluptatum.</a></h2>			
										<p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est odit provident quos incidunt commodi.</p>
										<a href="page.php?id=49" class="blog-readmore"> read more</a>
									</div>
								</div><div class="single-post">	
									<div class="single-post-thumb">	
										<img style="height:231px;" src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-14-51-02_5ca5fdb6e3a56.jpg"  alt=""/>	
										<div class="single-post-thumb-overlay">
											<div class="post-meta">
												<ul>
													<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
													<li><a href=""><i class="fa fa-calendar"></i>2019-04-04</a></li>

												</ul>
											</div>
										</div>
									</div>								
									<div class="single-post-text">						
										<h2><a href="page.php?id=49"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, voluptatum.</a></h2>			
										<p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est odit provident quos incidunt commodi.</p>
										<a href="page.php?id=49" class="blog-readmore"> read more</a>
									</div>
								</div>
								<div class="single-post">	
									<div class="single-post-thumb">	
										<img style="height:231px;" src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-14-51-02_5ca5fdb6e3a56.jpg"  alt=""/>	
										<div class="single-post-thumb-overlay">
											<div class="post-meta">
												<ul>
													<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
													<li><a href=""><i class="fa fa-calendar"></i>2019-04-04</a></li>

												</ul>
											</div>
										</div>
									</div>								
									<div class="single-post-text">						
										<h2><a href="page.php?id=49"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, voluptatum.</a></h2>			
										<p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est odit provident quos incidunt commodi.</p>
										<a href="page.php?id=49" class="blog-readmore"> read more</a>
									</div>
								</div>
								<div class="single-post">	
									<div class="single-post-thumb">	
										<img style="height:231px;" src="<?php echo base_url(); ?>asset/public/midea/featuredimage/featuredimage2019-04-04-14-51-02_5ca5fdb6e3a56.jpg"  alt=""/>	
										<div class="single-post-thumb-overlay">
											<div class="post-meta">
												<ul>
													<li><a href=""><i class="fa fa-user"></i>Admin</a></li>
													<li><a href=""><i class="fa fa-calendar"></i>2019-04-04</a></li>

												</ul>
											</div>
										</div>
									</div>								
									<div class="single-post-text">						
										<h2><a href="page.php?id=49"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, voluptatum.</a></h2>			
										<p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum est odit provident quos incidunt commodi.</p>
										<a href="page.php?id=49" class="blog-readmore"> read more</a>
									</div>
								</div>	

								<!-- Single Blog Item End -->

								<!-- Single Blog Item End -->

								<!-- Single Blog Item End -->
								
								<!-- Single Blog Item End -->
								
								<!-- Single Blog Item End -->

							</div>															
						</div>
					</div>
				</div>
			</div>
			<!-- Blog Section End -->		
			<!-- Footer Section Start -->
			<script src="<?php echo base_url(); ?>asset/public/js/jquery-2.2.4.min.js"></script>
			<script>
				$(document).ready(function() {
					//alert('hi');
					setTimeout(function(){
						$('.success').slideUp(500);
					},5000);

				});
			</script>