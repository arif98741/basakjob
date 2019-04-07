

	    <title><?php echo $job[0]->job_title;?></title>
	<!-- Page Heading Section Start -->	
	<div class="pagehding-sec">
		<div class="images-overlay"></div>		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-heading">
						<h1> <?php echo $job[0]->job_title;?>   </h1>
					</div>
				 <span style="font-size: 16px;" class="course-price"><?php echo $job[0]->company_name;?></span> 
				 					
				</div>				
			</div>
		</div>
	</div>
	<!-- Page Heading Section End -->	
	<!-- Course Section Start -->	
	<div style="padding-top:10px;" class="course-details-page pt-100 pb-70">
		<div class="container">
			<div class="row">
		 
				<div class="col-md-9">
					<div class="tab-content">	
						<!-- Course Overview Tab Content Start-->	
						<div id="overview" class="tab-pane active">				
							<div class="row">				
								<div class="col-md-12">				
									<div class="course-details">	
											
	 
										<p>	 
										<p style="text-align: justify;"><?php echo $job[0]->job_descri;?></p> 
										 </p>
									</div>																
								</div>								
							</div>																
						</div>	
						<!-- Course Overview Tab Content End-->							
						 
						
					</div>				
				</div>
				<!-- Course Info Start-->	
				<div class="col-md-3">
					<?php if(empty($job[0]->job_thumbnail) || $job[0]->job_thumbnail == null): ?>

										<img src="https://increasify.com.au/wp-content/uploads/2016/08/default-image.png" alt=""/>

									<?php endif; ?>
					<img src="<?php echo base_url(); ?>uploads/job/<?php echo $job[0]->job_thumbnail;?>"  alt=""/>
					<div class="event-details-info">
					
						<h2 style="font-size: 18px !important;">Course Information</h2>
						<ul>
		 
							<li>Salary:<span> <?php echo $job[0]->salary;?></span></li>								
							<li>Location:<span><?php echo $job[0]->location;?></span></li>
							<li>Posted On:<span> <?php echo $job[0]->posted_date;?> </span></li>
							<li>Apply Deadline:<span> <?php echo $job[0]->deadline;?> </span></li>	
			 
						</ul>
						<div class="get-coruse-btn">
							<a href="#">Apply</a>
						</div>
					</div>	
				</div>	
				<!-- Course Info End-->	
			</div>	
		</div>	
	</div>	

<!-- Company List -->
<div id="company-list">
	<div class="container">
		<h4 class="text-center text-underline">Featured Companies</h4>
		<div class="row">

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/11.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/12.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/3.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/4.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/5.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/6.png" alt="" class="img-fluid">
			</div>

		</div>

		<div class="row">

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/1.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/2.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/10.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/9.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/8.png" alt="" class="img-fluid">
			</div>

			<div class="col-md-2">
				<img src="<?php echo base_url();?>asset/public/asset/img/company/7.png" alt="" class="img-fluid">
			</div>

		</div>



	</div>
</div>

