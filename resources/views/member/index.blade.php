@if(session()->has('message') != '')
	<h3>Message : {{ session('message') }}</h3>
@endif
<table border='1'>
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Image</th>
			<th>Operation</th>
		</tr>
	</thead>
	<tbody>
		@foreach($user as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->img }}</td>
				<td>
					<form action="{{ route('member.destroy', ['id' => $user->id]) }}" method='post'>
						<a href="{{ route('member.edit', ['id' => $user->id]) }}">Edit</a>
						<input type='hidden' name='_method' value='DELETE'>
						<input type='hidden' name='_token' value='{{ csrf_token() }}'>
						<input type='submit' onclick="return confirm('Are you ready ?');" value='Delete'>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>