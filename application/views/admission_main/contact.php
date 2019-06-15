<body style="background-color:#fff;">
<!--navigation-->
<div class="top-nav">
	<nav>
		<div class="container">
			<div class="navbar-header logo">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a href="../../index.php"><img src="<?php echo base_url(); ?>/images/ok.png"></a></h1>
			</div>
			<!--nav links -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-right">
					<li><a href="<?php echo base_url(); ?>" class="link-nav"><span data-letters="About">About</span></a></li>
					<li><a href="<?php echo base_url(); ?>undergraduate" class="link-nav"><span data-letters="Undergraudate">Undergraduate</span></a></li>	
					<li><a href="<?php echo base_url(); ?>transfer" class="link-nav"><span data-letters="Transfer">Transfer</span></a></li>
					<li><a href="<?php echo base_url(); ?>contact" class="link-nav active scroll"><span data-letters="Contact">Contact</span></a></li>		
				</ul>		
				<div class="clearfix"> </div>
			</div>
		</div>
	</nav>
</div>	
<!--//navigation-->

	<script src="<?php echo base_url(); ?>js/nav2.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script> 
     <script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

 <div class="contact-heading text-center">
	<div class="container zoomIn animated">	
		<h1 class="page-title">Contact Us<span class="title-under"></span></h1>
			<p class="page-description">
				
			</p>		
	</div>
</div>
<!--undergraduate start here-->

