@extends('layouts.landinglo')

@section('everything')
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113384065-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-113384065-1');
	</script>

	<title>Otto | Personalize Car Repair Service</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
</head>
<body>
	<div id="section-1" class="page-section">
		<header>
			<img class="logo" src="{{ asset('img/logo.png') }}">
		</header>
		<div class="page-section-content">
			<div class="textbox">
				<h1>We worry about your car problems so you don't have to. </h1>
				<p>Spend less time in shop and more time on the road. 
				No more comparing quotes, no more drop offs and no more pick ups. 
				Otto makes your car repairs manageable, fast and easy.</p>
				<button href="#section-5" onClick="document.getElementById('section-5').scrollIntoView();">Subscribe</button>
			</div>
		</div>
	</div>
	<div id="section-2" class="page-section">
		<div class="page-section-content">
			<div class="textbox">
				<h1>Personalized car service <br/> right at your doorstep. </h1>
				<p>With Otto, we send the repair shop to you. 
				Get fast diagnostics, trusted quotes 
				and a selection of qualified mechanics who will come 
				and fix your car right at your doorstep.</p>
			</div>
		</div>
	</div>
	<div id="section-3" class="page-section">
		<div class="page-section-content">
			<div class="textbox">
				<h1>One price, no worries.</h1>
				<p>Stressed out about comparing multiple quotes on your car repair? We got you covered. 
				Otto provides you with one price that you can trust.
				Worried about paying extra for unresolved problems? 
				We got that too. Our price ensures that you pay once and only once for a given diagnosis. </p>
			</div>
		</div>
	</div>
	<div id="section-4" class="page-section">
		<div class="page-section-content">
			<div class="textbox">
				<h1>How does it work?</h1>
				<p>Otto actively tracks your car's performance as you drive, so what happens when an engine error code pops up on your car. No problem. Just open Otto and and we've already diagnosed your car and quoted you for the repair job with a single price. After that, you can schedule yourself with a mobile mechanic who will fix your car right in your driveway. No more drop offs, no more pick ups. Otto makes car repairs manageable, efficient and easy.</p>
			</div>
		</div>
	</div>
	<div id="section-5" class="page-section">
		<div class="page-section-content">
			<h1>Ready for a test drive?</h1>
			<p>Join our mailing list and we'll keep you up to date.</p>

			<!-- Begin MailChimp Signup Form -->
			<!--
			<div id="mc_embed_signup" class="email-address-field">
				<form action="https://ottorepairs.us17.list-manage.com/subscribe/post?u=c28634d5f6c5aa61ec78ac129&amp;id=31e9d029a5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate stretch" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
				    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c28634d5f6c5aa61ec78ac129_31e9d029a5" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
			</div>
			-->

			<!--End mc_embed_signup-->
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup" class="email-address-field">
				<form action="https://ottorepairs.us17.list-manage.com/subscribe/post?u=c28634d5f6c5aa61ec78ac129&amp;id=31e9d029a5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			    	<div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address</label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
						</div>
						<div class="mc-field-group input-group">
			    			<input type="checkbox" required value="1" name="group[3929][1]" id="mce-group[3929]-3929-0">
			    			<label for="mce-group[3929]-3929-0">By checking this box, you are signing up for our monthly newsletter. You can unsubscribe at any time. See our <a href="//www.iubenda.com/privacy-policy/16171985" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script> for more details</label>
							
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c28634d5f6c5aa61ec78ac129_31e9d029a5" tabindex="-1" value=""></div>
		    			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			    		</div>
				</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->

		</div>
	</div>
	<footer>
		<p>Personalized just for you by Team Otto | All rights reserved</p>
	</footer>
</body>
</html>
@endsection