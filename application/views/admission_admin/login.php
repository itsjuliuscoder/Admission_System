

<body class="login-container">

	<!-- Main navbar -->
	<!--<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>-->
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
					<?php echo validation_errors(); ?>
					<?php echo form_open('admission_admin'); ?>
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="text-slate-300"><img src="<?php echo base_url(); ?>/assets/images/logo.png"></div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
							</div>
							<?php if ($this->session->flashdata('login_failed')) : ?>
							<?php echo '<p class="alert alert-danger" role="alert" style="background-color:#B01030; border:none; font-size:11px; text-align:center; color:#fff;">'.$this->session->flashdata('login_failed').'</p>'; ?>
							<?php endif; ?>
							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Email Address" name="email">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" name="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-pink-400 btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="<?php echo base_url(); ?>admission_admin/recovery_password">Forgot password?</a>
							</div>
						</div>
					<?php echo form_close(); ?>
					<!-- /simple login form -->


					