<div class="contact-hnaub">
	<div class="con_insider">
		<div class="container">
			<div class="col-md-8 contact-former">
				<h3>Send a Message</h3>
				<p>Kindly drop your message, we want to hear from you.</p>
				<?php //echo validation_errors(); ?>
				<?php //echo '<p class="alert alert-info" role="alert" style="background-color:#80DFFF; border:none; color:#fff;">'.validation_errors().'</p>'; ?>
				<?php echo form_open('contact'); ?>
					<p><input type="text" name="fname" placeholder="Full Name Please.." required ></p>
					<p><input type="email" name="email" placeholder="Email Address Please.." required></p>
					<p><input type="text" name="phone" placeholder="Phone Number Please..." required></p>
					<p><textarea name="message" placeholder="Drop Message Please..." required></textarea></p>
					<p><input type="submit" name="send" value="Send Message"> <input type="reset" value="Clear" ></p>
				<?php echo form_close(); ?>
				<!-- contact form goes here -->
			</div>
			<div class="col-md-4">
				<!-- contact info goes here -->
				<h3>Contact Information</h3>
				<p>Pay a visit to HNAUB, shoot us an email or give us a call, we will be at hand to respond to all your questions</p>
				<div class="row">
					<div class="icn_address">
						<div class="icn_bg_1">
							<span><i class="fa fa-map-marker"></i></span>
						</div>
						<div class="icn_text">
								<h4>Visit Us</h4>
						<p>Pk 10 - Route de Porto- Novo (Akpakpa / Republique du Benin)</p>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="icn_address">
						<div class="icn_bg_2">
							<span><i class="fa fa-envelope"></i></span>
						</div>
						<div class="icn_text">
							<h4>Send an Email</h4>
							<p>hnaub_admission@gmail.com</p>
						</div>
						
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="icn_address">
						<div class="icn_bg_3">
							<span><i class="fa fa-phone-square"></i></span>
						</div>
						<div class="icn_text">
							<h4>Give us a Call</h4>
						<p>(+229) 97341089 / 21338106</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<!--<div class="container">		
		<div class="main row">
			<div class="col-md-3 images_1_of_4 text-center animated wow fadeInLeft" data-delay="5000ms">
				<span class="bg"><i class="fa fa-globe"></i></span>
				<h4><a href="#">Bilingual System</a></h4>
				<p class="para">An English and French System, where priority is given to the English Language. We also make it a compulsion for all students to use these two Languages.</p>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center animated wow fadeInLeft" data-delay="5000ms">
				<span class="bg"><i class="fa fa-laptop"></i></span>
				<h4><a href="#">E-learning Platform</a></h4>
				<p class="para">Our educational system is built with and user-friendly e-learning platform to make available the tools to empower our students.</p>
			</div>
			<div class="col-md-3 images_1_of_4 bg1 text-center animated wow fadeInRight" data-delay="5000ms">
				<span class="bg"><i class="fa fa-users"></i></span>
				<h4><a href="#">Equipped Staffs</a></h4>
				<p class="para">We have a streamline of dedicated staff who are ready to help you achieve your dream.</p>
			</div>		
			<div class="col-md-3 images_1_of_4 bg1 text-center animated wow fadeInRight" data-delay="5000ms">
				<span class="bg"><i class="fa fa-shield"></i> </span>
				<h4><a href="#">Conducive Envirnoment</a></h4>
				<p class="para">Environment is paramount for the development of any student, we have a well structured and conducive environment to let our students learn in harmony.</p>
			</div>	
		</div>
	</div><hr>-->
	<div class="apply animated wow lightSpeedIn" data-wow-delay="1000ms">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h1>Apply through HNAUB Online</h1>
				</div>
				<div class="col-md-5 link">
					<a href="<?php echo base_url(); ?>admission_portal">Apply Online</a>
				</div>
			</div>
		</div>
	</div>
	<div class="tool2">
		<a class="tooltips2" href="#">
		<span></span></a>
	</div>
	<div class="clearfix"></div>
		<!--<div class="tabs">
			<div class="container">
				<h1 class="page-title">Undergraduate Studies<span class="title-under"></span></h1>
				<div class="panel-group col-md-8" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <i class="fa fa-bookmark-o icon_3"></i>SCHOOLS & FACULTIES
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                        <div class="panel-body">
							<ol>
								<li>SCHOOL OF ACCOUNTING, HUMAN RESOURCE AND MARKETING</li>
								<li>REV. (DR.) LEON SUVLLIAN SCHOOL OF BUSINESS ADMINISTRATION AND MANAGEMENT</li>
								<li>SCHOOL OF ECONOMICS</li>
								<li>Pdt KWAME NKRUMA SCHOOL OF INTERNATIONAL RELATIONS, POLITICAL SCIENCE AND PUBLIC ADMINISTRATION</li>
								<li>SCHOOL OF COMPUTER SCIENCE, MATHEMATICS, AND INFORMATION TECHNOLOGY</li>
								<li>Pdt ANDRE KOLINGBA INSTITUTE OF LANGUAGES AND SCHOOL OF TRANSLATORS</li>
								<li>SIR KESINGTON ADEBUKOLA ADEBUTU FACULTY OF LAW</li>
								<li>FACULTY OF LIBERAL ARTS</li>
								<li>KOKPON SCHOOL OF AGRICULTURE AND ANIMAL SCIENCE</li>
							</ol>                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-pencil-square-o icon_3"></i> ADMISSION REQUIREMENTS
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
								<ol>
									<li>A minimum of five credits in WAEC/GCE O'Level/NECO, obtained at not more than two sittings, and must include English Language amd Mathematics and other subjects relevant to choice of study.</li>
									<li>A completed/signed Application form, obtained from the university with a fee of 15,000CFA</li>
									<li>An official secondary school Testimonial Certificate</li>
									<li>The original copy/internet printout copy of the result (WAEC/GCE O'Level/NECO) with scratch card </li>
									<li>Six (6) Colour recent passport photographs </li>
									<li>International Passport/ECOWAS Report</li>
									<li>Medical Certificate/Health Report</li>
								</ol>                            
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-calendar-o icon_3"></i> ADMISSION DEADLINE
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
							<p>The application and all supporting credentials must be the following dates:</p>
      						  <ol>
      						  		<li>Fall Semester <b>October</b></li>
      						  		<li>Spring Semester <b>March</b></li>
      						  		<li>Summer Session <b>August</b></li>
      						  </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-globe icon_3"></i> ONLINE ADMISSION PROCESS
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                   			 <ol>
                   			 	<li>Sign Up to the Admission Portal</li>
                   			 	<li>Login with your Username and Password</li>
                   			 	<li>After Logging-in, select either the undergraduate, transfer and graduate admission form</li>
                   			 	<li>Submit and Print Online Form</li>
                   			 	<li>Bring the Printed Online Form the HNAUB Admission Office in Cotonou Benin Republic</li>
                   			 </ol>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-info icon_3"></i>IMPORTANT INFORMATION
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
            				  
      						  <p>No Payment of any kind nor financial transaction is allowed outside the bursary department of the University in Cotonou</p>
                            <p>Admission Form is only purchased at the University's Admission Office.</p>
                            <p>Candidates applying after deadlines may receive only as vacancies occur.</p>
                            <p>The University may restrict admission to any program area when the capacity established for that program has been reached</p>
                        	<p>All applicants must come with the printed copy of their online admission form, with 15,000 CFA to the Admission Office of the University</p>

                        </div>
                    </div>
                </div>
              </div>
					<div class="what_say col-md-4">
						
						<div class="container-fluid">
							<h3>What our Students Say</h3>
							<div class="what_say_details">
								<img src="<?php //echo base_url(); ?>images/admission/not.jpg" class="img-responsive pull-right">
								<p>HNAUB has made me realised the important of learning another world language; French. Its a great challenge for me, learning a new language from scratch.</p>
							</div>
							<div class="sayer pull-right">
								<b>-Adele Adedamola</b>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
	</div>-->
	<div class="top_footer"></div>
</div><hr>
<div class="clearfix"></div>

<div class="container">
	<div class="ad_info">
		<div class="admit_info col-md-4">
			<h2>WHY CHOOSE HNAUB?</h2>
			<p>The educational sector in the development process of our African States remains the essential leverage for strong growth in a competitive global economy. Houdegbe North American University Benin, the first private university of Benin Republic, dynamic in the sub-region, would like to 
				accompany the African states in their legitimate and increasing needs for the training of competent executive, management and professional personnel. Young and dynamic leaders in quest of innovation and the mastery of modern technological tools. </p>
			<div class="social col-md-4">
				<ul>
					<li><a href="#"><i class="facebok"> </i></a></li>
					<li><a href="#"><i class="twiter"> </i></a></li>
					<li><a href="#"><i class="inst"> </i></a></li>
					<li><a href="#"><i class="goog"> </i></a></li>
						<div class="clearfix"></div>	
				</ul>
			</div>
		</div>
		<div class="admit_img col-md-8">
			<h4>CHOOSE RIGHT, CHOOSE HNAUB.</h4>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="top_footer"><hr></div>


