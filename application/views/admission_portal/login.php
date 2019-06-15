	<!--main-->
    <div class="main effect2">
		<div class="login-text">
		 <h3>HNAUB ONLINE ADMISSION PORTAL</h3>
		  <p>Getting admission to HNAUB as be made easier, faster and convinent. The start to your great future is just a click away</p>
		  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
		  <!--<div class="text-bottom">
		   <h3>Follows on :</h3>
			<ul class="f-icons">
				<li><a href="#"><span class="fa fa-facebook"></span> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>
			<div class="clearfix"></div>
            </div>-->
		</div>
			<div class="login-form">
			  <div class="login-inner">
			        <h2>ADMISSION PORTAL</h2>
					<p>Login to apply to the University Undergraduate and Graduate programmes</p>
					<?php echo validation_errors(); ?>
					<?php echo form_open('admission_portal/login'); ?>
					<?php if ($this->session->flashdata('login_failed')) : ?>
					<?php echo '<p class="alert alert-danger" role="alert" style="background-color:#B01030; border:none; color:#fff;">'.$this->session->flashdata('login_failed').'</p>'; ?>
					<?php endif; ?>
					<form action="admission_portal/login">
					<?php if ($this->session->flashdata('user_loggedout')) : ?>
					<?php echo '<p class="alert alert-info" role="alert" style="background-color:#80DFFF; border:none; color:#fff;">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
					<?php endif; ?>
					
						<input type="email" class="text" placeholder="E-mail address" name="email">
				        <input type="password" placeholder="Password" name="password">
						<div class="submit"><input type="submit" value="Log In Now" ></div>
						<div class="clearfix"></div>
						<div class="sign-in">
							<p class="sign-in">Don't have an account? &nbsp;<a href="<?php echo base_url(); ?>admission_portal	" style="font-size:14px;">Sign Up</a></p>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
             </div>
		<div class="clearfix"></div>
	</div>
	