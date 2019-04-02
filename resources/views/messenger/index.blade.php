@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-flex" id="wrapper">
		<div class="row">
			@include('cabinet.partials.cabinetSidebar')
			<div id="page-content-wrapper">
				<div class="container-fluid" style="margin-left: 15px;">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 pt-3 border-bottom">
						<button class="btn btn-sm btn-outline-secondary" type="button" id="menu-toggle">
						    <i class="fas fa-arrow-left"></i> toggle menu
						</button>
						
						<div class="btn-toolbar">
						  <div class="btn-group mr-2 d-none d-lg-inline-flex">
						      <button class="btn btn-sm btn-outline-secondary fullBTN cabinetBTN">Full</button>
						      <button class="btn btn-sm btn-outline-secondary halfBTN cabinetBTN disabled">Half</button>
						  </div>
						  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonChallenge" aria-haspopup="true" aria-expanded="false">
						    <i class="fas fa-hands-helping"></i> to challenge
						  </button>
						    <div class="dropdown-menu" id="dropdown-menu-challenge" aria-labelledby="dropdownMenuButtonChallenge">
								@include('cabinet.partials.forms.challengeForm')
							</div>
						</div>
					</div>
					    <h1>Create a new message</h1>
						    <form action="{{ route('messages.store') }}" method="post">
						        {{ csrf_field() }}
						        <div class="col-12">
						            <!-- Subject Form Input -->
						            <div class="form-group">
						                <label class="control-label">Subject</label>
						                <input type="text" class="form-control" name="subject" placeholder="Subject"
						                       value="{{ old('subject') }}">
						            </div>

						            <!-- Message Form Input -->
						            <div class="form-group">
						                <label class="control-label">Message</label>
						                <textarea name="message" class="form-control">{{ old('message') }}</textarea>
						            </div>

						            @if($users->count() > 0)
						                <div class="checkbox">
						                    @foreach($users as $user)
						                        <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]"
						                                                                value="{{ $user->id }}">{!!$user->name!!}</label>
						                    @endforeach
						                </div>
						            @endif
						    
						            <!-- Submit Form Input -->
						            <div class="form-group">
						                <button type="submit" class="btn btn-info form-control">Submit</button>
						            </div>
						        </div>
						    </form>
				@include('messenger.partials.flash')
		   		@each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
		   		</div>
			</div>
		</div>
	</div>
</div>

@stop