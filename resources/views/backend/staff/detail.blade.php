@extends('backendtemplate')
@section('title','Staff Detail')

@section('content')
<h1>Staff Detail</h1>
<a href="{{route('staff.index')}}">Back</a>

<img src="{{asset($staff->profile)}}" alt="Satff's Profile" style="width: 150px; height: 150px;">
<p>Name: {{$staff->name}}</p>
<p>Phone No: {{$staff->phoneno}}</p>
<p>Address: {{$staff->address}}</p>
<p>Salary: {{$staff->salary}}</p>

@endsection