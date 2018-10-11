@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <p>{{ Auth::user()->carbonTest() }}</p> 
                </div>

                @foreach($users as $user)

                <p> {{ $user->id }} </p>

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
