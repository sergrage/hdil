@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex" id="wrapper">
            <div class="row">
                @include('partials.sidebar')
                <div id="page-content-wrapper">
                    <div class="container-fluid" style="margin-left: 15px;">
                     @include('partials.cabinetBtn')
                    <div class="row">
                        <!-- users List -->
                        @foreach($users as $person)
                        <div class="col-sm-12">
                            <div class="card" style="margin: 1.75rem auto;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$person->firstname}} {{$person->lastname}}</h5>
                                    <img src="{{$person->getAvatar()}}" alt="" width="140" height="140" style="border-radius: 50%;">
                                    <p class="card-text">{{$person->bio}}</p>
                                </div>
                                <div class="card-footer">
                                    <small>Last updated 3 mins ago</small>
                                    <div class="pull-right">
                                        @if($person->skills->isNotEmpty())
                                         @foreach($person->skills as $skill)
                                          <span class="badge {{$user->bootstrapColors[array_rand($user->bootstrapColors, 1)]}}">{{ $skill->skill }}</span>
                                         @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
