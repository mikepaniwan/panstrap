@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					{{ $category->name }}
				</div>

				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th width="65%">Topic</th>
								<th width="35%">Tags</th>
							</tr>
						</thead>
						<tbody>
							@foreach($topics as $topic)
							<tr>
								<td>
									<a href='#'>
										{{ $topic['topic']->subject }}
									</a>
										<p>Posted by {{$topic['topic']->getUser->name }}</p>
								</td>
								<td>
									@foreach($topic['tag'] as $tag)
									{{ $tag }}
									@endforeach
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
