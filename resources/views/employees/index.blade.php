@extends('employees.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Create New employee</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Hire</th>
            <th>DOB</th>
            <th>Salary</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Title</th>
            <th>From Date</th>
            <th>To Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $employee->f_name }}</td>
            <td>{{ $employee->l_name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->hire }}</td>
            <td>{{ $employee->dob }}</td>
            <td>{{ $employee->salary }}</td>
            <td>{{ $employee->froms }}</td>
            <td>{{ $employee->tos }}</td>
            <td>{{ $employee->title }}</td>
            <td>{{ $employee->fromt }}</td>
            <td>{{ $employee->tot }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employees->links() !!}
      
@endsection