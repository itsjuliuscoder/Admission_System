

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<div class="navbar-right">
				<p class="navbar-text">Welcome, <?php echo ($this->session->userdata('fname'));?>!</p>
				<p class="navbar-text"><span class="label bg-success-400">Online</span></p>
				
				<ul class="nav navbar-nav">				
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bell2"></i>
							<span class="visible-xs-inline-block position-right">Activity</span>
							<span class="status-mark border-orange-400"></span>
						</a>

						<div class="dropdown-menu dropdown-content">
							<div class="dropdown-content-heading">
								Activity
								<ul class="icons-list">
									<li><a href="#"><i class="icon-menu7"></i></a></li>
								</ul>
							</div>

							<ul class="media-list dropdown-content-body width-350">
								<?php  foreach ($users as $user) : ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-user"></i></a>
									</div>

									<div class="media-body">
										<a href="#"><?php echo $user['fname']; ?> <?php echo $user['lname']; ?></a> has signed to the Admission Portal"
										<div class="media-annotation"><?php echo date('l, F d, Y', strtotime($user['created_at'])); ?></div>
									</div>
								</li>
								<?php endforeach; ?>
								<?php  foreach ($admin as $admins) : ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-primary-400 btn-rounded btn-icon btn-xs"><i class="icon-user-tie"></i></a>
									</div>

									<div class="media-body">
										<a href="#"><?php echo $admins['fname']; ?> <?php echo $admins['lname']; ?></a> was added as an Admin by <?php echo $admins['created_by']; ?> "
										<div class="media-annotation"><?php echo date('l, F d, Y', strtotime($admins['created_at'])); ?></div>
									</div>
								</li>
								<?php endforeach; ?>
								<?php  foreach ($contacts as $contact) : ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>
									</div>
									
									<div class="media-body">
										We have just recieved a contact message from <a href="#"><?php echo $contact['fname']; ?></a>
										<div class="media-annotation"><?php echo date('l, F d, Y', strtotime($contact['date'])); ?></div>
									</div>
								</li>
								<?php endforeach; ?>
								<?php  foreach ($ugrad as $ugrads) : ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-blue btn-rounded btn-icon btn-xs"><i class="icon-graduation2"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#"><?php echo $ugrads['sname']; ?>&nbsp;<?php echo $ugrads['fname']; ?></a> applied for <span class="text-semibold">Undergraduate Studies</span>
										<div class="media-annotation">2 hours ago</div>
									</div>
								</li>
								<?php endforeach; ?>
								<?php  foreach ($tran as $trans) : ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-purple-300 btn-rounded btn-icon btn-xs"><i class="icon-truck"></i></a>
									</div>
									
									<div class="media-body">
									<a href="#"><?php echo $trans['sname']; ?>&nbsp;<?php echo $trans['fname']; ?></a> applied as a <span class="text-semibold">Transfer Student</span>
									<div class="media-annotation">2 hours ago</div>
								</div>
								</li>
								<?php endforeach; ?>
								<?php  foreach ($faq as $faqs) : ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-info-400 btn-rounded btn-icon btn-xs"><i class="icon-question4"></i></a>
									</div>
									
									<div class="media-body">
										We were asked a question in our <a href="<?php echo $faqs['id']; ?>">Frequently Asked Questions</a> services
										<div class="media-annotation">Feb 2, 10:20</div>
									</div>
								</li>
								<?php endforeach; ?>
								<?php  foreach ($posts as $poster) : ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-warning-400 btn-rounded btn-icon btn-xs"><i class="icon-bubble8"></i></a>
									</div>
									
									<div class="media-body">
										A new posts<a href="<?php echo $poster['id']; ?>"> <?php echo $poster['title']; ?></a> was created by <?php echo $poster['created_by']; ?>
										<div class="media-annotation">Feb 2, 10:20</div>
									</div>
								</li>
								<?php endforeach; ?>
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
									</div>
									
									<div class="media-body">
										<strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
										<div class="media-annotation">Feb 1, 05:46</div>
									</div>
								</li>
							</ul>
						</div>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bubble8"></i>
							<span class="visible-xs-inline-block position-right">Messages</span>
							<span class="status-mark border-orange-400"></span>
						</a>
						
						<div class="dropdown-menu dropdown-content width-350">
							<div class="dropdown-content-heading">
								Messages
								<ul class="icons-list">
									<li><a href="#"><i class="icon-compose"></i></a></li>
								</ul>
							</div>

							<ul class="media-list dropdown-content-body">								
								<?php  foreach ($contacts as $contact) : ?>
								<li class="media">
									<div class="media-left"><img src="<?php echo base_url(); ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold"><?php echo $contact['fname']; ?></span>
											<span class="media-annotation pull-right"><?php echo date('l', strtotime($contact['date'])); ?></span>
										</a>
										
										<span class="text-muted"><?php echo $contact['message']; ?></span>
									</div>
								</li>
								<?php  endforeach; ?>
							</ul>

							<div class="dropdown-content-footer">
								<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
							</div>
						</div>
					</li>					
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="<?php echo base_url(); ?>assets/profile_pictures/<?php echo ($this->session->userdata('profile_image'));?>" class="img-circle img-responsive" alt=""></a>
								<h6 style="font-weight:bolder;"><?php echo ($this->session->userdata('fname'));?></h6>
								<span class="text-size-small"><?php echo ($this->session->userdata('position'));?></span>
							</div>
														
							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
							</div>
						</div>
						
						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="<?php echo base_url(); ?>admission_admin/profile"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								<li><a href="<?php echo base_url(); ?>admission_admin/register_admin"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="<?php echo base_url(); ?>admission_admin/logout"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
					<div class="category-content no-padding">
						<ul class="navigation navigation-main navigation-accordion">

							<!-- Main -->
							<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
							<li><a href="<?php echo base_url(); ?>/admission_admin/home"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
							<li><a href=""><i class="icon-list-unordered"></i> <span>Admin Portal <span class="label bg-blue-400">1.0</span></span></a></li>

						</ul>
					</div>
				</div>
				<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?php echo base_url(); ?>admission_admin/home"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="<?php echo base_url(); ?>admission_admin/chat_room"><i class="icon-comment-discussion position-left"></i> Join the Conversation</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-9">

							
							<!-- /marketing campaigns -->


							<!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="panel bg-teal-400">
										<div class="panel-body">
											<div class="heading-elements">
												<span class="heading-text badge bg-teal-800"><?php echo $var = ($row/1000) * 100; ?>% Registered Users</span>
											</div>

											<h2 class="no-margin"><?php echo $row; ?></h2>
											Registered Users
											<!--<div class="text-muted text-size-small"><?php echo $var = ($row/1000) * 100; ?>% Registered to Our Portal</div>-->
										</div>

										<div class="container-fluid">
											<div id="members-online"></div>
										</div>
									</div>
									<!-- /members online -->

								</div>

								<div class="col-lg-4">

									<!-- Current server load -->
									<div class="panel bg-pink-400">
										<div class="panel-body">
											<div class="heading-elements">
												<span class="heading-text badge bg-pink-800"><?php echo $var = ($num_ugrad/1000) * 100; ?>% Applied</span>
											</div>

											<h2 class="no-margin"><?php echo $num_ugrad; ?></h2>
											Undergraduate Form
											<!--<div class="text-muted text-size-small"><?php echo $var = ($num_ugrad/1000) * 100; ?>% Applied for Undergraduate</div>-->
										</div>

										<div id="server-load"></div>
									</div>
									<!-- /current server load -->

								</div>

								<div class="col-lg-4">

									<!-- Today's revenue -->
									<div class="panel bg-blue-400">
										<div class="panel-body">
											<div class="heading-elements">
												<span class="heading-text badge bg-blue-800"><?php echo $var = ($num_tran/1000) * 100; ?>% Applied </span>
						                	</div>

											<h2 class="no-margin"><?php echo $num_tran; ?></h2>
											Transfer Student Form
											<!--<div class="text-muted text-size-small"><?php echo $var = ($num_tran/1000) * 100; ?>% Applied as Transfer Student</div>-->
										</div>

										<div id="today-revenue"></div>
									</div>
									<!-- /today's revenue -->

								</div>
							</div>
							<!-- /quick stats boxes -->


					<!-- Page length options -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">HNAUB Admission Office [Admin Only] </h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							Welcome to <code>HNAUB Admission Admin Portal.</code> Here you see and control everything that happens on the whole website. You are giving the privilegde to see Users that register to the admission portal, people that send messages, create post, view people that applied for the online admission form and lot more. Just stay calm there's more coming your way.
						</div>
						<?php 
									// $post_date = '1079621429';
									// $now = time();
									// $units = 2;
									// echo timespan($post_date, $now, $units);

							?>
						<table class="table datatable-scroll-y" style="width:100%!important;">
							
							<thead>
								<tr>
									
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email Address</th>
									<th>Status</th>
									<th>Joined Time</th>
									<th class="text-center">Actions</th>
								</tr>
								<!--<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Job Title</th>
									<th>DOB</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>-->
							</thead>

							<tbody>
								<?php  foreach ($users as $user) : ?>
								<tr>
									
									<td><?php echo $user['fname']; ?></td>
									<td><?php echo $user['lname']; ?></td>
									<td><?php echo $user['email']; ?></td>
									<td><a class="controller" href="<?php echo base_url() . 'index.php/business/publique/details/' . $user['id'] ; ?>"><?php if ($user['status']=="active"){
										echo "<span class=\"label label-success\">Active</span>";
									} else {
										echo "<span class=\"label label-danger\">Disabled</span>";
									} ?></a>
									</td>
									<td>
										<?php echo date('F d, Y', strtotime($user['created_at'])); ?>
									</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a class="controller" href="<?php echo base_url() . 'index.php/business/publique/details/' . $user['id'] ; ?>"><i class="icon-user-check"></i>View User Details <?php //echo $user['id']; ?></a></li>
													<!--<li><a href="<?php echo $user['fname']; ?>" data-toggle="modal" data-target="#modal_form_inline_detail"><i class="icon-user-check"></i>View User Details <?php echo $user['id']; ?></a></li>
													<li><a href="<?php echo $user['fname']; ?>" data-toggle="modal" data-target="#modal_form_inline_enable"><i class="icon-user-block"></i>Enable User</a></li>
													<li><a href="<?php echo $user['fname']; ?>" data-toggle="modal" data-target="#modal_form_inline_disable"><i class="icon-user-plus"></i>Disable User</a></li>-->
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							<?php  endforeach; ?>			
							</tbody>
					
						</table>
						
					</div>
					<!-- /page length options -->

							<!-- Latest posts -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Latest posts</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
			                	</div>

								<div class="panel-body">
									<div class="row">
										<?php  foreach ($posts as $post) : ?>
										<div class="col-lg-6">
											<ul class="media-list content-group">
												
												<li class="media stack-media-on-mobile">
				                					<div class="media-left">
														<div class="thumb">
															<a href="#">
																<img src="<?php echo base_url(); ?>images/admission_news/<?php echo $post['post-image']; ?>" class="img-responsive img-rounded media-preview" alt="">
																<span class="zoom-image"><i class="icon-play3"></i></span>
															</a>
														</div>
													</div>

				                					<div class="media-body">
														<h6 class="media-heading"><a href="#"><?php echo $post['title']; ?></a></h6>
							                    		<ul class="list-inline list-inline-separate text-muted mb-5">
							                    			<li><i class="icon-book-play position-left"></i><?php echo $post['created_by']; ?></li>
							                    			<li><?php echo date('l, F d, Y', strtotime($post['created_at'])); ?></li>
							                    		</ul>
														<?php echo substr($post['body'],0,100); ?>...
													</div>
												</li>
											
											</ul>
										</div>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
							<!-- /latest posts -->
							<script type="text/javascript">
                            $(function(){
                                //$('#sidebar select option:selected').click(function(){})
                                $('.controller').click(function(e){
                                    e.preventDefault();
                                    $('.modal-body').html("chargement ...");
                                    var url = $(this).attr('href');
                                    $.post(url, function(rep){
                                        $('.modal-body').html(rep);
                                    })
                                    $('#myModal').modal();
                                    
                                })

                                // $(".slide_banniere").owlCarousel({
                                //     items : 1,
                                //     dots: false,
                                //     autoplay : true,
                                //     autoplayHoverPause : true,
                                //     autoplayTimeout : 5000,
                                //     loop: true,
                                // })
                            })
                        </script>                

						</div>

						<div class="col-lg-3">




							


							<!-- My messages -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">My messages</h6>
									<div class="heading-elements">
										<span class="heading-text"><i class="icon-history text-warning position-left"></i> Jul 7, 10:30</span>
										<span class="label bg-success heading-text">Online</span>
									</div>
								</div>

								<!-- Numbers -->
								<div class="container-fluid">
									<div class="row text-center">
										<div class="col-md-4">
											<div class="content-group">
												<h6 class="text-semibold no-margin"><i class="icon-mail5 position-left text-slate"></i><br> <?php echo $num_contact; ?></h6>
												<span class="text-muted text-size-small">Contact Messages</span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="content-group">
												<h6 class="text-semibold no-margin"><i class="icon-calendar3 position-left text-slate"></i><br> <?php echo $num_inbox; ?></h6>
												<span class="text-muted text-size-small">Inbox Message </span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="content-group">
												<h6 class="text-semibold no-margin"><i class="icon-comments position-left text-slate"></i> <br> <?php $total =  $num_inbox + $num_contact;
													echo $total;
												?></h6>
												<span class="text-muted text-size-small">All Message</span>
											</div>
										</div>
									</div>
								</div>
								<!-- /numbers -->


								<!-- Area chart -->
								<div id="messages-stats"></div>
								<!-- /area chart -->


								<!-- Tabs -->
			                	<ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
									<li class="active">
										<a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab">
											Tuesday
										</a>
									</li>

									<li>
										<a href="#messages-mon" class="text-size-small text-uppercase" data-toggle="tab">
											Monday
										</a>
									</li>

									
								</ul>
								<!-- /tabs -->


								<!-- Tabs content -->
								<div class="tab-content">
									<div class="tab-pane active fade in has-padding" id="messages-tue">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
													<span class="badge bg-danger-400 media-badge">8</span>
												</div>

												<div class="media-body">
													<a href="#">
														James Alexander
														<span class="media-annotation pull-right">14:58</span>
													</a>

													<span class="display-block text-muted">The constitutionally inventoried precariously...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
													<span class="badge bg-danger-400 media-badge">6</span>
												</div>

												<div class="media-body">
													<a href="#">
														Margo Baker
														<span class="media-annotation pull-right">12:16</span>
													</a>

													<span class="display-block text-muted">Pinched a well more moral chose goodness...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Jeremy Victorino
														<span class="media-annotation pull-right">09:48</span>
													</a>

													<span class="display-block text-muted">Pert thickly mischievous clung frowned well...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Beatrix Diaz
														<span class="media-annotation pull-right">05:54</span>
													</a>

													<span class="display-block text-muted">Nightingale taped hello bucolic fussily cardinal...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Richard Vango
														<span class="media-annotation pull-right">01:43</span>
													</a>
													
													<span class="display-block text-muted">Amidst roadrunner distantly pompously where...</span>
												</div>
											</li>
										</ul>
									</div>

									<div class="tab-pane fade has-padding" id="messages-mon">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Isak Temes
														<span class="media-annotation pull-right">Tue, 19:58</span>
													</a>

													<span class="display-block text-muted">Reasonable palpably rankly expressly grimy...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Vittorio Cosgrove
														<span class="media-annotation pull-right">Tue, 16:35</span>
													</a>

													<span class="display-block text-muted">Arguably therefore more unexplainable fumed...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Hilary Talaugon
														<span class="media-annotation pull-right">Tue, 12:16</span>
													</a>

													<span class="display-block text-muted">Nicely unlike porpoise a kookaburra past more...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Bobbie Seber
														<span class="media-annotation pull-right">Tue, 09:20</span>
													</a>

													<span class="display-block text-muted">Before visual vigilantly fortuitous tortoise...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Walther Laws
														<span class="media-annotation pull-right">Tue, 03:29</span>
													</a>
													
													<span class="display-block text-muted">Far affecting more leered unerringly dishonest...</span>
												</div>
											</li>
										</ul>
									</div>

									<div class="tab-pane fade has-padding" id="messages-fri">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Owen Stretch
														<span class="media-annotation pull-right">Mon, 18:12</span>
													</a>

													<span class="display-block text-muted">Tardy rattlesnake seal raptly earthworm...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Jenilee Mcnair
														<span class="media-annotation pull-right">Mon, 14:03</span>
													</a>

													<span class="display-block text-muted">Since hello dear pushed amid darn trite...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Alaster Jain
														<span class="media-annotation pull-right">Mon, 13:59</span>
													</a>

													<span class="display-block text-muted">Dachshund cardinal dear next jeepers well...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Sigfrid Thisted
														<span class="media-annotation pull-right">Mon, 09:26</span>
													</a>

													<span class="display-block text-muted">Lighted wolf yikes less lemur crud grunted...</span>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
												</div>

												<div class="media-body">
													<a href="#">
														Sherilyn Mckee
														<span class="media-annotation pull-right">Mon, 06:38</span>
													</a>
													
													<span class="display-block text-muted">Less unicorn a however careless husky...</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /tabs content -->

							</div>
							<!-- /my messages -->


							
						</div>
					</div>
					<!-- /dashboard content -->

					<!-- modal for details -->
					<div id="modal_form_inline_detail" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content text-center">
								<div class="modal-header bg-primary">
									<h5 class="modal-title">Inline form</h5>
								</div>

									
									<div class="modal-body">
										

									</div>
									<?php echo form_close(); ?>
									<!--<div class="modal-footer text-center">
										<button type="submit" class="btn btn-primary">Sign me in <i class="icon-plus22"></i></button>
									</div>-->
								
							</div>
						</div>
					</div>
					<!--/ modal for details  -->

					<!-- modal for enable -->
					<div id="modal_form_inline_enable" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content text-center">
								<div class="modal-header bg-info">
									<h5 class="modal-title">Inline form</h5>
								</div>

									<?php echo validation_errors(); ?>
									<?php echo form_open('admin/login'); ?>
									<?php if ($this->session->flashdata('login_failed')) : ?>
									<?php echo '<p class="alert alert-danger" role="alert" style="background-color:#B01030; border:none; color:#fff;">'.$this->session->flashdata('login_failed').'</p>'; ?>
									<?php endif; ?>
									<div class="modal-body">
										<div class="form-group has-feedback">
											<input type="text" placeholder="Your Email" class="form-control"  name="email" value="<?php if (($posts['fname']) != ($post['fname'])) {echo $posts['fname'];} else {  } ?>">
										</div>

										<div class="form-group has-feedback">
											<input type="text" placeholder="Your Password" class="form-control"  name="email" value="<?php if (($posts['fname']) != ($post['fname'])) {echo $posts['email'];} else {  } ?>">
										</div>
										<div class="form-group has-feedback">
											<input type="text" placeholder="Your Password" class="form-control"  name="email" value="<?php if (($posts['fname']) != ($post['fname'])) {echo $posts['status'];} else {  } ?>">
										</div>

										<h6 class="text-semibold">Text in a modal</h6>
										<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

										<hr>


									</div>
									<?php echo form_close(); ?>
									<!--<div class="modal-footer text-center">
										<button type="submit" class="btn btn-primary">Sign me in <i class="icon-plus22"></i></button>
									</div>-->
								
							</div>
						</div>
					</div>
					<!--/ modal for enable  -->


					<!-- modal for disable -->
					<div id="modal_form_inline_disable" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content text-center">
								<div class="modal-header bg-danger">
									<h5 class="modal-title">Inline form</h5>
								</div>

									<?php echo validation_errors(); ?>
									<?php echo form_open('admin/login'); ?>
									<?php if ($this->session->flashdata('login_failed')) : ?>
									<?php echo '<p class="alert alert-danger" role="alert" style="background-color:#B01030; border:none; color:#fff;">'.$this->session->flashdata('login_failed').'</p>'; ?>
									<?php endif; ?>
									<div class="modal-body">
										<div class="form-group has-feedback">
											<input type="text" placeholder="Your Email" class="form-control"  name="email" value="<?php echo $user['fname']; ?>">
										</div>

										<div class="form-group has-feedback">
											<input type="text" placeholder="Your Password" class="form-control"  name="email" value="<?php echo $user['email']; ?>">
										</div>
										<div class="form-group has-feedback">
											<input type="text" placeholder="Your Password" class="form-control"  name="email" value="<?php echo $user['status']; ?>">
										</div>
									</div>
									<?php echo form_close(); ?>
									<!--<div class="modal-footer text-center">
										<button type="submit" class="btn btn-primary">Sign me in <i class="icon-plus22"></i></button>
									</div>-->
								
							</div>
						</div>
					</div>
					<!--/ modal for diable  -->