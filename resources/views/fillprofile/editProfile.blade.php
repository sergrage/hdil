@extends('layouts.app')

@section('content')

<div class="container-fluid">
            
    <div class="d-flex" id="wrapper">
        <div class="row">
        @include('partials.sidebar')
        <div id="page-content-wrapper">
        <div class="container-fluid" style="margin-left: 15px;">
            @include('partials.cabinetBtn')
            <h1> Edit Profile </h1>
            <hr>
            <!-- Sign up form -->
            @include('fillprofile.partials.editForm')
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('modalImage')

    @include('partials._modalImage')
    
@endsection