@extends('backendtemplate')
@section('title','Staff Detail')

@section('content')
<div class="row">
<div class="col-md-12">
<h1>Staff Details</h1>

<img src="{{asset($staff->profile)}}" alt="Satff's Profile" class="img-fluid w-25 h-50">
<p>Name: {{$staff->name}}</p>
<p>Phone No: {{$staff->phoneno}}</p>
<p>Address: {{$staff->address}}</p>
<p>Salary: {{$staff->salary}}</p>
<p>Department: {{$staff->department->name}}</p>
<p>Position: {{$staff->position->name}}</p>
<a href="{{route('staff.index')}}" class="btn btn-success">Back</a>
</div>
</div>
@endsection