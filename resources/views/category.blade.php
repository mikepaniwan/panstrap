@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">Panstrap Trend</div>

				<div class="panel-body">
					@foreach($trends as $trend)
					<div class="media">
				      <div class="media-body">
				        <h4 class="media-heading" id="top-aligned-media"><a href='#'>{{ $trend->getTopic->subject }}</a><a class="anchorjs-link" href="#top-aligned-media"><span class="anchorjs-icon"></span></a></h4>
				        <p>Posted By <a href='#'>{{ $trend->getTopic->getUser->name }}</a></p>
				      </div>
				    </div>
				    @endforeach
				</div>
			</div>
		</div>
		<div class="col-md-4">
			@foreach($categories as $category)
			<div class="list-group">
			  <a href="#" class="list-group-item">
			    <h4 class="list-group-item-heading">{{ $category->name }}</h4>
			    <p class="list-group-item-text">
			    	@foreach($category->getTags as $tag)
			    	{{ $tag->name }} 
			    	@endforeach
			    </p>
			  </a>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
