@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">My Cars</div>
	<div class="panel-body">
		<ul class="list-group">
			@foreach($cars as $car)
			<li class="list-group-item">
				<a href="/cars/{{ $car->id}}">{{ $car->make }} {{ $car->model }} - {{ $car->plate_number }}</a>
			</li>
			@endforeach

			<li class="list-group-item">
				<a href="/cars/create">Add New Car</a>
			</li>
		</ul>
	</div>
</div>

@endsection