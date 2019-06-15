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
														<!--<img src="assets/images/placeholder.jpg" alt="">--><?php $uid = ($this->session->userdata('id')); ?>
														<span><?php echo ($this->session->userdata('lname'));?><?php //echo $uid; ?></span>
														<i class="caret"></i>
													</a>

													<ul class="dropdown-menu dropdown-menu-right">
														<li><a href="<?php echo base_url(); ?>admission_portal/profile"><i class="icon-user-plus"></i> My profile</a></li>
														<li><a href="<?php echo base_url(); ?>admission_portal/user/faqs"><i class="icon-question4"></i> FAQs</a></li>
														<li><a href="<?php echo base_url(); ?>admission_portal/user/message"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-danger pull-right">58</span></a></li>
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
					<img src="<?php echo base_url(); ?>images/cos10.jpg" class="img-responsive">		
				</div>

			</div>
		</div>
	</div><div class="clearfix"></div>
	<!-- faq-page -->
	<div class="faq-w3agile about">
		<div class="container-fluid"> 
			<h3 class="w3ls-title w3ls-title1">Frequently asked questions(FAQs)</h3> 
			<ul class="faq">
				<?php  foreach ($faq as $post) : ?>
				<li class="item2"><a href="#" title="click here"><?php echo $post['question']; ?></a>
					<ul>
						<li class="subitem1"><p><?php echo $post['answer']; ?></p></li>										
					</ul>
				</li> 
				<?php  endforeach; ?>
			</ul> 
			<!-- script for tabs -->
			<script src="<?php echo base_url(); ?>js/jquery-2.2.3.min.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(function() {
				
					var menu_ul = $('.faq > li > ul'),
						   menu_a  = $('.faq > li > a');
					
					menu_ul.hide();
				
					menu_a.click(function(e) {
						e.preventDefault();
						if(!$(this).hasClass('active')) {
							menu_a.removeClass('active');
							menu_ul.filter(':visible').slideUp('normal');
							$(this).addClass('active').next().stop(true,true).slideDown('normal');
						} else {
							$(this).removeClass('active');
							$(this).next().stop(true,true).slideUp('normal');
						}
					});
				
				});
			</script>
			<!-- script for tabs -->   
		</div>
	</div><div class="clearfix"></div>
	<!-- //faq-page -->
	<!-- hinfo -->
	<div class="hfaq">
		<div class="container-fluid">
			<div class="faq_form">
				<h4>Drop your questions here</h4>
				<?php echo form_open('admission_portal/user/faqs'); ?>
					<input type="hidden" name="uid" value="<?php echo $uid; ?>" style="color:red;">
					<textarea name="question" placeholder="Ask Your Question Here"></textarea>
					<input type="submit" name="submit" value="Send Question">

				<?php echo form_close(); ?>
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