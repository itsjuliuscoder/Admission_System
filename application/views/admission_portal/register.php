	<!--main-->
    <div class="main effect2">
		<div class="login-text">
		 <h3>HNAUB ONLINE ADMISSION PORTAL</h3>
		  <p>Getting admission to HNAUB as be made easier, faster and convinent. The start to your great future is just a click away</p>
		  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
		  <div class="text-bottom">
		   <!--<h3>Follows on :</h3>
			<ul class="f-icons">
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>-->
			<div class="clearfix"></div>
            </div>
		</div>
			<div class="login-form">
			  <div class="login-inner">
			        <h2>ADMISSION PORTAL</h2>
					<!--<p>Login to apply to the University Undergraduate and Graduate programmes</p>-->
					<?php echo validation_errors(); ?>
					<?php echo form_open('admission_portal'); ?>
						<?php if ($this->session->flashdata('user_registered')) : ?>
						<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
						<?php endif; ?>
						<input type="text" class="text" placeholder="First Name" name="fname">
						<input type="text" class="text" placeholder="Last Name" name="lname">
						<input type="email" class="text" placeholder="E-mail address" name="email">
				        <input type="password" placeholder="Password" name="password">
				        <input type="password" placeholder="Re-type Password" name="password2">
						<div class="submit"><input type="submit" value="Register Now" ></div>
						<div class="clearfix"></div>
						<div class="sign-in">
							<p class="sign-in">Already a user? &nbsp;<a href="<?php echo base_url(); ?>admission_portal/login" style="font-size:14px;"> Log In</a></p>
							<div class="clearfix"></div>
						</div>
					<?php echo form_close(); ?>
				</div>
             </div>
		<div class="clearfix"></div>
	</div>