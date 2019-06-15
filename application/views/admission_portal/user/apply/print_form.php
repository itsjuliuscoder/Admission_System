<body>
	<div class="page-container ">
		<table class="datatable-button-print-basic datatables">
			<th>
				<td>Hello</td>
			</th>
		</table>
		<div class="page-content">
			<div class="content-wrapper">
				<div class="content">
					<div class="panel panel-white">
						<div class="panel-heading">
							<div class="row">
								<span class="row">
									<span class="col-md-4 col-md-offset-4" style="width:50%!impo; margin:auto;"><img src="<?php echo base_url();?>images/socs.png" width="180" height="150" style=""></span>
								</span>
								
								<span class="row"><h1 class="panel-title text-center"><b>Houdegbe North American University Undergraduate Studies Form</b></h1></span>	
							</div>
							<div class="clearfix"></div>
							
						</div>
						<div class="container">
							<div class="row">
								<h2>Personal Information</h2>
							</div>
							
							<div class="row">
								<div class="col-md-3">
									<label><b>Surname</b></label>
									<h5><?php echo $form['sname']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>First Name</b></label>
									<h5><?php echo $form['fname']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Last Name</b></label>
									<h5><?php echo $form['fname']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Maiden Name(Optional)</b></label>
									<h5><?php echo $form['maiden']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Preferred Name</b></label>
									<h5><?php echo $form['pname']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date of Birth</b></label>
									<h5><?php echo $form['dob']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Gender</b></label>
									<h5><?php echo $form['gender']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Phone</b></label>
									<h5><?php echo $form['phone']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Residence</b></label>
									<h5><?php echo $form['resident']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Country</b></label>
									<h5><?php echo $form['country']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Address</b></label>
									<h5><?php echo $form['address']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Major</b></label>
									<h5><?php echo $form['major']; ?></h5>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="container">
							<div class="row"><h2>Educational Information</h2></div>
							<div class="row">
								<div class="col-md-3">
									<label><b>High School</b></label>
									<h5><?php echo $form['sch_name']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>High School Address</b></label>
									<h5><?php echo $form['sch_address']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Attended</b></label>
									<h5><?php echo $form['date_attend']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Graduated</b></label>
									<h5><?php echo $form['date_grad']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Preparatory School</b></label>
									<h5><?php echo $form['prep_name']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Preparatory School Address</b></label>
									<h5><?php echo $form['prep_address']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Attended</b></label>
									<h5><?php echo $form['prep_date']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Graduated</b></label>
									<h5><?php echo $form['prep_grad']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Certificate 1</b></label>
									<h5><?php echo $form['cert_1']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Preparatory School Address</b></label>
									<h5><?php echo $form['cert_year_1']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Attended</b></label>
									<h5><?php echo $form['cert_2']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Graduated</b></label>
									<h5><?php echo $form['cert_year_2']; ?></h5>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="container">
							<div class="row"><h2>Family Information</h2></div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Father's Name</b></label>
									<h5><?php echo $form['father_name']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Father's Job</b></label>
									<h5><?php echo $form['father_job']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Father's Phone Number</b></label>
									<h5><?php echo $form['father_phone']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Father's Email address</b></label>
									<h5><?php echo $form['father_mail']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Mother's Name</b></label>
									<h5><?php echo $form['mother_name']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Mother's Job</b></label>
									<h5><?php echo $form['mother_job']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Mother's Phone Number</b></label>
									<h5><?php echo $form['mother_phone']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Mother's Email address</b></label>
									<h5><?php echo $form['mother_mail']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>College/School Father Attended</b></label>
									<h5><?php echo $form['father_degree']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Year of Graduation</b></label>
									<h5><?php echo $form['father_degree_year']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Attended</b></label>
									<h5><?php echo $form['mother_degree']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Date Graduated</b></label>
									<h5><?php echo $form['mother_degree_year']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Parents Status</b></label>
									<h5><?php echo $form['parent_status']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Parents Status Details</b></label>
									<h5><?php echo $form['parent_status_details']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Siblings Name</b></label>
									<h5><?php echo $form['siblings_name']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Siblings Age</b></label>
									<h5><?php echo $form['siblings_age']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Siblings College/School Attended</b></label>
									<h5><?php echo $form['sibling_college']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Year of Graduate</b></label>
									<h5><?php echo $form['sibling_college_grad']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Siblings Name</b></label>
									<h5><?php echo $form['siblings_name_2']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Siblings Age</b></label>
									<h5><?php echo $form['siblings_age_2']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Siblings College/School Attended</b></label>
									<h5><?php echo $form['sibling_college_2']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Year of Graduate</b></label>
									<h5><?php echo $form['sibling_college_grad_2']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Relative that attended HNAUB</b></label>
									<h5><?php echo $form['relative_name']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Year Attended</b></label>
									<h5><?php echo $form['date_attend_1']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-3 col-md-3">
									<label><b>Language Spoken at Home</b></label>
									<h5><?php echo $form['lang']; ?></h5>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row"><h2>Other Information</h2></div>
							<div class="row">
								<div class="col-md-3">
									<label><b>Country of Citizenship</b></label>
									<h5><?php echo $form['citizen']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Country of Citizenship</b></label>
									<h5><?php echo $form['country_dob']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Do you have a Benin Resident Alien Status</b></label>
									<h5><?php echo $form['ques_resident']; ?></h5>
								</div>
								<div class="col-md-3">
									<label><b>Do you have your Country National ID or Passport?</b></label>
									<h5><?php echo $form['ques_creditials']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label><b>Have you ever been suspended or expelled from School?</b></label>
									<h5><?php echo $form['expulsion']; ?></h5>
								</div>
								<div class="col-md-6">
									<label><b>Have you ever been arrested for crime or drug?</b></label>
									<h5><?php echo $form['crime']; ?></h5>
								</div>
							</div>
							<div class="row">
								<div class="pull-right" style="margin-bottom:12px;">
									<div class="cacher">
								        <button type="button" class="btn btn-primary" onclick="imprimerp()">Imprimer</button>
								      </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>	
<script type="text/javascript">
	function imprimer(){
		// console.log($('#partenaire').html())
		window.print();
	}
	function imprimerp(){
		// console.log($('#partenaire').html())
		window.print();
	}
</script>