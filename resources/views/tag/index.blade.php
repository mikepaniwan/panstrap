@extends('../admin/template')

@section('admin-content')
@if(session()->has('message') != '')
	<h3>Message : {{ session('message') }}</h3>
@endif
<div class='col-md-11'></div><a href="{{ route('tag.edit') }}" class='btn btn-primary'>Add</a>
<table class='table'>
	<thead>
		<tr>
			<th>ID</th>
			<th>Category ID</th>
			<th>Name</th>
			<th>Operation</th>
		</tr>
	</thead>
	<tbody>
		@foreach($tag as $tag)
			<tr>
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->category_id }}</td>
				<td>{{ $tag->name }}</td>
				<td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class='btn btn-success'>Edit</a></td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection