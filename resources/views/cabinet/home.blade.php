@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    	<div class="d-flex" id="wrapper">
			<div class="row">
				@include('cabinet.partials.cabinetSidebar')
				<div id="page-content-wrapper">
					@include('cabinet.partials.cabinetContent')
				</div>
	    	</div>
	    </div>
    </div>
@endsection

@section('ClassicEditor')

<script src="{{ mix('/app/js/ClassicEditor.js') }}"></script>
    
@endsection