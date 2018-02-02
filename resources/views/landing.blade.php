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
				<button href="/#section-5">Sign Up</button>
			</div>
		</div>
	</div>
	<div id="section-2" class="page-section">
		<div class="page-section-content">
			<div class="textbox">
				<h1>Personalized car service <br/> right at your doorstep. </h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a pharetra metus. Praesent metus odio, luctus et urna non, eleifend rhoncus nisi. Nullam ornare tincidunt interdum. Praesent venenatis laoreet lorem. Nam at velit nec lacus interdum accumsan. Ut velit dolor, blandit non elementum et, faucibus nec augue. Pellentesque imperdiet justo ut orci blandit tempus. Mauris pharetra urna nec diam vehicula, id suscipit lectus feugiat. Duis sit amet commodo tortor.</p>
			</div>
		</div>
	</div>
	<div id="section-3" class="page-section">
		<div class="page-section-content">
			<div class="textbox">
				<h1>One price, no worries.</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a pharetra metus. Praesent metus odio, luctus et urna non, eleifend rhoncus nisi. Nullam ornare tincidunt interdum. Praesent venenatis laoreet lorem. Nam at velit nec lacus interdum accumsan. Ut velit dolor, blandit non elementum et, faucibus nec augue. Pellentesque imperdiet justo ut orci blandit tempus. Mauris pharetra urna nec diam vehicula, id suscipit lectus feugiat. Duis sit amet commodo tortor.</p>
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
			<div class="email-address-field">
				<textarea placeholder="Enter your email address"></textarea>
				<button>Sign Up</button>
			</div>
		</div>
	</div>
	<footer>
		<p>Personalized just for you by Team Otto | All rights reserved</p>
	</footer>
</body>
</html>
@endsection