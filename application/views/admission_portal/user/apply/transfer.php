<div class="apply_form">
	<div class="container-fluid">
			<h2><?=$title;?></h2>
			<link href="<?php echo base_url(); ?>css/j-forms.css" rel="stylesheet">
			<form class="testform" id="testform" method="post">
				<fieldset class="personal-data w3_agileits_field">
					<h2>Personal Data</h2>
					<span class="w3l_personal apply_input_2">
						<h4>Name</h4>
						<!--<label class="agileits_label" for="name">Full Name:</label>-->
						<div class="row">
							<div class="col-md-4">
								<input type="text" id="sname" name="sname" placeholder="Surname" /><i class="required"></i>
							</div>
							<div class="col-md-4">
								<input type="text" id="fname" name="fname" placeholder="First Name" />
							</div>
							<div class="col-md-4">
								<input type="text" id="mname" name="mname" placeholder="Middle Name" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="pname" name="pname" placeholder="Preferred Name" />
							</div>					
							<div class="col-md-6">
								<input type="text" id="name" name="name" placeholder="Maiden Name (Optional)" />
							</div>
						</div>
					</span>
					<span class="w3ls_personal apply_input_3 contact-forms">
						<h4>Date of Birth</h4>
					<div class="row">
						<div class="col-md-4">
							<input type="text" id="fname" name="birth-day" placeholder="First Name" />
						</div>
						<div class="col-md-4">
							<label class="input select">
								<select name="country">
									<option value="none" selected="" disabled="">Select Month</option>
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>
								</select>
								<i></i>
							</label>
						</div>
						<div class="col-md-4">
							<label class="input select">
								<select name="country">
									<option value="none" selected="" disabled="">Select Year</option>
									
									<option value="1970">1970</option>
									<option value="1971">1971</option>
									<option value="1972">1972</option>
									<option value="1973">1973</option>
									<option value="1974">1974</option>
									<option value="1975">1975</option>
									<option value="1976">1976</option>
									<option value="1977">1977</option>
									<option value="1978">1978</option>
									<option value="1979">1979</option>
									<option value="1980">1980</option>
									<option value="1981">1981</option>
									<option value="1982">1982</option>
									<option value="1983">1983</option>
									<option value="1984">1984</option>
									<option value="1985">1985</option>
									<option value="1986">1986</option>
									<option value="1987">1987</option>
									<option value="1988">1988</option>
									<option value="1989">1989</option>
									<option value="1990">1990</option>
									<option value="1991">1991</option>
									<option value="1992">1992</option>
									<option value="1993">1993</option>
									<option value="1994">1994</option>
									<option value="1995">1995</option>
									<option value="1996">1996</option>
									<option value="1997">1997</option>
									<option value="1998">1998</option>
									<option value="1999">1999</option>
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>
									<option value="2004">2004</option>
									<option value="2005">2005</option>
									<option value="2006">2006</option>
									<option value="2007">2007</option>
									<option value="2008">2008</option>
									<option value="2009">2009</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2014">2014</option>
									<option value="2015">2015</option>
								</select>
								<i></i>
							</label>
						</div>
					</div>
					<!-- end country -->
					</span>
					<span class="w3l_personal apply_input_4 contact-forms">
						<h4>Gender</h4>
						<div class="row">
							<div class="col-md-6">
								<label class="">
								  <input type="radio" name="gender" >
								  Male
								</label>
								<label>
								  <input type="radio" name="gender" >
								  Female
								</label>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
					</span>
					<span class="w3l_personal apply_input_2 contact-forms">
						<h4>Contact Informations</h4>
						<!--<label class="agileits_label" for="name">Full Name:</label>-->
						<div class="row">
							<div class="col-md-4">
								<input type="text" id="phoneno" name="phoneno" placeholder="Phone Number" /><i class="required"></i>
							</div>
							<div class="col-md-4">
								<label class="input select">
									<select name="resident">
										<option value="none" selected="" disabled="">Select Residence</option>
										<option value="Benin Resident">Benin Resident</option>
										<option value="Nigeria">Non Resident</option>
									</select>
									<i></i>
								</label>
							</div>
							<div class="col-md-4">
								<label class="input select">
									<select name="country" id="country">
										<option value="none" selected="" disabled="">Select Country</option>
										<option value="Benin Republic">Benin Republic</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Ghana">Ghana</option>
										<option value="others">Other Countries</option>
									</select>
									<i></i>
								</label>
							</div>
						</div>
								<input type="text" id="name" name="address" placeholder="Home or Permanent Residence Address" />
					</span>
					<span class="w3l_personal apply_input_5 contact-forms">
						<h4>Major & Option</h4>
						<div class="row">
							<div class="container-fluid">
								<label class="input select">
									<select name="country">
										<option value="none" selected="" disabled="">Select Major & Option</option>
										<option value="Ghana">Accounting</option>
										<option value="Ghana">Animal Production</option>
										<option value="Ghana">Banking & Finance</option>
										<option value="Ghana">Business Administration</option>
										<option value="Benin Republic">Computer Science</option>
										<option value="Nigeria">Computer Engineering</option>
										<option value="Ghana">Economics</option>
										<option value="Ghana">English</option>
										<option value="Ghana">Geography</option>
										<option value="Ghana">History</option>
										<option value="Ghana">International Relations</option>
										<option value="Ghana">Law</option>
										<option value="others">Management Information System</option>
										<option value="Ghana">Mass Communication</option>
									</select>
									<i></i>
								</label>
							</div>
						</div>
					</span>
				</fieldset>
				<fieldset class="address-data-inputs w3_agileits_field agileinfo_field">
					<h2>Educational Information</h2>
					<span class="wthree_personal apply_input_2">
						<h4>High School</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="schname" name="schname" placeholder="School's Name " />
							</div>					
							<div class="col-md-6">
								<input type="text" id="schaddress" name="schaddress" placeholder="School's Address" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="dateattend" name="dateattend" placeholder="Date Attended" />
							</div>
							<div class="col-md-6">
								<input type="text" id="dategrad" name="dategrad" placeholder="Date of Graduation" />
							</div>
						</div>
						<!--<div class="row">
							<label class="input append-small-btn">
								<div class="upload-btn">
									Browse
									<input type="file" name="file1" onchange="document.getElementById('file1_input').value = this.value;" placeholder="Add your Qualification">
								</div>
								<input type="text" id="file1_input" readonly="" placeholder="Add your CV">
								<span class="hint">Only: pdf / doc Size: lessthan 1 Mb</span>
							</label>
						</div>-->
					</span>
					<span class="wthree_personal apply_input_2">
						<h4>Preparatory School</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="schname" name="schname" placeholder="School's Name " />
							</div>					
							<div class="col-md-6">
								<input type="text" id="schaddress" name="schaddress" placeholder="School's Address" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="dateattend" name="dateattend" placeholder="Date Attended" />
							</div>
							<div class="col-md-6">
								<input type="text" id="dategrad" name="dategrad" placeholder="Date of Graduation" />
							</div>
						</div>
					</span>
					<span class="wthree_personal apply_input_2">
						<h4>College or Universities Attended/Attending</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="schname" name="schname" placeholder="School's Name " />
							</div>					
							<div class="col-md-6">
								<input type="text" id="schaddress" name="schaddress" placeholder="School's Address" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="dateattend" name="dateattend" placeholder="Date Attended" />
							</div>
							<div class="col-md-6">
								<input type="text" id="dategrad" name="dategrad" placeholder="Date of Graduation" />
							</div>
						</div>
					</span>
					<span class="wthree_personal apply_input_5 contact-forms">
						<h4>Certificate</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="dategrad" name="dategrad" placeholder="Please list Your certificate" />
							</div>
							<div class="col-md-6">
								<label class="input select">
									<select name="date" id="date">
										<option value="none" selected="" disabled="">Date Taken</option>
										<option value="1997">1997</option>
										<option value="1998">1998</option>
										<option value="1999">1999</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
									</select>
									<i></i>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="dategrad" name="dategrad" placeholder="Please list Your certificate" />
							</div>
							<div class="col-md-6">
								<label class="input select">
									<select name="country" id="country">
										<option value="none" selected="" disabled="">Date Taken</option>
										<option value="1997">1997</option>
										<option value="1998">1998</option>
										<option value="1999">1999</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>	
									</select>
									<i></i>
								</label>
							</div>
						</div>
					</span>	
				</fieldset>
				<fieldset class="address-data-inputs w3_agileits_field agileinfo_field">
					<h2>Family Information</h2>
					<span class="wthree_personal apply_input_2">
						<h4>Parents/Guardian Details</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="parent1" name="parent1" placeholder="Father's Name " />
							</div>					
							<div class="col-md-6">
								<input type="text" id="parent2" name="parent2" placeholder="Mother's Name" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="parent1" name="parent1" placeholder="Father's Occupation " />
							</div>					
							<div class="col-md-6">
								<input type="text" id="parent2" name="parent2" placeholder="Mother's Occupation" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="parent1" name="parent1" placeholder="Father's Telephone " />
							</div>					
							<div class="col-md-6">
								<input type="text" id="parent2" name="parent2" placeholder="Mother's Telephone" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="pemail" name="pemail" placeholder="Father's Email Address " />
							</div>					
							<div class="col-md-6">
								<input type="text" id="pemail2" name="pemail2" placeholder="Mother's Email Address " />
							</div>
						</div>
					</span>
					<span class="wthree_personal apply_input_2 contact-forms">
						<h4>Fill if Appropriate</h4>
						<div class="row">
							<div class="col-md-3">
								<label class="input select">
									<select name="resident">
										<option value="none" selected="" disabled="">Select Parents Status</option>
										<option value="Benin Resident">Parents Divorced</option>
										<option value="Nigeria">Parents Separated</option>
										<option value="Nigeria">Father Deceased</option>
										<option value="Nigeria">Mother Separated</option>
									</select>
									<i></i>
								</label>
							</div>
							<div class="col-md-9">
								<input type="text" id="dategrad" name="dategrad" placeholder="Date of Graduation" />
							</div>
						</div>
					</span>
					<span class="wthree_personal apply_input_2 contact-forms">
						<h4>Siblings Information</h4>
						<div class="row">
							<div class="col-md-3">
								<input type="text" id="siname" name="siname" placeholder="Sibling's Name" />
							</div>
							<div class="col-md-3">
								<input type="text" id="siage" name="siage" placeholder="Sibling's  age" />
							</div>
							<div class="col-md-3">
								<input type="text" id="sicollege" name="sicollege" placeholder="School/College attended" />
							</div>
							<div class="col-md-3">
								<input type="text" id="ygrad" name="ygrad" placeholder="Year of Graduation" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<input type="text" id="siname" name="siname" placeholder="Sibling's Name" />
							</div>
							<div class="col-md-3">
								<input type="text" id="siage" name="siage" placeholder="Sibling's  age" />
							</div>
							<div class="col-md-3">
								<input type="text" id="sicollege" name="sicollege" placeholder="School/College attended" />
							</div>
							<div class="col-md-3">
								<input type="text" id="ygrad" name="ygrad" placeholder="Year of Graduation" />
							</div>
						</div>
					</span>
					<span class="wthree_personal apply_input_2 contact-forms">
						<h4>Relatives that attended HNAUB</h4>
						<div class="row">
							<div class="col-md-4">
								<input type="text" id="rename" name="rename" placeholder="Relative's Name" />
							</div>
							<div class="col-md-4">
								<input type="text" id="redate" name="redate" placeholder="Dates of Attendance" />
							</div>
							<div class="col-md-4">
								<input type="text" id="relation" name="relation" placeholder="School/College attended" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<input type="text" id="rename" name="rename" placeholder="Relative's Name" />
							</div>
							<div class="col-md-4">
								<input type="text" id="redate" name="redate" placeholder="Dates of Attendance" />
							</div>
							<div class="col-md-4">
								<input type="text" id="relation" name="relation" placeholder="School/College attended" />
							</div>
						</div>
					</span>
					<span class="wthree_personal apply_input_2 contact-forms">
						<h4>Language Spoken at Home</h4>
								<input type="text" id="lang" name="lang" placeholder="Language Spoken at Home" />
					</span>
					
				</fieldset>
				<!-- fieldset for other information -->
				<fieldset class="address-data-inputs w3_agileits_field agileinfo_field">
					<h2>Other Information</h2>
					<span class="wthree_personal apply_input_2">
						<h4>Country</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" id="cocitizen" name="cocitizen" placeholder="Country of Citizenship" />
							</div>					
							<div class="col-md-6">
								<input type="text" id="cobirth" name="schaddress" placeholder="Country of Birth" />
							</div>
						</div>
					</span>
					<span class="w3l_personal apply_input_4 contact-forms">
						<h4>Do you have a permanent Benin Resident Alien Status?</h4>
						<div class="row">
							<div class="col-md-6">
								<label class="">
								  <input type="checkbox" name="gender" >
								  Yes	
								</label>
								<label>
								  <input type="checkbox" name="gender" >
								  No
								</label>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
					</span>
					<span class="w3l_personal apply_input_4 contact-forms">
						<h4>Do you have your Country National ID or Passport?</h4>
						<div class="row">
							<div class="col-md-6">
								<label class="">
								  <input type="checkbox" name="gender" >
								  Yes	
								</label>
								<label>
								  <input type="checkbox" name="gender" >
								  No
								</label>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
					</span>
					<span class="w3l_personal apply_input_4 contact-forms">
						<h4>Have you ever been suspended or expelled from School?</h4>
						<div class="row">
							<div class="col-md-6">
								<label class="">
								  <input type="radio" name="gender" >
								  Yes	
								</label>
								<label>
								  <input type="radio" name="gender" >
								  No
								</label>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
					</span>
					<span class="w3l_personal apply_input_4 contact-forms">
						<h4>Have you ever been arrested for crime or drug?</h4>
						<div class="row">
							<div class="col-md-6">
								<label class="">
								  <input type="radio" name="drug" value="Yes">
								  Yes	
								</label>
								<label>
								  <input type="radio" name="drug" value="No">
								  No
								</label>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
					</span>
				</fieldset>
			</form>				
	</div>
</div>
		<script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/simpleform.min.js"></script>
		<script type="text/javascript">
			$("#testform").simpleform({
				speed : 500,
				transition : 'fade',
				progressBar : true,
				showProgressText : true,
				validate: true
			});

			function validateForm(formID, Obj){

				switch(formID){
					case 'testform' :
						Obj.validate({
							rules: {
								email: {
									required: true,
									email: true
								},
								sname: {
									required: true
								},
								fname: {
									required: true
								},
								pname: {
									required: true
								},
								mname: {
									required: true
								},
								street: {
									required: true
								}
							},
							messages: {
								email: {
									required: "Please enter an email address",
									email: "Not a valid email address"
								},
								sname: {
									required: "Please enter your Surname"
								},
								fname: {
									required: "Please enter your First name"
								},
								pname: {
									required: "Please enter your Preferred name"
								},
								mname: {
									required: "Please enter your Middle name"
								},
								street: {
									required: "Please enter street name"
								}
							}
						});
					return Obj.valid();
					break;
				}
			}
			</script>