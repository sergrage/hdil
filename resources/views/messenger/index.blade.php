@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-flex" id="wrapper">
		<div class="row">
			@include('partials.sidebar')
			<div id="page-content-wrapper">
				<div class="container-fluid" style="margin-left: 15px;">
					@include('partials.cabinetBtn')
					
					@include('messenger.partials.flash')

			   		@foreach($threads as $thread)
						@include('messenger.partials.thread')
			   		@endforeach
		   		</div>
			</div>
		</div>
	</div>
</div>

@stop