@extends('layouts.landinglo')

@section('everything')
<!DOCTYPE html>
<html>
<head>
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
				<p>Less time in the shop and more time on the road. </p>
				<button href="#section-5" onClick="document.getElementById('section-5').scrollIntoView();">Subscribe</button>
			</div>
		</div>
	</div>
	<div id="section-2" class="page-section">
		<div class="page-section-content">
			<div class="textbox">
				<h1>Personalized car service <br/> right at your doorstep. </h1>
				<p>No need to drive all the way to a shop to get your car fixed. At Otto, we send the car repair service to you. Choose from our qualified partner mechanics, and they'll drive to you to get your car fixed.</p>
			</div>
		</div>
	</div>
	<div id="section-3" class="page-section">
		<div class="page-section-content">
			<div class="textbox">
				<h1>One price, no worries.</h1>
				<p>Stressed out about comparing multiple quotes? At Otto, we give you one price that you can trust. </p>
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
			<p>Sign up for our mailing list and we'll keep you up to date.</p>

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

		</div>
	</div>
	<footer>
		<p>Personalized just for you by Team Otto | All rights reserved</p>
	</footer>
</body>
</html>
@endsection