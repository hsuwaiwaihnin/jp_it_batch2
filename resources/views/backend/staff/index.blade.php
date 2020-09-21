@extends('backendtemplate')
@section('title','Staff list')

@section('content')

<h1>Staff List</h1>
<a href="{{route('staff.create')}}" class="btn btn-success mb-3">Add New Staff</a>
{{-- Table --}}
<div class="row">
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Phone Number</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=0 ?>
		@foreach($staff as $row)
		<?php $i++ ?>
		<tr>
			<td>{{$i}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->phoneno}}</td>
			<td>
				<a href="{{route('staff.show',$row->id)}}" class="btn btn-info">Detail</a>
				<a href="{{route('staff.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form action="{{route('staff.destroy',$row->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are u sure?')">
					@csrf
					@method('DELETE')
					<input type="submit" class="btn btn-danger" value="Delete">
				</form>
				
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection