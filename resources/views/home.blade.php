@extends('admin/template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">Panstrap Trend</div>

				<div class="panel-body">
					@foreach($trends as $trend)
					<div class="media">
				      <div class="media-left">
				        <a href="#">
				          <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjEzLjkyMTg3NSIgeT0iMzIiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj42NHg2NDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true" style="width: 64px; height: 64px;">
				        </a>
				      </div>
				      <div class="media-body">
				        <h4 class="media-heading" id="top-aligned-media">{{ $trend->getTopic->subject }}<a class="anchorjs-link" href="#top-aligned-media"><span class="anchorjs-icon"></span></a></h4>
				        <p>{{ $trend->getTopic->description }}</p>
				      </div>
				    </div>
				    @endforeach
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="list-group">
			  <a href="#" class="list-group-item">
			    <h4 class="list-group-item-heading">List group item heading</h4>
			    <p class="list-group-item-text">...</p>
			  </a>
			</div>
		</div>
	</div>
</div>
@endsection
