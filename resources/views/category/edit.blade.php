@extends('../admin/template')

@section('admin-content')
@if(session()->has('message') != '')
	<h3>Message : {{ session('message') }}</h3>
@endif
<form action="{{ route('category.store') }}" method="post">
	<div class='col-md-1'>Name</div>
	<input type="text" name="name" value="{{ @$category->name }}">
	<br><br>
	<div class='col-md-1'></div>
	<a href="{{ route('category.index') }}" class='btn btn-primary'>Back</a>
	<input type="submit" class='btn btn-success' name="Edit">
	
	<input type="hidden" name="old_id" value="{{ @$category->id }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endsection