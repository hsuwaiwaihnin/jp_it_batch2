@extends('backendtemplate')
@section('title','Post list')

@section('content')

<h1>Post List</h1>
<a href="{{route('posts.create')}}" class="btn btn-success mb-3">Add New Post</a>
<div class="row">
<table class="table my-3">
	<thead>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Category</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $row)
		<tr>
			<td>{{$row->id}}</td>
			<td>{{$row->title}}</td>
			<td>{{$row->category_id}}</td>
			<td>
				<a href="{{route('posts.show',$row->id)}}" class="btn btn-info">Detail</a>
				<a href="{{route('posts.edit',$row->id)}}" class="btn btn-warning">Edit</a>
				<form method="post" action="{{route('posts.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
					@csrf
					@method('DELETE')
					<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection