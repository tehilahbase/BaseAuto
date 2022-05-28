<section class="page-title" style="background-image:url(<?php echo base_url('assets/'); ?>images/main-slider/1.jpg);">
	<div class="auto-container">
		<br/><br/>
		<h1>Contact Us</h1>
		<div class="bread-crumb-outer">
			<ul class="bread-crumb clearfix">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li class="active">Contact Us</li>
			</ul>
		</div>
	</div>
</section>

<section class="contact-section">
	<div class="auto-container row">
		<div class="form-container col-sm-6 col-sm-offset-3">
			<div class="sec-title text-center"><h2>Reach Out To Us</h2></div>
			
			<div class="contact-form default-form">
				<form id="contact-form" formURL="<?php echo base_url('contact'); ?>">
					<div class="row clearfix">
					
						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">First Name <span class="req">*</span></div>
							<input type="text" name="firstname" value="" placeholder="Your First Name">
						</div>
						
						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">Last Name <span class="req">*</span></div>
							<input type="text" name="lastname" value="" placeholder="Your Last Name">
						</div>

						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">Email Address <span class="req">*</span></div>
							<input type="email" name="email" value="" placeholder="Your Email Address">
						</div>
						
						<div class="form-group col-md-6 col-sm-6 col-xs-12">
							<div class="field-label">Phone <span class="req">*</span></div>
							<input type="text" name="phone" value="" placeholder="Your Phone Number">
						</div>
						
						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<div class="field-label">Message <span class="req">*</span></div>
							<textarea name="message" placeholder="Write Your Message"></textarea>
						</div>
						
						<div class="response"></div>
						
						<div class="form-group col-md-12 col-sm-12 col-xs-12 text-center">
							<button id="contact_form" type="submit" class="theme-btn btn-style-four">SUBMIT </button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</section>
 