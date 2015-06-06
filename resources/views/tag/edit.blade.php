@extends('../admin/template')

@section('admin-content')
@if(session()->has('message') != '')
	<h3>Message : {{ session('message') }}</h3>
@endif
<form action="{{ route('tag.store') }}" method="post">
	<div class='col-md-2'>Category ID</div>
	<input type="text" name="category_id" value="{{ @$tag->category_id }}">
	<br><br>
	<div class='col-md-2'>Name</div>
	<input type="text" name="name" value="{{ @$tag->name }}">
	<br><br>
	<div class='col-md-1'></div>
	<a href="{{ route('tag.index') }}" class='btn btn-primary'>Back</a>
	<input type="submit" class='btn btn-success' name="Edit">
	
	<input type="hidden" name="old_id" value="{{ @$tag->id }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endsection