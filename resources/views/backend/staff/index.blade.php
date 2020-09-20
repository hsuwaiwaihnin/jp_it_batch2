@extends('backendtemplate')
@section('title','Staff list')

@section('content')
<h1>Staff List</h1>
<a href="{{route('staff.create')}}">Add New Staff</a>
{{-- Table --}}
<table>
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
		<?= $i++ ?>
		<tr>
			<td>{{$i}}</td>
			<td>{{$row->name}}</td>
			<td>{{$row->phoneno}}</td>
			<td>
				<a href="{{route('staff.show',$row->id)}}">Detail</a>
				<a href="">Edit</a>
				<a href="">Delete</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection