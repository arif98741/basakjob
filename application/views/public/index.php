

	<!-- Content Section -->
	<div id="content-part">

		<div class="container">
			<h4>Job Category List</h4>
			<div class="row">
				<div class="col-md-3">
					<div class="list-group sidebar">

						<?php foreach ($jobcats as $jobcat) {  ?>
							
						
						<a class="list-group-item list-group-item-action" href="#list-item-1"><?php echo ucfirst($jobcat->jobcat_name) ?></a>

						<?php } ?>
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
						<?php foreach ($jobs as $job) {  ?>
							<div class="row">
								<div class="cold-md-3">
									<img src="<?php echo base_url(); ?>uploads/job/<?php echo $job->job_thumbnail; ?>" alt="" class="img-fluid">
								</div>
								<div class="cold-md-9">
									<h5><a href="<?php echo base_url();?>jobs/<?php echo $job->job_id;  ?>/<?php echo str_replace(' ', '-', $job->job_title); ?>" class=" text-muted"><?php echo $job->job_title; ?></a></h5>
									<small><strong>Company: <?php echo $job->company_name; ?></strong></small><br>
									<small><strong>Salary Range:  <?php echo $job->salary; ?> to  <?php echo $job->salary + 5000; ?></strong></small><br>
									<small><strong>Posted on:</strong> <?php echo $job->posted_date; ?> </small> ,<small><strong>Application Deadline:</strong> <?php echo $job->deadline; ?> </small><br>
									<small><?php echo substr($job->job_descri, 0,100); ?>  <a href="<?php echo base_url();?>jobs/<?php echo $job->job_id;  ?>/<?php echo str_replace(' ', '-', $job->job_title); ?>" class="btn btn-link">Read more</a></small>
								</div>
							</div><br>

						<?php } ?>
						
						

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
				<?php foreach ($featured_jobs as $featured_job) {  ?>

				<div class="col-md-3" >
					<div class="card" style="width: 18rem;" style="margin: 2px;">
						<img class="card-img-top img-fluid" src="<?php echo base_url(); ?>uploads/job/<?php echo $featured_job->job_thumbnail; ?>" alt="Card image cap" style="width: 100%; height: 150px;">
						<div class="card-body">
							<h6 class="card-title"><?php echo $featured_job->job_title; ?></h6>
							<p class="card-text"><?php echo substr($featured_job->job_descri, 0,200); ?>  </p>
							<a href="#" class="btn btn-primary">Read more</a>
						</div>
					</div>
				</div>
				
			<?php } ?>
				

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
	