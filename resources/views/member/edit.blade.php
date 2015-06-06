@extends('../admin/template')

@section('admin-content')
@if(session()->has('message') != '')
	<h3>Message : {{ session('message') }}</h3>
@endif
<form action="{{ route('member.store') }}" method="post">
	<div class='col-md-1'>Username</div>
	<input type="text" name="name" value="{{ @$user->name }}">
	<br><br>
	<div class='col-md-1'>Img</div>
	<input type="text" name="img" value="{{ @$user->img }}">
	<br><br>
	<div class='col-md-1'></div>
	<a href="{{ route('member.index') }}" class='btn btn-primary'>Back</a>
	<input type="submit" class='btn btn-success' name="Edit">
	
	<input type="hidden" name="old_id" value="{{ @$user->id }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@endsection