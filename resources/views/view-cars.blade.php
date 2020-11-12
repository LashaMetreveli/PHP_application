
@extends('layouts.main')

@section('content')
    

<div class="card">

    <div class="card-header">
        <h1>All Cars</h1>
    </div>

    <div class="card-body">

        
            <table class="table">
{{-- 
                    <form action="{{route('car.all')}}">
    
                    <tr>
                    <td><input class="form-control" type="number" name="id" placeholder="id" value="{{request('id')}}"></td>
                        <td colspan><input class="form-control" type="text" name="name" placeholder="name" value="{{request('name')}}"></td>
                        <td><input class="form-control" type="number" name="minprice" placeholder="min price" value="{{request('minprice')}}"></td>
                        <td><input class="form-control" type="number" name="maxprice" placeholder="max price" value="{{request('maxprice')}}"></td>
                        <td><input class="form-control" type="text" name="category" placeholder="category" value="{{request('category')}}"></td>
                        <td colspan="3"><button class="btn btn-info">Filter</button></td>
            
                    </tr>

                </form> --}}


                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>License Number</th>
                    <th>Weight</th>
                    <th>Rel. year</th>
                    <th>Age</th>
                    <th colspan="2">Actions</th>
                </tr>

                <form action="{{route('car.add')}}" method="POST">
                    @csrf
            <tr>
                <td><input class="form-control" type="" name="" placeholder="id" disabled="true "></td>
                <td><input class="form-control" type="text" name="name" placeholder="name"></td>
                <td><input class="form-control" type="text" name="make" placeholder="make"></td>
                <td><input class="form-control" type="text" name="model" placeholder="model"></td>
                <td><input class="form-control" type="number" name="license_number" placeholder="license_number"></td>
                <td><input class="form-control" type="number" name="weight" placeholder="weight"></td>
                <td><input class="form-control" type="date" name="registration_year" placeholder="registration_year"></td>
                <td> --- </td>
                <td><button class="btn btn-success">Add</button></td>
    
            </tr>

        </form>

           
        
            @foreach ($cars as $c)
                <tr>
                <td>{{ $c->id}}</td>
                <td>{{ $c->name}}</td>
                <td>{{ $c->make}}</td>
                <td>{{ $c->model}}</td>
                <td>{{ $c->license_number}}</td>
                <td>{{ $c->weight}}</td>
                <td>{{$c->registration_year }}</td>
                <td>{{ $c->created_at ? $c->created_at ->diffInDays(now()) : 0}} Days Ago</td>

                <td>
                    <a href="{{route('car.edit',['id' => $c ->id]) }}" class="btn btn-info">Edit</a>

                </td>
                <td>
                    <form action="{{route('car.delete')}}" method="POST">
                        @csrf
                    <input type="hidden" name="car_id" value="{{$c->id}}" >
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
            @endforeach
        
        </table>
            
        
    </div>
  
</div>


@endsection