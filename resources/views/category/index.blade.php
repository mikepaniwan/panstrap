@extends('../admin/template')

@section('admin-content')
@if(session()->has('message') != '')
	<h3>Message : {{ session('message') }}</h3>
@endif
<div class='col-md-11'></div><a href="{{ route('category.edit') }}" class='btn btn-primary'>Add</a>
<table class='table'>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Operation</th>
		</tr>
	</thead>
	<tbody>
		@foreach($category as $cate)
			<tr>
				<td>{{ $cate->id }}</td>
				<td>{{ $cate->name }}</td>
				<td><a href="{{ route('category.edit', ['id' => $cate->id]) }}" class='btn btn-success'>Edit</a></td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection