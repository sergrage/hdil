@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 1em;">

<h1> Fill Profile </h1>
<hr>
    <!-- Sign up form -->
    @include('fillprofile.partials.fillprofileForm')
</div>

@endsection

@section('modalImage')

    @include('partials._modalImage')
    
@endsection