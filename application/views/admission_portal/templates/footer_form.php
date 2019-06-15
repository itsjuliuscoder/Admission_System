	</div>
</div>
		<!--<script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>-->
		<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/simpleform.min.js"></script>-->
		<!--<script type="text/javascript">
			$(".testform").simpleform({
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
			</script>-->
</body>
</html>