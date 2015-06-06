@extends( '../admin/template')

@section('admin-content')
<table class='table'>
	<thead>
		<tr>
			<td>ID</td>
			<td>topic</td>
			<td>User</td>
			<td>Trend</td>
		<tr>
	</thead>
	<tbody>
		@foreach($topic as $topic)
		<tr>
			<td> {{$topic->id}}</td>
			<td> {{$topic->subject}}</td>
			<td> {{$topic->getUser->name}}</td>
			<td>
				@if($topic->getTrend == "")
						<a href="{{ route('trend.create',['id' => $topic->id]) }}">Add</a>
				@else
					
					<form action="{{ route('trend.destroy',['id' => $topic->id])}}" method="post">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value = "{{ csrf_token()}}" >
						<input type="submit" onclick="return confirm ('Lets go??');" value="remove">
					</form>
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection