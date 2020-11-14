@extends('layouts/main')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Company</h1>
    </div>

    <form action="{{route('company.update',['id' => $company ->id])}}" method="POST">
        @csrf
    <div class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$company->name}}">
            </div>

            <div class="form-group">
                <label for="code">Code</label>
                <input type="number" class="form-control" name="code" id="code" value="{{$company->code}}">
            </div>

          
            <div class="form-group">
                <label for="name">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="{{$company->address}}">
            </div>

      

            <div class="form-group">
                <label for="name">Country</label>
            <input type="text" class="form-control" name="country" id="country" value="{{$company->country}}">
            </div>


      

    </div>

    <div class="card-footer">
        <button class="btn btn-success">Save</button>
        <button class="btn btn-danger">Cancer</button>
    </div>

</div>
</form>

@endsection