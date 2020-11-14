@extends('layouts/main')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Employee</h1>
    </div>

    <form action="{{route('employee.update',['id' => $employee ->id])}}" method="POST">
        @csrf
    <div class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$employee->name}}">
            </div>

            <div class="form-group">
                <label for="lastname">LastName</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="{{$employee->lastname}}">
            </div>

            <div class="form-group">
                <label for="birthdate">Birth Date</label>
                <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{$employee->birthdate}}">
            </div>


            <div class="form-group">
                <label for="personal_id">personal ID</label>
                <input type="number" class="form-control" name="personal_id" id="personal_id" value="{{$employee->personal_id}}">
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" class="form-control" name="salary" id="salary" value="{{$employee->salary}}">
            </div>

    </div>

    <div class="card-footer">
        <button class="btn btn-success">Save</button>
        <button class="btn btn-danger">Cancer</button>
    </div>

</div>
</form>

@endsection