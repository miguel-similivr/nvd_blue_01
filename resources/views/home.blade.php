@extends('layouts.app')

@section('content')
<!-- Example row of columns -->
    <div class="jumbotron">
      <h1>Dashboard</h1>
      <p class="lead">This is the dashboard</p>
    </div>
    <div class="row" style="background: white; margin: 10px;">
      <div class="col-lg-4">
        <h2>Cars</h2>
        <p class="text-danger">Select, add, or delete cars</p>
        <p><a class="btn btn-primary" href="/cars" role="button">View Cars »</a></p>
      </div>
    </div>
@endsection
