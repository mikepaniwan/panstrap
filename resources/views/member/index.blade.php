<table border='1'>
	<thead>
		<tr>
			<th>ID</th>
			<th>User Name</th>
			<th>Image</th>
			<th>Operation</th>
		</tr>
	</thead>
	<tbody>
		@foreach($member as $mem)
			<tr>
				<td>{{ $mem->id }}</td>
				<td>{{ $mem->name }}</td>
				<td>{{ $mem->rank }}</td>
				<td>
					<a href="{{ route('member.edit', ['id' => $mem->id]) }}">Edit</a>
					<a href="#">Delete</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>