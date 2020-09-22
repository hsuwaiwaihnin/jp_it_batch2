@extends('backendtemplate')
@section('title','Staff Edit')

@section('content')
<h1>Staff Edit</h1>
{{-- Error --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="row">
{{-- Form --}}
<form method="post" action="{{route('staff.update',$staff->id)}}" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label for="InputProfile">Profile</label>
		<input type="file" class="form-control-file" id="InputProfile" name="profile">
		<img src="{{asset($staff->profile)}}" alt="Profile" class="img-fluid w-25 h-25">
		<input type="hidden" name="oldprofile" value="{{$staff->profile}}">
	</div>
	<div class="form-group">
		<label for="InputName">Name</label>
		<input type="text" class="form-control" id="InputName" name="name" value="{{$staff->name}}">
	</div>
	{{-- <div class="form-group">
		<label for="InputDepartment">Department:</label>
		<select name="department" class="form-control">
			<optgroup label="Choose Department">
				@foreach($departments as $row)
				<option value="{{$row->id}}">{{$row->name}}</option>
				@endforeach
			</optgroup>
		</select>
	</div>
	<div class="form-group">
		<label for="InputPosition">Position:</label>
		<select name="position" class="form-control">
			<optgroup label="Choose Position">
				@foreach($positions as $row)
				<option value="{{$row->id}}">{{$row->name}}</option>
				@endforeach
			</optgroup>
		</select>
	</div> --}}
	<div class="form-group">
		<label for="InputPhone">Phone No.</label>
		<input type="text" class="form-control" id="InputPhone" name="phoneno" value="{{$staff->phoneno}}">
	</div>
	<div class="form-group">
		<label for="InputAddress">Address</label>
		<textarea class="form-control" id="InputAddress" name="address">{{$staff->address}}</textarea>
	</div>
	<div class="form-group">
		<label for="InputSalary">Salary</label>
		<input type="number" class="form-control" id="InputSalary" name="salary" value="{{$staff->salary}}">
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
	<a href="{{route('staff.index')}}" class="btn btn-success float-right">Back</a>	
</form>
</div>
@endsection