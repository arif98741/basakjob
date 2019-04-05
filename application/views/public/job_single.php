<!-- Content Section -->
<div id="content-part">

	<div class="container">

		<div class="row" style="margin-top: 40px;">

			<div class="col-md-12">
				<div class="row">
					
					<h4><?php echo $job[0]->job_title;?></h4> 
					
				</div>
				
				<img src="<?php echo base_url(); ?>uploads/job/<?php echo $job[0]->job_thumbnail ?>" alt="" class="img-fluid " style="height: 350px !important; width: 100%;">

				<h5>Company: <?php echo $job[0]->company_name;?></h5>
				<h5>Salary: <?php echo $job[0]->salary;?></h5>
				<h5>Location: <?php //echo $job[0]->salary;?></h5>
				<h5>Posted On: <?php echo $job[0]->posted_date;?></h5>
				<h5>Apply Deadline: <?php echo $job[0]->deadline;?></h5>
				<article>
					 <?php echo $job[0]->job_descri;?>
				</article>

				<br>
				<br>

				
				
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

