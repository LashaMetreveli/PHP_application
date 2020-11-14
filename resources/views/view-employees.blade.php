
@extends('layouts.main')

@section('content-employees')
    

<div class="card">

    <div class="card-header">
        <h1>All Employees</h1>
    </div>

    <div class="card-body">

        
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>LastName</th>
                    <th>BirthDay</th>
                    <th>personal ID</th>
                    <th>Salary</th>
                    <th colspan="2">Actions</th>
                </tr>

                <form action="{{route('employee.add')}}" method="POST">
                    @csrf
            <tr>
                <td><input class="form-control" type="" name="" placeholder="id" disabled="true"></td>
                <td><input class="form-control" type="text" name="name" placeholder="name"></td>
                <td><input class="form-control" type="text" name="lastname" placeholder="lastname"></td>
                <td><input class="form-control" type="date" name="birthdate" placeholder="birthdate"></td>
                <td><input class="form-control" type="number" name="personal_id" placeholder="personal_id"></td>
                <td><input class="form-control" type="number" name="salary" placeholder="salary"></td>
                <td><button class="btn btn-success">Add</button></td>
    
            </tr>

        </form>

           
        
             @foreach ($employees as $e)
                <tr>
                <td>{{ $e->id}}</td>
                <td>{{ $e->name}}</td>
                <td>{{ $e->lastname}}</td>
                <td>{{ $e->birthdate}}</td>
                <td>{{ $e->personal_id}}</td>
                <td>{{ $e->salary}}</td>

                 <td>
                    <a href="{{route('employee.edit',['id' => $e->id]) }}" class="btn btn-info">Edit</a>

                </td>
                <td>
                    <form action="{{route('employee.delete')}}" method="POST">
                        @csrf
                    <input type="hidden" name="employee_id" value="{{$e->id}}" >
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr> 
            @endforeach
        
        </table>
            
        
    </div>
 
</div>


@endsection