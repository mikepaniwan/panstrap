@if(session()->has('message') != '')
	<h3>Message : {{ session('message') }}</h3>
@endif
<form action="{{ route('member.store') }}" method="post">
	User Name
	<input type="text" name="name" value="{{ @$member->name }}">
	
	Img
	<input type="text" name="img" value="{{ @$member->img }}">
	
	<input type="submit" name="Edit">
	
	<input type="hidden" name="old_id" value="{{ @$member->id }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
<a href="{{ route('member.index') }}">Back</a>