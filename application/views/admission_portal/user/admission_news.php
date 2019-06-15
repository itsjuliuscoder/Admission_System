<!--<h2><?= $title; ?></h2>-->	
<?php //if (($this->session->flashdata('user_loggedin'))) : ?>
		<?php
				// $msg = $this->session->flashdata('user_loggedin');
				// $lname = ($this->session->userdata('lname'));
				//  echo ("<script type=\"text/javascript\">
				// 		$(function(){
				// 		    new PNotify({
				// 		        title: '&nbsp; Hello $lname',
				// 		        text: '$msg',
				// 		        styling: 'fontawesome',
				// 		        type: 'success',
				// 		        animation: 'slide',
				// 		        addclass: 'bg-success'
				// 		    });
				// 		});
				// </script>");
		?>
<?php //endif; ?>
<div class="hcontent">
	<div class="container">
		<div class="banner_1">
			
			<div class="container-fluid">
				<!--<div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="<?php // echo base_url(); ?>admission_portal/user">Home</a></li>
					 <li><a href="<?php echo base_url(); ?>admission_portal/user/ugraduate">Undergraduate</a></li>
					 <li><a href="<?php echo base_url(); ?>admission_portal/user/transfer">Transfer</a></li>
					 <li><a href="<?php echo base_url(); ?>admission_portal/user/graduate">Graduate</a></li>
					 <li><a href="<?php echo base_url(); ?>admission_portal/user/message">Message</a></li>
					 <li><a href="<?php echo base_url(); ?>admission_portal/user/faqs">FAQs</a></li>
					 <li><a href="<?php echo base_url(); ?>admission_portal/logout">Logout</a></li>
				 </ul>

			 </div>-->
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
														<!--<img src="assets/images/placeholder.jpg" alt="">-->
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
		<div class="clearfix"></div>
		</div>
	
	<div class="hbody">
		<div class="container-fluid">
			<h2><?= $title; ?></h2>
				<link href="<?php echo base_url(); ?>css/owl.carousel.css" type="text/css" rel="stylesheet" media="all">
				<script src="<?php echo base_url(); ?>js/owl.carousel.js" type="text/javascript"></script>
				<!-- All-Admission-News -->
						<script>
							$(document).ready(function() {

								$("#owl-demo").owlCarousel({
									items : 4,
									lazyLoad : true,
									autoPlay : true,
									navigation : true,
									navigationText : ["", ""],
									rewindNav : false,
									scrollPerPage : false,
									pagination : false,
									paginationNumbers : false,
								});

							});
						</script>
					<div class="container-fluid">
					<div id="owl-demo" class="owl-carousel text-center">
						<?php  foreach ($news as $post) : ?>
						<div class="item">
							<div class="cau_left">
								<img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>images/admission_news/<?php echo $post['post-image']; ?>" alt="<?php echo $post['post-image']; ?>">
							</div>
							<div class="cau_left">
								<h4><a href="<?php echo base_url('/admission_portal/user/admission_news/'.$post['slug']); ?>"><?php echo $post['title']; ?></a></h4>
								<p>
									<?php echo substr($post['body'],0,100); ?>...
								</p>
							</div>
						</div>	
						<?php  endforeach; ?>
					</div>
					</div>
					<!--// All-Admission-News-->
		</div>
	</div><div class="clearfix"></div>
	<div class="happly">
		<div class="container">
			<h2>How to Apply to HNAUB</h2>
			<p>Applying to HNAUB as be made easier at your convinence, just follow the stated steps below</p>
			<div class="row">
				<div class="steps">
					<div class="row">
						<div class="col-md-3">
							<div class="no">
								1
							</div>
						</div>
						<div class="col-md-9">
							<h4>Log in to Admission Portal</h4>
							<p>To apply to HNAUB online, the applicant must first be a registered user to be able to login to the Admission Portal. You are presently in the Admission Portal, so no qualms.
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-3">
							<div class="no">
								2
							</div>
						</div>
						<div class="col-md-9">
							<h4>Click on the Programme you want to Apply for.</h4>
							<p>After you have login, navigate through the navigation bar to select the programme you choose to apply for (i.e Undergraduate or Graduate Programmes)</p>
						</div>
					</div><div class="clearfix"></div>
					<div class="row">
						<div class="col-md-3">
							<div class="no">
								3
							</div>
						</div>
						<div class="col-md-9">
							<h4>Fill Up the Form</h4>
							<p>After selecting the programme you choose to apply for, fill up the form by answering all questions appropriately.</p>
						</div>
					</div><div class="clearfix"></div>
					<div class="row">
						<div class="col-md-3">
							<div class="no">
								4
							</div>
						</div>
						<div class="col-md-9">
							<h4>Print out the Form</h4>
							<p>If you have filled the form by answering the questions appropriately, you can now print out the form.</p>
						</div>
					</div><div class="clearfix"></div>
					<div class="row">
						<div class="col-md-3">
							<div class="no">
								5
							</div>
						</div>
						<div class="col-md-9">
							<h4>WHAO!!! Congratulations</h4>
							<p>If you have followed the previous steps carefully, then you are good to go. Just come to our HNAUB Admission Office with 15,000 FCFA and the a printed copy of the online admission form in Cotonou to finalised every other thing.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><div class="clearfix"></div>
	<!-- hinfo -->
	<div class="hinfonews">
		<div class="container-fluid">
			<div class="hinfo_text">
				<h2>MAKE YOUR DREAM </h2>
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