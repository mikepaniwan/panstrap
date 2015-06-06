<form>
	User Name
	<input type="text" name="user_name" value="{{ @$member->name }}">
	
	Img
	<input type="text" name="img" value="{{ @$member->img }}">
	
	<input type="submit" name="Edit">
</form>
<a href="{{ route('member.index') }}">Back</a>