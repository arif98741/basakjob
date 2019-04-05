<!-- Content Section -->
	<div id="content-part">

		<div class="container">
			<h4>Job Category List</h4>
			<div class="row">
				<div class="col-md-3">
					<div class="list-group sidebar">
					<?php 
						 //$jobcats  = $this->db->get('tbl_job_category')->result_object();
						 //echo '<pre>';
						 //print_r($jobcats); die;
					?>
						<?php foreach($jobcats as $jobcat){ ?>
						<a class="list-group-item list-group-item-action" href="#list-item-1"><?php echo ucfirst($jobcat->jobcat_name); ?></a>
						<?php }?>
					</div>
				</div>

				<div class="col-md-9">
					
					<div class="row">
						<div class="col-md-3">
							<h4>Recent Jobs</h4> 
						</div>
						<div class="col-md-9">
							<form action="" class="form-inline">
								<input type="text" class="form-control" style="width: 70%;"  placeholder="Search Jobs Here....">
								<input type="button" class="btn btn-success" value="search" style="width: 20%; padding: 6px 0px; margin-left: 4px;">
							</form>
						</div>
					</div>
					<br>

					<?php foreach($jobs as $job){ ?>
					
					<div class="job-list">
						<div class="row">
							<div class="cold-md-3">
								<img src="<?php echo base_url(); ?>uploads/job/<?php echo $job->job_thumbnail ?>" alt="" class="img-fluid">
							</div>
							<div class="cold-md-9">
								<h5><a href="#" class=" text-muted"><?php echo $job->job_title; ?></a></h5>
								<small><strong>Company: <?php echo $job->company_name ?></strong></small><br>
								<small><strong>Salary Range: <?php echo $job->salary/1000; ?>k</strong></small><br>
								<small><?php echo substr($job->job_descri, 0,100); ?><a href="#" class="btn btn-link">Read more</a></small>
							</div>
						</div>
						<br><br>
						
					</div>
				<?php } ?>
				</div>
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

	