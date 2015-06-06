@extends('app')

@section('content')
<div class='container'>
	<div class='row'>
		<div class='col-md-10 col-md-offset-1'>
			<div class='panel panel-default'>
				<div class='panel-heading'>Ask new topic</div>
				<div class='panel-body'>
					<form class='form-horizontal' action='{{ route("topic.store") }}' method='post' id='container-form'>
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
							<div class='col-sm-10' id='container-tag'>
								<button type='button' class='btn btn-default' data-toggle='modal' data-target='#modal-tag'>Add</button>
							</div>
						</div>
						<div class='form-group'>
							<div class='col-sm-10 col-sm-offset-2'>
								<button type='submit' class='btn btn-default'>Submit</button>
							</div>
						</div>
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
								<a href='#' class='list-group-item' data-role='toggle' data-category='{{ $category->id }}'>{{ $category->name }}</a>
								@endforeach
							</ul>
						</div>
						<div class='col-sm-8'>
							@foreach ($categories as $category)
							<div class='hidden' data-role='category' data-category='{{ $category->id }}'>
								@foreach ($category->getTags as $tag)
								<div class='checkbox'>
									<label>
										<input type='checkbox' data-role='tag' value='{{  $tag->id }}:{{  $tag->name }}'>
										{{ $tag->name }}
									</label>
								</div>
								@endforeach
							</div>
							@endforeach
						</div>
					</div>
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-danger' data-role='close' data-dismiss='modal'>Close</button>
				<button type='button' class='btn btn-default' data-role='submit'>Submit</button>
			</div>
		</div>
	</div>
</div>
<div id='template-tag' class='hidden'>
	<button type='button' class='btn btn-default' data-value=''><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></button>
	<input type='hidden' name='tags[]' value=''>
</div>
@endsection

@section('script')
<script>
	// Modal Tag Handler
	$(function () {
		var $modal      = $('#modal-tag'),
				$toggles    = $modal.find('[data-role="toggle"]'),
				$categories = $modal.find('[data-role="category"]'),
				$tags       = $modal.find('[data-role="tag"]'),
				$close      = $modal.find('[data-role="close"]'),
				$submit     = $modal.find('[data-role="submit"]'),
				$active     = $categories.first();

		function createTag(tagValues) {
			var $formContainer = $('#container-form'),
					$tagContainer  = $('#container-tag'),
					$templateTag   = $('#template-tag');

			$(tagValues).each(function (index, tagValue) {
				var $button = $templateTag.find('button').clone(),
						$input  = $templateTag.find('input').clone();
				var tagId   = tagValue.split(':')[0],
						tagName = tagValue.split(':')[1];;

				$input.val(tagId);
				$formContainer.append($input);

				$button.prepend(document.createTextNode(tagName + ' '));
				$button.data('value', tagId);
				$button.insertBefore($tagContainer.children().last());
				$button.after(' ');

				$button.click(function () {
					var $button = $(this);
					$formContainer.find(
						'input[value=' + $button.data('value') + ']'
					).remove();
					$button.remove();
				});
			});
		}

		$toggles.click(function (event) {
			var $category = $categories.filter(
				'[data-category=' + $(this).data('category') + ']'
			);
			$active.addClass('hidden');
			$category.removeClass('hidden');
			$active = $category;
			event.preventDefault();
		});

		$close.click(function () {
			$tags.each(function (index, tag) {
				tag.checked = false;
			});
			$toggles.first().click();
		});

		$submit.click(function () {
			var tagValues = [];
			$tags.each(function (index, tag) {
				if (tag.checked) {
					tagValues.push($(tag).val())
				};
			});
			createTag(tagValues);
			$close.click();
		});

		$close.click();
	});
</script>
@endsection
