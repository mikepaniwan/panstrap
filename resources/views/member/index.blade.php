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
		@foreach($member as $mem)
			<tr>
				<td>{{ $mem->id }}</td>
				<td>{{ $mem->name }}</td>
				<td>{{ $mem->img }}</td>
				<td>
					<a href="{{ route('member.edit', ['id' => $mem->id]) }}">Edit</a>
					<a href="#">Delete</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>