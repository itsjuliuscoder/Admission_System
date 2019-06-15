<body>
<?php if (($this->session->flashdata('message_sent'))) : ?>
		<?php
				$msg = $this->session->flashdata('message_sent');
				 echo ("<script type=\"text/javascript\">
						$(function(){
						    new PNotify({
						        title: '&nbsp; Message Sent',
						        text: '$msg',
						        styling: 'fontawesome',
						        type: 'info',
						        animation: 'slide',
						        addclass: 'bg-info'
						    });
						});
				</script>");
		?>
<?php endif; ?>
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
				<h1><a href="../../index.php"><img src="<?php echo base_url(); ?>/images/ok.png" class="img-responsive"></a></h1>
			</div>
			<!--nav links -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-right">
					<li><a href="<?php echo base_url(); ?>" class="link-nav active scroll"><span data-letters="About">About</span></a></li>
					<li><a href="<?php echo base_url(); ?>undergraduate" class="link-nav"><span data-letters="Undergraduate">Undergraduate</span></a></li>
					<li><a href="<?php echo base_url(); ?>transfer" class="link-nav"><span data-letters="Transfer">Transfer</span></a></li>	
					<li><a href="<?php echo base_url(); ?>contact" class="link-nav"><span data-letters="Contact">Contact</span></a></li>		
				</ul>			
				<div class="clearfix"> </div>
			</div>
		</div>
	</nav>
</div>	
<!--//navigation-->

	<script src="<?php echo base_url(); ?>/js/nav.js"></script>
    <script src="<?php echo base_url(); ?>/js/bootstrap.js"></script> 
    <script src="<?php echo base_url(); ?>/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/main.js"></script>   

<div class="clear_nav"></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active  image-wid">
					<img src="<?php echo base_url(); ?>/images/admission/admission.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>WELCOME TO <strong>HNAUB</strong></h3>
						<p>Since 1992 our vision has always been to raise up competent leaders ready to take charge in all dimensions of the socio-economic, cultural, industrial and human growth and development of our nations 	</p>
						<!--<button type="button" class="btn btn-info sld">Read more</button>-->
					</div>
					</div>
					<div class="item  image-wid">
					<img src="<?php echo base_url(); ?>/images/admission/admission4.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>JOIN US ON THE JOURNEY OF <strong>FULFILMENT</strong></h3>
						<p>Looking for that bridge that links you to your dream? Luckily, you found it in HNAUB. HNAUB helps happens to be that bridge that put you on the path to fulfiling your dream</p>
						<!--<button type="button" class="btn btn-info sld">Read more</button>-->
					</div>
					</div>
					<div class="item  image-wid">
					<img src="<?php echo base_url(); ?>/images/admission/sch.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>STUDY IN AN IDEAL <strong>ENVIRONMENT</strong></h3>
						<p>See the beauty of studying and learning in a bilingual environment, meet people of different culture from different nations. <!--At HNAUB there is nothing like home cause HNAUB is your home--></p>
						<!--<button type="button" class="btn btn-info sld">Read more</button>-->
					</div>
					</div>
				</div>
				<!-- Controls -->
				</div>
			</div>
<!--<h1 class="why-choose-us">DLV TECHNOLOGIES</h1>-->
<div class="clearfix"></div>
    <div class="section-home home-reasons">
        <div class="container">
        	<div class="row animated wow lightSpeedIn wel" data-wow-delay="100ms">
        		<h2>Admission into HNAUB</h2>
			<div class="wel-btm"></div>
			<p>A well structured and conducive learning environment to enable you learn at your pace.
			Our educational system comprises of both English and French section where priority is given to the English Language</p>
        	</div>
			<!--//search-scripts-->
            <div class="row">
               <div class="col-md-8">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <a href="#"><img src="<?php echo base_url(); ?>images/admission/admission7.jpg" alt="" class="img-responsive"></a>
                        <h2>Start Your Journey with Us</h2>
                        <p>We welcome you to <b>Houdegbe North American University Benin</b>, we deeply appreciate you for dropping by to our Admission Office.</p> <br>
                       <!-- <p> Begin, continue your undergraduate studies with our accredited programmes and take your career to the next level through our Graduate school. <b>HNAUB</b> is just the linking bridge between you and your dreams</p>-->
                       <p><b>ACCREDITATION BY:</b> GOVERNMENT OF REPUBLIC OF BENIN:</p>
                       <ul>
                       		<li> - NO 089/MESRS/CAB/DC/DPP/SP DU 19/10/2001</li>
                       		<li> - NO 67/MESRS/CAB/DC/DPP/SP DU 18/10/2002</li>
                       		<li> - NO 50/MESRS/CAB/DC/SGM/DPP/DGES/DEPES SA du 05/02/2014 portant homologation de programmes</li>
                       </ul>
                    </div>
                    
                </div>

               <div class="col-md-4">
               		<div class="news">
	                    <h2>Latest Admission News</h2>
	                    <div class="section-content">
	                      <marquee behavior="scroll" align="left" direction="up" scrollamount="3" scrolldelay="10" onmouseover="this.stop()" onmouseout="this.start()" height="220">
	                        <?php  foreach ($news as $post) : ?>
	                        <article>
	                            <figure class="date"><i class="fa fa-file-o"></i><?php echo date('l, F d, Y', strtotime($post['created_at'])); ?></figure>
	                            <a href="<?php echo base_url('/admission_news/'.$post['slug']); ?>"><?php echo $post['title']; ?>.</a>
	                        </article>
	                        <?php  endforeach; ?>
	                      </marquee>
	                    </div><!-- /.section-content -->
	                    
	                    <!--<a href="#" class="read-more">All News</a>-->
	                  

	                    <!--<a href="news/" class="btn btn-blue hvr-bounce-to-bottom">More News</a>-->

	                </div><!-- /.news-small -->
                    <!--<div class="admit_news">
                    	<h4>Admission News</h4>
                    	<marquee behavior="scroll" align="left" direction="up" scrollamount="3" scrolldelay="10" onmouseover="this.stop()" onmouseout="this.start()" height="100">
                    	<?php  //foreach ($news->result() as $row) : ?>
                    	<div class="row">
                    		
	                    	<div class="adnews_details">
	                    		<h5><a href="<?php //echo base_url($row->slug); ?>"><?php //echo $row->title; ?></a></h5>
	                    		<small><?php //echo date('l, F d, Y', strtotime($row->created_at)); ?></small>
	                    	</div>
	                    	
                    	</div>
                    	<?php //endforeach; ?>
                    	</marquee>
                    </div>-->                 
                </div>
            </div>

            <!-- buttons -->
        </div>

    </div> <!-- /.home-reasons -->
<hr>
<!-- programs -->
<div class="progs">
	<div class="container">
		<div class="row animated wow lightSpeedIn wel" data-wow-delay="100ms">
        		<h2>Our Programs</h2>
			<div class="wel-btm"></div>
			<p>The end of every great future once began with a right and single step, take the right step by choosing HNAUB</p>
        	</div>
        <div class="details">
        	<div class="col-md-6">
        		<div class="img">
        			<img src="<?php echo base_url(); ?>/images/admission/admission.jpg" class="img-responsive">
        		</div>
        		<div class="details-img">
        			<h3>Undergraduate Studies</h3><hr>
        			<p>Bachelor's Degree Program</p>
	        		<div class="rmore">
	        			<a href="<?php echo base_url(); ?>undergraduate">Learn More</a>
	        		</div>
        		</div>
        	</div>
        	<div class="col-md-6">
        		<div class="img">
        			<img src="<?php echo base_url(); ?>/images/admission/admission6.jpg" class="img-responsive">
        		</div>
        		<div class="details-img">
        			<h3>Transfer Students</h3><hr>
        			<p>Continue Your Undergraduate Programme</p>
        			<div class="rmore">
	        			<a href="<?php echo base_url(); ?>transfer">Learn More</a>
	        		</div>
        		</div>
        	</div>
        	<!--<div class="col-md-4">
        		<div class="img">
        			<img src="<?php echo base_url(); ?>/images/admission/admission3.jpg" class="img-responsive">
        		</div>
        		<div class="details-img">
        			<h3>Graduate Studies</h3><hr>
        			<p>Master's, Doctorate or Certificate Programs</p>
        			<div class="rmore">
	        			<a href="<?php echo base_url(); ?>graduate/">Learn More</a>
	        		</div>
        		</div>
        	</div>-->
        </div>
	</div>
	<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<hr>
<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="about-grids animated wow lightSpeedIn" data-wow-delay="700ms">
				<div class="col-md-6 about-grid-left">
					<div class="grid">
						<figure class="effect-moses">
							<img src="<?php echo base_url(); ?>/images/admission/sch.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3>Choose <span> HNAUB</span></h3>
								<p>The end of every great future once began with a right and single step, take the right and first step by choosing HNAUB</p>
							</figcaption>			
						</figure>
					</div>
				</div>
				<div class="col-md-6 about-grid-right">
					<div class="banner-bottom-text">
						<h3><strong>WHY CHOOSE</strong></h3>
						<div class="banner-bottom-text-pos banner-bottom-text-pos1">
							<h3>HNAUB</h3>
						</div>
					</div>
					<p>The educational sector in the development process of our African States remains the essential leverage for strong growth in a competitive global economy.
Houdegbe North American University Benin, the first private university of Benin Republic, dynamic in the sub-region, would like to accompany the African states in their legitimate and increasing needs for the training of competent executive, management and professional personnel. Young and dynamic leaders in quest of innovation and the mastery of modern technological tools. </p>
					<ul>
						<li>Bilingual System.</li>
						<li>Well-Equipped and Conducive Environment</li>
						<li>Limitless Academic Opportunities</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    
<!-- vaid-->
<hr>

<!-- view latest projects -->
<div class="latest-prod">
	<div class="container">	
		<div class="prod-lft col-md-7">
			<img class="align-center animated wow fadeIn img-responsive" data-wow-delay="0.5s" src="<?php echo base_url();?>images/presentation.jpg" alt="image"/>
		</div>
		<div class="prod-ryt col-md-5">
			<div class="row animated wow bounceInLeft" data-wow-delay="2s">
				<div class="no col-md-3">
					<h2>H</h2>
				</div>
				<div class="lttr col-md-9">
					<p>Home for Moral and Academic Excellence</p>
				</div>
			</div>
			<div class="row animated wow bounceInRight" data-wow-delay="5s">
				<div class="no col-md-3">
					<h2>N</h2>
				</div>
				<div class="lttr col-md-9">
					<p>Nurturing Great Leaders</p>
				</div>
			</div>
			<div class="row animated wow bounceInLeft" data-wow-delay="8s">
				<div class="no col-md-3">
					<h2>A</h2>
				</div>
				<div class="lttr col-md-9">
					<p>Academic Excellence </p>
				</div>
			</div>
			<div class="row animated wow bounceInRight" data-wow-delay="11s">
				<div class="no col-md-3">
					<h2>U</h2>
				</div>
				<div class="lttr col-md-9">
					<p>Unity in Diversity</p>
				</div>
			</div>
			<div class="row animated wow bounceInLeft" data-wow-delay="14s">
				<div class="no col-md-3">
					<h2>B</h2>
				</div>
				<div class="lttr col-md-9">
					<p>Bilingual Opportunity</p>
				</div>
			</div>
		</div>
		<!--<div class="row">
			<a class="btn blue" href="download/">Admission Prospectus</a>
		</div>-->
	</div>
</div>
<hr>
<div class="r-products">
	<div class="container">
		
	</div>
</div>
<!-- social-label -->
	<div class="social-label animated wow bounceInDown" data-wow-delay="300ms" id="contact">
				<div class="col-md-6 text-label">
					<p>Keep up with latest admission news on our social network platform</p>
				</div>
					<div class="col-md-6 social-icn">
						<ul>
							<li>
								<a href="#" class="face"></a>
							</li>
							<li>
								<a href="#" class="twit"></a>
							</li>
							<li>
								<a href="#" class="gplus"></a>
							</li>
							<li>
								<a href="#" class="in"></a>
							</li>
						</ul>
					</div>
				<div class="clearfix"></div>
		</div>
<!-- //social-label -->

<div class="other-bar">
	<div class="container">
		<h2>No Payment of any kind nor financial transaction is allowed outside the bursary department of the University in Cotonou</h2>
		<div class="clearfix"></div>
		<div class="download">
			<!--<a href="<?php echo base_url(); ?>download.php">Download ADMISSION DETAILS</a>-->
		</div>
	</div>
</div>
<div class="clearfix"></div>
