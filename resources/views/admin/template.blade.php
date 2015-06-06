@extends('../app')

@section('content')
	<!--div class="container" -->
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
			<li role="presentation" class="active"><a href="#">Member</a></li>
			<li role="presentation"><a href="#">Catagories</a></li>
			<li role="presentation"><a href="#">Tag</a></li>
			<li role="presentation"><a href="#">Trend</a></li>
			<li role="presentation"><a href="#">Topic</a></li>
			</ul>
		</div>
		<div class="col-md-10">
			@yield("admin-content")
		</div>
	</div>
	<!--/div-->
@endsection