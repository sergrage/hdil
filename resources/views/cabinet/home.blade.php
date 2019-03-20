@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    		
		<div class="row">
			@include('cabinet.partials.cabinetSidebar')
			@include('cabinet.partials.cabinetContent')
    	</div>
    </div>
@endsection