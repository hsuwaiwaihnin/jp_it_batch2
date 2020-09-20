@extends('backendtemplate')
@section('title','Staff Create')

@section('content')
<h1>Staff Create</h1>
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
{{-- Form --}}
<form method="post" action="{{route('staff.store')}}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="InputName">Name</label>
		<input type="text" class="form-control" id="InputName" name="name">
	</div>
	<div class="form-group">
		<label for="InputProfile">Profile</label>
		<input type="file" class="form-control" id="InputProfile" name="profile">
	</div>
	<div class="form-group">
		<label for="InputPhone">Phone No.</label>
		<input type="text" class="form-control" id="InputPhone" name="phoneno">
	</div>
	<div class="form-group">
		<label for="InputAddress">Address</label>
		<textarea class="form-control" id="InputAddress" name="address"></textarea>
	</div>
	<div class="form-group">
		<label for="InputSalary">Salary</label>
		<input type="number" class="form-control" id="InputSalary" name="salary">
	</div>
	<button type="submit" class="btn btn-primary">Create</button>	
</form>
@endsection