<div class="hcontent">
	<div class="container">
	<div class="banner_1">
			<div class="container-fluid">
				<!-- Inversed navbar -->
				<div class="navbar navbar-inverse bg-indigo-400 navbar-component" style="position: relative; z-index: 23;">
									<div class="navbar-header">
			
										<ul class="nav navbar-nav pull-left">
											<li><a data-toggle="collapse" data-target="#navbar-text" href="<?php echo base_url(); ?>admission_portal/user"><i class="icon-home4"></i>&nbsp;&nbsp; Home</a></li>
											<li><a data-toggle="collapse" data-target="#navbar-text" href="<?php echo base_url(); ?>admission_portal/user/admission_news"><i class="icon-menu2"></i>&nbsp;&nbsp; Admission News</a></li>
											<li class="dropdown dropdown-user"><a data-toggle="dropdown" class="dropdown-toggle"><i class="icon-graduation2"></i> <span>&nbsp;&nbsp;Apply for 
											<i class="caret"></i>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><a href="<?php echo base_url(); ?>admission_portal/user/ugraduate"><i class="icon-graduation2"></i>Undergraduate </a></li>
												<li><a href="<?php echo base_url();?>admission_portal/user/transfer"><i class="icon-graduation2"></i>Transfer Student</a></li>
												<!--<li><a href="admission_portal/user/message"><i class=""></i> Messages <span class="badge badge-danger pull-right">58</span></a></li>-->
											</ul>
										</li>
										</ul>
									</div>

									<div class="navbar-collapse collapse" id="navbar-text">
										<div class="navbar-right">
											<p class="navbar-text"><i class="icon-user-check position-left"></i>Signed in as&nbsp;<a href="#" class="navbar-link"><?php echo ($this->session->userdata('fname'));?> <?php echo ($this->session->userdata('lname'));?></a></p>
											<ul class="nav navbar-nav">
												<li class="dropdown dropdown-user">
													<a class="dropdown-toggle" data-toggle="dropdown">
														<!--<img src="assets/images/placeholder.jpg" alt="">--><?php //$uid = ($this->session->userdata('id')); ?>
														<span><?php echo ($this->session->userdata('lname'));?></span>
														<i class="caret"></i>
													</a>

													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="<?php echo base_url(); ?>admission_portal/profile"><i class="icon-user-plus"></i> My profile</a></li>
														<li><a href="<?php echo base_url(); ?>admission_portal/user/faqs"><i class="icon-question4"></i> FAQs</a></li>
														<li><a href="<?php echo base_url(); ?>admission_portal/user/inbox"><i class="icon-comment-discussion"></i> Inbox <span class="badge badge-danger pull-right">58</span></a></li>
														<li class="divider"></li>
														<!--<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>-->
														<li><a href="<?php echo base_url();?>admission_portal/logout"><i class="icon-switch2"></i> Logout</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
		 <div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="hbody">
		<div class="container-fluid">
			<h2><?= $title; ?></h2>
			<div class="hnews">
				<div class="container-fluid">
					<!--<img src="<?php echo base_url(); ?>images/cos10.jpg" class="img-responsive">-->
					<div class="row">
						<div class="col-md-3">
							<div class="lft_message">
								<h4><?php echo ($this->session->userdata('lname'));?>&nbsp;<?php echo ($this->session->userdata('fname'));?></h4>
								<p class="text-center"><?php echo ($this->session->userdata('email'));?></p>
								<div class="compose">
									<a href="<?php echo base_url(); ?>/admission_portal/user/inbox">My Inbox</a>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="snd_message">
								<?php $fname = ($this->session->userdata('fname')); 
									  $lname = ($this->session->userdata('lname'));
									  $full = $fname . " " . $lname;
								?>
								<?php echo form_open('admission_portal/user/message'); ?>
									<label>Please fill all details to send message</label>
									<input type="hidden" name="full" value="<?php echo $full; ?>">
									<input type="text" name="title" value="" placeholder="Enter Message Title">
									<textarea name="message" placeholder="Please Send us a message we want to hear from you"></textarea>
									<input type="submit" name="submit" value="Submit">
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div><div class="clearfix"></div>
	<!--<div class="hmessage">
		<div class="container-fluid">
			<ul class="list-unstyled">
				<li><a href="">Hello Dear, Thanks for signing up to our Portal</a></li>
			</ul>
		</div>
	</div>-->
	<div class="clearfix"></div>
	<!-- //faq-page -->
	<!-- hinfo -->
	<div class="hfaq">
		<div class="container-fluid">
			<div class="hinfo_text">
				<h2 style="color:#1873cc;">SEND US A MESSAGE WE WANT TO HEAR FROM YOU</h2>
				<p>No Payment of any kind nor financial transaction is allowed outside the bursary department of the University in Cotonou</p>
			</div>
		</div>
	</div>
	<div class="hcontact">
		<div class="container-fluid">
			<h2>CONTACT US</h2>
			<div class="row">
				<div class="col-md-4">
					<span class="icn glyphicon glyphicon-phone-alt"></span>
					<p>(229) 21 33 81 06, 97 34 10 89</p>
				</div>
				<div class="col-md-4">
					<span class="icn glyphicon glyphicon-map-marker"></span>
					<p>PK 10, Rt de Porto Novo, 06 BP 2080 Cotonou, Benin</p>
				</div>
				<div class="col-md-4">
					<span class="icn glyphicon glyphicon-envelope"></span>
					<p>admission@hnaub.bj</p>
				</div>
			</div>
		</div>	
	</div>