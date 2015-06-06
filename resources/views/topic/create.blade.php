@extends('app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-md-10 col-md-offset-1'>
			<div class='panel panel-default'>
				<div class='panel-heading'>Ask new topic</div>
				<div class='panel-body'>
					<form class='form-horizontal' action='{{ route("topic.store") }}' method='post'>
						<div class='form-group'>
							<label for='subject' class='col-sm-2 control-label'>Title</label>
							<div class='col-sm-10'>
								<input type='text' class='form-control' name='subject' placeholder='Your topic title.'>
							</div>
						</div>
						<div class='form-group'>
							<label for='description' class='col-sm-2 control-label'>Description</label>
							<div class='col-sm-10'>
								<textarea class='form-control' rows='8' name='description' placeholder='Write description here.'></textarea>
							</div>
						</div>
						<div class='form-group'>
							<label for='description' class='col-sm-2 control-label'>Tag</label>
							<div class='col-sm-10'>
								<button type='button' class='btn btn-default'>Sport <span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></button>
								<button type='button' class='btn btn-default' data-toggle='modal' data-target='#modal-tag'>Add</button>
							</div>
						</div>
						<div class='form-group'>
							<div class='col-sm-10 col-sm-offset-2'>
								<button type='submit' class='btn btn-default'>Submit</button>
							</div>
						</div>
						<input type='hidden' name='tags[]' value='sport'>
						<input type='hidden' name='tags[]' value='travel'>
						<input type='hidden' name='_token' value='{{ csrf_token() }}'>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='modal-tag' class='modal fade' role='dialog'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h4 class='modal-title'>All about tags</h4>
			</div>
			<div class='modal-body'>
					<div class='row'>
						<div class='col-sm-4'>
							<ul class='list-group'>
								@foreach ($categories as $category)
								<a href='#' class='list-group-item'>{{ $category->name }}</a>
								@endforeach
							</ul>
						</div>
						<div class='col-sm-8'>
							@foreach ($categories as $category)
							<div class='hidden' data-category='{{ $category->name }}'>
								@foreach ($category->getTags as $tag)
								<div class='checkbox'>
									<label>
										<input type='checkbox' data-tag='{{ $tag->name }}'>
									</label>
								</div>
								@endforeach
							</div>
							@endforeach
						</div>
					</div>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-danger' data='close'>Close</button>
				<button type='button' class='btn btn-default' data='submit'>Submit</button>
			</div>
		</div>
	</div>
</div>
@endsection
