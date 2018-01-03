@extends('layouts.app')

@section('content')
<div class="row col-md-9 col-lg-9 col-sm-9 pull-left " style="background: white;">
  <h1>Add a New Car</h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      <form method="post" action="{{ route('cars.store') }}">
        {{ csrf_field() }}


        <div class="form-group">
          <label for="car-make">Make<span class="required">*</span></label>
          <input   placeholder="Enter Make"  
                    id="car-make"
                    required
                    name="make"
                    spellcheck="false"
                    class="form-control"
                     />
        </div>

        <div class="form-group">
          <label for="car-model">Model<span class="required">*</span></label>
          <input   placeholder="Enter Model"  
                    id="car-model"
                    required
                    name="model"
                    spellcheck="false"
                    class="form-control"
                     />
        </div>

        <div class="form-group">
          <label for="car-year">Year<span class="required">*</span></label>
          <input   placeholder="Enter Year"  
                    id="car-year"
                    required
                    name="year"
                    spellcheck="false"
                    class="form-control"
                     />
        </div>

        <div class="form-group">
          <label for="car-plate-number">Plate Number<span class="required">*</span></label>
          <input   placeholder="Enter Plate Number"  
                    id="plate-number"
                    required
                    name="plate_number"
                    spellcheck="false"
                    class="form-control"
                     />
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary"
                   value="Submit"/>
        </div>
      </form>
   

  </div>
</div>


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
  <div class="sidebar-module">
    <h4>Actions</h4>
    <ol class="list-unstyled">
      <li><a href="/cars"> <i class="fa fa-building-o" aria-hidden="true"></i>My Cars</a></li>
      
    </ol>
  </div>
</div>

@endsection