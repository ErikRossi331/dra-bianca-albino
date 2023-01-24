@extends('templates.master')
@section('title')
Contato | Psicólogo Wesley Lutero
@endsection
@section('seo')

@endsection
@section('content') 
<div class="main-container">

		<main>
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="page-banner-content">
						<h3>Sobre Mim</h3>
					</div>
					<div class="banner-content">
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="active">about us</li>
						</ol>
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Banner -->
			
			<!-- About Section -->
			<div class="about-section container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-7 col-xs-12">
							<div class="about-content">
								<h5>We look forward to exceeding your expectations.</h5>
								<p>Welcome to our Hospital. Whether you are a patient or a visitor at our hospital, you can expect that over 80 dedicated employees, physicians and volunteers will be working tirelessly to ensure that you receive excellent care in a safe and comfortable environment.</p>
								<p>As a leading healthcare provider in US, Our Hospital provides quality, compassionate and cost-effective services that continually meet and exceed our patient needs. I hope you will consider the many quality healthcare services available to you at our hospital and off-site facilities and providers. We offer high quality health care, the most advanced technologies and skilled physicians and nurses who are passionate about what they do.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-5 col-xs-12 about-img">
							<img src="assets/images/about.jpg" alt="about" />
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- About Section -->
			
	
	<!-- Footer Main -->
	<footer id="footer-main" class="footer-main container-fluid no-left-padding no-right-padding">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-6 contact-info">
					<aside class="widget widget_info">
						<h3 class="widget-title">Contact info</h3>
						<p><i class="fa fa-phone"></i><a href="tel:386489550686" title="+386 489 550 686">+386 489 550 686</a></p>
						<p><i class="fa fa-envelope"></i><a href="mailto:yourdomain@name.com" title="yourdomain@name.com">yourdomain@name.com</a></p>
						<p><i class="fa fa-map-marker"></i>123, Las Vegas street lorem</p>
						<div class="footer-social">
							<i class="fa fa-heart"></i>
							<ul>
								<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
								<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
								<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</aside>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6 contact-form">
					<h3 class="widget-title">Any Questions ?</h3>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="full Name" name="contact-fname" id="input_fname" required="" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="email Address" name="contact-email" id="input_email" required="" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="subject" name="contact-subject" id="input_subject" />
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="message" rows="4" name="contact-message" id="input_message" ></textarea>
						</div>
						<div class="form-group">
							<button title="Learn More" id="que_btn_submit" type="submit" name="post">Learn more</button>
						</div>
						<div id="alert-msg-que" class="alert-msg"></div>
					</form>
				</div>
			</div>
@endsection