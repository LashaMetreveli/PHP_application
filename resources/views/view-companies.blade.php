
@extends('layouts.main')

@section('content-companies')
    

<div class="card">

    <div class="card-header">
        <h1>All Companies</h1>
    </div>

    <div class="card-body">

            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th colspan="2">Actions</th>
                </tr>

                <form action="{{route('company.add')}}" method="POST">
                    @csrf
            <tr>
                <td><input class="form-control" type="" name="" placeholder="id" disabled="true"></td>
                <td><input class="form-control" type="text" name="name" placeholder="name"></td>
                <td><input class="form-control" type="number" name="code" placeholder="code"></td>
                <td><input class="form-control" type="text" name="address" placeholder="address"></td>
                <td><input class="form-control" type="text" name="country" placeholder="country"></td>
                <td><button class="btn btn-success">Add</button></td>
    
            </tr>

        </form>

           
        
             @foreach ($companies as $c)
                <tr>
                <td>{{ $c->id}}</td>
                <td>{{ $c->name}}</td>
                <td>{{ $c->code}}</td>
                <td>{{ $c->address}}</td>
                <td>{{ $c->country}}</td>
                 <td>
                    <a href="{{route('company.edit',['id' => $c->id]) }}" class="btn btn-info">Edit</a>

                </td>
                <td>
                    <form action="{{route('company.delete')}}" method="POST">
                        @csrf
                    <input type="hidden" name="company_id" value="{{$c->id}}" >
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr> 
            @endforeach
        
        </table>
            
        
    </div>
 
</div>


@endsection