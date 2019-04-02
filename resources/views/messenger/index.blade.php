@extends('layouts.app')

@section('content')

    <div class="container-fluid">
    		
		<div class="row">
			@include('cabinet.partials.cabinetSidebar')
			<div class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto pt-3 px-4">
				@include('messenger.partials.flash')
		   		@each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
			</div>
    	</div>
    </div>

@stop