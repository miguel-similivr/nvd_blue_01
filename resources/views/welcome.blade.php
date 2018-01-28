@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/landing.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 

@endsection

@section('content')
<div class="container" style="background-image: url('img/background.png');">
    <div class="textbox">
        <h2>Car problems?</h2>
        <h1>Imagine <br/> personalized <br/> car repairs.</h1>
        <p>We provide smart diagnostics, fast quoting, and mobile mechanics to get you back on the road as quickly as possible.</p>
        <h3>Ready for a test drive?</h3>
        <p>Sign up for our mailing list and we'll keep you posted.</p>
        <div class="email-address-field">
            <textarea placeholder="Enter your email address"></textarea>
            <button>Sign Up</button>
        </div>
    </div>
</div>
@endsection