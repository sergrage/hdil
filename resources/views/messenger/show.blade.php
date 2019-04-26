@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="d-flex" id="wrapper">
		<div class="row">
		@include('partials.sidebar')
			<div id="page-content-wrapper">
				<div class="container-fluid" style="margin-left: 15px;">
				@include('partials.cabinetBtn')
			    <div class="col-12">
			        <h2>{{ $thread->subject }}</h2>
			        <hr>
			        @each('messenger.partials.messages', $thread->messages, 'message')

			        

			        @include('messenger.partials.form-message')
			    </div>
		    </div>
			</div>
		</div>
	</div>
</div>
@stop