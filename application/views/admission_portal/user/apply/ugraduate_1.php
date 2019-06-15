<body>

	
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Form validation -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Undergraduate Studies Form</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group-lg">This is the Admission form for candidate applying for undergraduate studies. Please fill the form appropriately, after filling the form, print the form and bring it to our Admission Office in Cotonou. HNAUB Admission Office will be contacting your current school to seek for an official transcript before processing your admission. <strong>Thanks for choosing HNAUB, we can't wait to see you</strong> </p>
							<form class="form-horizontal" method="post">
								<input type="hidden" name="user_id" value="<?php echo ($this->session->userdata('id'));?>">
								<fieldset class="content-group">
									<legend class="text-bold">Personal Data</legend>
									<!-- Input with icons -->
									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Applicant Surname<span class="text-danger">*</span></label>
													<input type="text" name="sname" class="form-control"  placeholder="Enter Surname">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Applicant First name<span class="text-danger">*</span></label>
													<input type="text" name="fname" class="form-control"  placeholder="Enter Firstname">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Applicant Last name<span class="text-danger">*</span></label>
													<input type="text" name="lname" class="form-control"  placeholder="Enter Last name">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Preferred Name</span></label>
													<input type="text" name="pname" class="form-control"  placeholder="Enter Preferred Name">
													
												</div>
											</div>
										</div>

									</div>



									<div class="row">
										<div class="col-lg-4">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Maiden Name (Optional)<span class="text-danger">*</span></label>
													<input type="text" name="maiden" class="form-control"  placeholder="Enter Maiden Name">
													
												</div>
											</div>
										</div>
										<div class="col-lg-8">
												<div class="">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="control-label">Date of Birth<span class="text-danger">*</span></label>
												</div>
												<div class="col-lg-12">
													<div class="col-lg-4">
														<div class="form-group has-feedback">	
															<div class="col-lg-12">
																<input type="text" name="dob_no" class="form-control"  placeholder="Day">
															</div>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group">	
															<div class="col-lg-12">
																<select name="month" data-placeholder="Month" class="select">
																	<option></option>
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
															</div>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form-group has-feedback">	
															<div class="col-lg-12">
																<select name="year" data-placeholder="Year" class="select">
																	<option></option>
																	<option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											
										</div>

									</div>

									<div class="row">
										<div class="col-lg-3">
											<label class="control-label">Gender<span class="text-danger">*</span></label>
												<div class="col-lg-12">
													<div class="col-lg-6">
														<div class="form-group has-feedback">	
															<div class="col-md-12">
																<label>
																	<input type="radio" name="gender" value="Male" class="styled">
																	Male
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">	
															<div class="col-md-12">
																<label>
																	<input type="radio" name="gender" value="Female" class="styled" value="female">
																	Female
																</label>
															</div>
														</div>
													</div>
												</div>
											
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Contact Informations [Phone Number] :</label>
													<input type="text" name="phoneno" class="form-control" placeholder="+234-999-999-9999" data-mask="+234-999-999-9999">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Contact Informations [Resident] :</label>
													<select name="resident" data-placeholder="Select Resident" class="select">
														<option></option>
														<option value="1">Benin Resident</option>
														<option value="2">Non Resident</option>
													</select>
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Contact Informations [Country] :</label>
													<select name="country" data-placeholder="Country" class="select">
														<option></option>
														<option value="Benin Republic">Benin Republic</option>
														<option value="Nigeria">Nigeria</option>
														<option value="Ghana">Ghana</option>
														<option value="others">Other Countries</option>
													</select>
													
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Home or Permanent Residence<span class="text-danger">*</span></label>
													<textarea name="address" rows="4" cols="4" placeholder="10, Shofolahan Street, Ijeshatedo, Surulere, Lagos." class="form-control"></textarea>
													
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													
													<label>Select Major & Option:</label>
												<select name="major" data-placeholder="Select Major & Option" class="select">
													<option></option>
													<optgroup label="School of Accounting, Human Resource & Marketing">
														<option value="Accounting">Accounting</option>
														<option value="Human Resource">Human Resource</option>
														<option value="Marketing">Marketing</option>
													</optgroup>

													<optgroup label="REV. (DR.) LEON SUVLLIAN SCHOOL OF BUSINESS ADMINISTRATION AND MANAGEMENT">
														<option value="Business Administration">Business Administration</option>
														<!--<option value="Marketing">Marketing</option>-->
													</optgroup>

													<optgroup label="SCHOOL OF ECONOMICS">
														<option value="Economics">Economics</option>
														<option value="Banking & Finance">Banking & Finance</option>
													</optgroup>

													<optgroup label="Pdt KWAME NKRUMA SCHOOL OF INTERNATIONAL RELATIONS, POLITICAL SCIENCE AND PUBLIC ADMINISTRATION">
														<option value="International Relations">International Relations</option>
														<option value="Public Administration">Public Administration</option>
														<option value="Political Science">Political Science</option>
													</optgroup>

													<optgroup label="SCHOOL OF COMPUTER SCIENCE, MATHEMATICS, AND INFORMATION TECHNOLOGY">
														<option value="Computer Science">Computer Science</option>
														<option value="Computer Engineering">Computer Engineering</option>
														<option value="Management Information Science">Management Information Science</option>
													</optgroup>

													<optgroup label="Pdt ANDRE KOLINGBA INSTITUTE OF LANGUAGES AND SCHOOL OF TRANSLATORS">
														<option value="English">English</option>
														<option value="Translations">Translations</option>
														<option value="Mass Communication">Mass Communication</option>
													</optgroup>

													<optgroup label="KOKPON SCHOOL OF AGRICULTURE AND ANIMAL SCIENCE">
														<option value="Vegetal Production">Vegetal Production</option>
														<option value="Animal Production">Animal Production</option>
														<option value="Fish / Fishing farming">Fish / Fishing farming</option>
														<option value="Nutrition / Food Processing">Nutrition / Food Processing</option>
														<option value="Agri Forest / Management of Natural Resources">Agri Forest / Management of Natural Resources</option>
													</optgroup>

													<optgroup label="SIR KESINGTON ADEBUKOLA ADEBUTU FACULTY OF LAW">
														<option value="Law">Law</option>
													</optgroup>

													<optgroup label="FACULTY OF LIBERAL ARTS">
														<option value="Sociology">Sociology</option>
														<option value="Psychology">Psychology</option>
														<option value="History">History</option>
														<option value="Geography">Geography</option>
														<option value="Philosophy">Philosophy</option>
													</optgroup>
												</select>
												</div>
											</div>
										</div>

									</div>
																	
								</fieldset>


								<fieldset class="content-group">
									<legend class="text-bold">Education Information</legend>
									<!-- Input with icons -->
									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Name of High School: <span class="text-danger">*</span></label>
			                                		<input type="text" name="schname" placeholder="Name of High School attended" class="form-control required">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Address of High School:</label>
			                                		<textarea name="schaddress" rows="4" cols="4" placeholder="10, Shofolahan Street, Ijeshatedo, Surulere, Lagos." class="form-control"></textarea>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Year Attended:</label>
													<select name="dateattend" data-placeholder="Year Attended" class="select">
						                                        <option></option> 
						                                        	<option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
						                                    </select>
													
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Year Graduated:</label>
													<select name="dategrad" data-placeholder="Year Graduated" class="select">
						                                        <option></option> 
						                                        	<option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
						                                    </select>
															</div>
														</div>
													</div>

									</div>

									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Name of Preparatory School: <span class="text-danger">*</span></label>
			                                		<input type="text" name="prepname" placeholder="Name of Preparatory School attended" class="form-control">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Address of Preparatory School:</label>
			                                		<textarea name="prepaddress" rows="4" cols="4" placeholder="10, Shofolahan Street, Ijeshatedo, Surulere, Lagos." class="form-control"></textarea>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Year Attended:</label>
													<select name="dateattendyear_1" data-placeholder="Year Attended" class="select">
						                                        <option></option> 
						                                        	<option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
						                                    </select>
													
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Year Graduated:</label>
													<select name="dategradyear_1" data-placeholder="Year Graduated" class="select">
						                                        <option></option> 
						                                        	<option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
						                                    </select>
															</div>
														</div>
													</div>

									</div>
									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Certificate: <span class="text-danger">*</span></label>
			                                		<input type="text" name="cert_1" placeholder="Please list Your certificate" class="form-control">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Year Obtained: <span class="text-danger">*</span></label>
													<select name="cert_date_1" data-placeholder="Year Obtained" class="select">
						                                        <option></option> 
						                                        	<option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
						                                    </select>
															</div>
														</div>
													</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												<label>Certificate: <span class="text-danger">*</span></label>
												<div class="col-lg-12">
			                                		<input type="text" name="cert_2" placeholder="Please list Your certificate" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Year: <span class="text-danger">*</span></label>
													<select name="cert_date_2" data-placeholder="Year Attended" class="select">
						                                        <option></option> 
						                                        	<option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
						                                    </select>
													
												</div>

											</div>
										</div>
									</div>																	
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Family Information</legend>
									<!-- Input with icons -->
									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Father's Full name:</label>
						                           	<input type="text" name="father_n" placeholder="Father's full name" class="form-control">
													
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Father's Occupation:</label>
						                            <input type="text" name="father_o" placeholder="Father's occupation" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Father's Telephone Number:</label>
						                                    <input type="text" name="father_phone" placeholder="Father's Telephone Number" class="form-control">
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
															<label>Father's Email Address:</label>
						                                    <input type="text" name="father_email" placeholder="Father's email address" class="form-control">
													
															</div>
														</div>
													</div>

									</div>



									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Mother's Full Name:</label>
						                                    <input type="text" name="mother_n" placeholder="Mother's Full Name" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Mother's Occupation:</label>
						                                    <input type="text" name="mother_o" placeholder="Mother's Occupation" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Mother's Telephone Number:</label>
						                                    <input type="text" name="mother_phone" placeholder="Mother's Telephone Number" class="form-control">
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
															<label>Mother's Email Address:</label>
						                                    <input type="text" name="mother_email" placeholder="Mother's email address" class="form-control">
													
															</div>
														</div>
													</div>

									</div>
									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
															<label>College/School Father Attended:</label>
							                                    <input type="text" name="father_degree" placeholder="Father's Degree" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
															<label>Year of Graduation:</label>
							                                    <select name="father_degree_year" data-placeholder="Year of Attendance" class="select">
							                                        <option></option> 
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
							                                        <option value="2016">2016</option>
							                                        <option value="2017">2017</option>
							                                    </select>
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>College/School Mother Attended:</label>
							                                    <input type="text" name="mother_degree" placeholder="College/School Name" class="form-control">
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
															<label>Year of Graduation:</label>
							                                    <select name="mother_degree_year" data-placeholder="Year of Attendance" class="select">
							                                        <option></option> 
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
							                                        <option value="2016">2016</option>
							                                        <option value="2017">2017</option>
							                                    </select>
													
															</div>
														</div>
													</div>

									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Fill if Appropriate:</label>
													 <select name="parent_status" data-placeholder="Parent Status" class="select">
						                                        <option></option> 
						                                        <option value="Divorced">Parents Divorced</option>
																<option value="Separated">Parents Separated</option>
																<option value="fDeceased">Father Deceased</option>
																<option value="mDeceased">Mother Deceased</option>
						                                    </select>
													
												</div>
											</div>
										</div>
										
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Provide Parents/Guardian Information if Parents Status is selected: <span class="text-danger">*</span></label>
				                                <textarea name="parent_status_note" rows="4" cols="4" placeholder="If any of the option is selected in the parent status, please provide full name, relationship to you and address of the parent or guardian with whom you legally reside and to whom official college correspondence should be sent" class="form-control"></textarea>				
												</div>
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Siblings Name:</label>
						                                    <input type="text" name="siname" placeholder="Siblings Full Name" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Siblings Age:</label>
						                                    <input type="text" name="siage" placeholder="Siblings Age" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Siblings School/College Attended:</label>
						                                    <input type="text" name="sicollege" placeholder="Siblings School/College Attended" class="form-control">
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
															<label>Year of Graduation:</label>
						                                    <select name="ygrad" data-placeholder="Year of Attendance" class="select">
						                                        <option></option> 
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
						                                        <option value="2016">2016</option>
						                                        <option value="2017">2017</option>
						                                    </select>
													
															</div>
														</div>
													</div>

									</div>
									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Siblings Name:</label>
													<input type="text" name="siname_2" placeholder="Siblings Full Name" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Siblings Age:</label>
						                                    <input type="text" name="siage_2" placeholder="Siblings Age" class="form-control">
												</div>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Siblings School/College Attended:</label>
						                                    <input type="text" name="sicollege_2" placeholder="Siblings School/College Attended" class="form-control">
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
															<label>Year of Graduation:</label>
						                                    <select name="ygrad_2" data-placeholder="Year of Attendance" class="select">
						                                        <option></option> 
						                                        <option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
						                                    </select>
													
															</div>
														</div>
													</div>

									</div>

									<div class="row">
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Relatives that attended HNAUB:</label>
							                        <input type="text" name="rename" placeholder="Relative's Name" class="form-control">
												</div>

											</div>
										</div>
										<div class="col-lg-3">
											<div class="form-group has-feedback">
												
														<div class="col-lg-12">
															<label>Year of Attendance:</label>
							                                    <select name="redate" data-placeholder="Year of Attendance" class="select">
							                                        <option></option> 
							                                        <option value="1966">1966</option>
																	<option value="1967">1967</option>
																	<option value="1968">1968</option>
																	<option value="1969">1969</option>
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
																	<option value="2016">2016</option>
																	<option value="2017">2017</option>
																	<option value="2018">2018</option>
																	<option value="2019">2019</option>
							                                    </select>
													
															</div>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="form-group has-feedback">
															
															<div class="col-lg-12">
																<label>School/College Attended:</label>
							                                   <select name="school_attend" data-placeholder="School/College Attended" class="select">
													<option></option>
													<optgroup label="School of Accounting, Human Resource & Marketing">
														<option value="Accounting">Accounting</option>
														<option value="Human Resource">Human Resource</option>
														<option value="Marketing">Marketing</option>
													</optgroup>

													<optgroup label="REV. (DR.) LEON SUVLLIAN SCHOOL OF BUSINESS ADMINISTRATION AND MANAGEMENT">
														<option value="Business Administration">Business Administration</option>
														<!--<option value="Marketing">Marketing</option>-->
													</optgroup>

													<optgroup label="SCHOOL OF ECONOMICS">
														<option value="Economics">Economics</option>
														<option value="Banking & Finance">Banking & Finance</option>
													</optgroup>

													<optgroup label="Pdt KWAME NKRUMA SCHOOL OF INTERNATIONAL RELATIONS, POLITICAL SCIENCE AND PUBLIC ADMINISTRATION">
														<option value="International Relations">International Relations</option>
														<option value="Public Administration">Public Administration</option>
														<option value="Political Science">Political Science</option>
													</optgroup>

													<optgroup label="SCHOOL OF COMPUTER SCIENCE, MATHEMATICS, AND INFORMATION TECHNOLOGY">
														<option value="Computer Science">Computer Science</option>
														<option value="Computer Engineering">Computer Engineering</option>
														<option value="Management Information Science">Management Information Science</option>
													</optgroup>

													<optgroup label="Pdt ANDRE KOLINGBA INSTITUTE OF LANGUAGES AND SCHOOL OF TRANSLATORS">
														<option value="English">English</option>
														<option value="Translations">Translations</option>
														<option value="Mass Communication">Mass Communication</option>
													</optgroup>

													<optgroup label="KOKPON SCHOOL OF AGRICULTURE AND ANIMAL SCIENCE">
														<option value="Vegetal Production">Vegetal Production</option>
														<option value="Animal Production">Animal Production</option>
														<option value="Fish / Fishing farming">Fish / Fishing farming</option>
														<option value="Nutrition / Food Processing">Nutrition / Food Processing</option>
														<option value="Agri Forest / Management of Natural Resources">Agri Forest / Management of Natural Resources</option>
													</optgroup>

													<optgroup label="SIR KESINGTON ADEBUKOLA ADEBUTU FACULTY OF LAW">
														<option value="Law">Law</option>
													</optgroup>

													<optgroup label="FACULTY OF LIBERAL ARTS">
														<option value="Sociology">Sociology</option>
														<option value="Psychology">Psychology</option>
														<option value="History">History</option>
														<option value="Geography">Geography</option>
														<option value="Philosophy">Philosophy</option>
													</optgroup>
												</select>
															</div>
														</div>
													</div>
													<div class="col-lg-3">
														<label>Relationship of the relative to you:</label>
					                                    <select name="relation" data-placeholder="Relationship to you" class="select">
					                                        <option></option> 
					                                        <option value="brother">Brother</option> 
					                                        <option value="sister">Sister</option> 
					                                        <option value="cousin">Cousin</option> 
					                                        <option value="nephew">Nephew</option> 
					                                        <option value="niece">Niece</option>
					                                        <option value="stepbrother">Step-brother</option> 
					                                        <option value="stepsister">Step-sister</option>
					                                        <option value="Uncle">Uncle</option> 
					                                        <option value="Aunty">Aunty</option>
					                                    </select>
													</div>
									<div class="row">
										<div class="col-md-4 col-md-offset-4">
											<label>Language Spoken at Home:</label>
		                                    <select name="lang" data-placeholder="Language Spoken at Home" class="select">
		                                        <option></option> 
		                                        <option value="english">English</option> 
		                                        <option value="french">French</option> 
		                                        <option value="yoruba">Yoruba</option> 
		                                        <option value="igbo">Igbo</option> 
		                                        <option value="hausa">Hausa</option>
		                                        <option value="other">Others</option>
		                                    </select>
										</div>

									</div>
																	
								</fieldset>
								
								<fieldset class="content-group">
									<legend class="text-bold">Other Information</legend>
									<!-- Input with icons -->
									<div class="row">
										<div class="col-lg-4">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Country of Citizenship:</label>
							            <input type="text" name="cocitizen" placeholder="Country of Citizenship" class="form-control">
													
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Country of Birth? <span class="text-danger">*</span></label>
				                                    <select name="cobirth" data-placeholder="Select a country..." class="select">
				                                        <option></option> 
						                                <optgroup label="Africa">
															<option value="Nigeria">Nigeria</option>
															<option value="Benin Republic">Benin Republic</option>
															<option value="Ghana">Ghana</option>
														</optgroup>

														<optgroup label="Asia">
															<option value="China">China</option>
															<option value="Japan">Japan</option>
															<option value="India">India</option>
															<option value="South Korea">South Korea</option>
														</optgroup>

														<optgroup label="North America">
															<option value="USA">United States of America</option>
															<option value="Mexico">Mexico</option>
														</optgroup>

														<optgroup label="South America">
															<option value="Brazil">Brazil</option>
															<option value="Argentina">Argentina</option>
															<option value="Columbia">Columbia</option>

														</optgroup>

														<optgroup label="Europe">
															<option value="France">France</option>
															<option value="UK">United Kingdom</option>
															<option value="Russia">Russia</option>
														</optgroup>
				                                    </select>
													
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Where did you find us? <span class="text-danger">*</span></label>
					                                    <select name="source" data-placeholder="Choose an option..." class="select">
					                                        <option></option> 
					                                        <option value="monster">Monster.com</option> 
					                                        <option value="linkedin">LinkedIn</option> 
					                                        <option value="google">Google</option> 
					                                        <option value="adwords">Google AdWords</option> 
					                                        <option value="facebook">Facebook</option>
					                                        <option value="twitter">Twitter</option>
					                                        <option value="other">Other source</option>
					                                    </select>
													
												</div>
											</div>
										</div>

									</div>



									<div class="row">
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Input with icon <span class="text-danger">*</span></label>
													<input type="text" name="sname" class="form-control"  placeholder="Text input with icon validation">
													
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label class="control-label">Input with icon <span class="text-danger">*</span></label>
													<input type="text" name="sname" class="form-control"  placeholder="Text input with icon validation">
													
												</div>
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Do you have a permanent Benin Resident Alien Status?: <span class="text-danger">*</span></label>
											<div class="row">
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="bresident" class="styled" value="yes">
															Yes
														</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="bresident" class="styled" value="no">
															No
														</label>
													</div>
												</div>
											</div>
													
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Do you have your Country National ID or Passport?: <span class="text-danger">*</span></label>
											<div class="row">
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="nationalid" class="styled" value="yes">
															Yes
														</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="nationalid" class="styled" value="no">
															No
														</label>
													</div>
												</div>
											</div>
													
												</div>
											</div>
										</div>

									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Have you ever been suspended or expelled from School?: <span class="text-danger">*</span></label>
											<div class="row">
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="expelled" class="styled" value="yes">
															Yes
														</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="expelled" class="styled" value="no">
															No
														</label>
													</div>
												</div>
											</div>
													
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group has-feedback">
												
												<div class="col-lg-12">
													<label>Have you ever been arrested for crime or drug?: <span class="text-danger">*</span></label>
											<div class="row">
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="drug" class="styled" value="yes">
															Yes
														</label>
													</div>
												</div>
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="drug" class="styled" value="no">
															No
														</label>
													</div>
												</div>
											</div>
													
												</div>
											</div>
										</div>

									</div>
																	
								</fieldset>

								
								<div class="text-right">
									<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
									<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							<?php echo form_close(); ?>
						</div>
					</div>
					<!-- /form validation -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2017. <a href="#">HNAUB Admission Portal</a> by <a href="" target="_blank">Julius Olajumoke</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
