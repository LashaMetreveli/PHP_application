@extends('layouts/main')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Car</h1>
    </div>

    <form action="{{route('car.update',['id' => $car ->id])}}" method="POST">
        @csrf
    <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$car->name}}">
            </div>

            <div class="form-group">
                <label for="model">Model</label>
            <input type="text" class="form-control" name="model" id="model" value="{{$car->model}}">
            </div>
            <div class="form-group">
                <label for="make">Make</label>
            <input type="text" class="form-control" name="make" id="make" value="{{$car->make}}">
            </div>

            <div class="form-group">
                <label for="license_number">License Number</label>
                <input type="number" class="form-control" name="license_number" id="license_number" value="{{$car->license_number}}">
            </div>

            <div class="form-group">
                <label for="weight">Weight </label>
                <input type="number" class="form-control" name="weight" id="weight" value="{{$car->weight}}">
            </div>

            <div class="form-group">
                <label for="weight">Rel. Year </label>
                <input type="date" class="form-control" name="registration_year" id="registration_year" value="{{$car->registration_year}}">
            </div>

    </div>

    <div class="card-footer">
        <button class="btn btn-success">Save</button>
        <button class="btn btn-danger">Cancer</button>
    </div>

</div>
</form>

@endsection