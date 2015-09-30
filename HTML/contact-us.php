<?php 
	$pageTitle="Contact Us"; 
	include_once( "main_header.php"); 
?>


<div role="main" class="main">

	<section class="section section-text-light section-background section-overlay" style="background-image: url(img/team.png); background-position: 120px 370px;  margin-top: 0px; min-height: 150px">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mb-none" style="text-transform: uppercase;">Contact Us</h2>
				</div>
			</div>
		</div>
	</section>

	<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
	<div id="googlemaps" class="google-map"></div>

	<div class="container">

		<div class="row">
			<div class="col-md-6">

				<div class="alert alert-success hidden" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="alert alert-danger hidden" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
				</div>

				<h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
				<form id="contactForm" action="php/contact-form.php" method="POST">
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label>Your name *</label>
								<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
							</div>
							<div class="col-md-6">
								<label>Your email address *</label>
								<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Subject</label>
								<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Message *</label>
								<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">

				<h4 class="heading-primary mt-lg">Get in <strong>Touch</strong></h4>
				<p>Have a question about the club? Want to get in touch with someone at the club, why not send us an email.</p>

				<hr>

				<h4 class="heading-primary">The <strong>Clubhouse</strong></h4>
				<ul class="list list-icons list-icons-style-3 mt-xlg">
					<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Cheriton Fitzpaine AFC, White Cross, Cheriton Fitzpaine</li>
					<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (01363) 866511</li>
					<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">admin@cheritonfitzpainefc.com</a>
					</li>
				</ul>

				<hr>

			</div>

		</div>

	</div>

</div>



<?php include_once( "footer.php"); ?>

<!-- Vendor -->
<!--[if lt IE 9]>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<![endif]-->
<!--[if gte IE 9]><!-->
<script src="vendor/jquery/jquery.js"></script>
<!--<![endif]-->
<script src="vendor/jquery.appear/jquery.appear.js"></script>
<script src="vendor/jquery.easing/jquery.easing.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
<script src="vendor/bootstrap/bootstrap.js"></script>
<script src="vendor/common/common.js"></script>
<script src="vendor/jquery.validation/jquery.validation.js"></script>
<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.js"></script>
<script src="vendor/isotope/jquery.isotope.js"></script>
<script src="vendor/owlcarousel/owl.carousel.js"></script>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/vide/vide.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Specific Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
	/*
				Map Settings

					Find the Latitude and Longitude of your address:
						- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
						- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

				*/

	// Map Markers
	var mapMarkers = [{
		address: "50.843296, -3.596303",
		html: "<strong>White Cross, Cheriton Fitzpaine</strong>",
		icon: {
			image: "img/pin.png",
			iconsize: [26, 46],
			iconanchor: [12, 46]
		},
		popup: true,
	}];

	// Map Initial Location
	var initLatitude = 50.843513;
	var initLongitude = -3.597455;

	// Map Extended Settings
	var mapSettings = {
		controls: {
			draggable: (($.browser.mobile) ? false : true),
			panControl: true,
			zoomControl: true,
			mapTypeControl: true,
			scaleControl: true,
			streetViewControl: true,
			overviewMapControl: true
		},
		scrollwheel: false,
		markers: mapMarkers,
		latitude: initLatitude,
		longitude: initLongitude,
		zoom: 16
	};


	var map = $("#googlemaps").gMap(mapSettings);

	// Map Center At
	var mapCenterAt = function(options, e) {
		e.preventDefault();
		$("#googlemaps").gMap("centerAt", options);
	}
</script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script type="text/javascript">
		
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-12345678-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		
		</script>
		 -->

</body>

</html>