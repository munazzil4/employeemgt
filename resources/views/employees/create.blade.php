@extends('employees.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Employee</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="f_name" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="l_name" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong for="gender"> Select you gender</strong>
                <select name="gender" class="form-control">
                <option value="none" selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Birth:</strong>
                <input type="date" name="dob" class="form-control" placeholder="DOB">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hire Date:</strong>
                <input type="date" name="hire" class="form-control" placeholder="hire">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Salary Details</strong>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Amount:</strong>
                <input type="text" name="salary" class="form-control" placeholder="Amount">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>From Date:</strong>
                <input type="date" name="froms" class="form-control" placeholder="From Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>To Date:</strong>
                <input type="date" name="tos" class="form-control" placeholder="To Date">
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Desgination Details</strong>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>From Date:</strong>
                <input type="date" name="fromt" class="form-control" placeholder="From Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>To Date:</strong>
                <input type="date" name="tot" class="form-control" placeholder="To Date">
            </div>
        </div>
        </div>
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <button type="submit" class="btn btn-primary">Add Employee</button>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('employees.index') }}"> Cancel</a>
        </div>
    </div>
    </div>
   
</form>
@endsection