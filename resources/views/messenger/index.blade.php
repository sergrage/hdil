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
<!--                 <form action="{{ route('messages.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-12">
                        @if($users->count() > 0)
                            <div class="checkbox">
                                @foreach($users as $user)
                                    <label title="{{ $user->name }}">
                                        <input type="checkbox" name="recipients[]"
                                                                value="{{ $user->id }}">{!!$user->name!!}</label>
                                @endforeach
                            </div>
                        @endif
                        Subject Form Input
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                   value="{{ old('subject') }}">
                        </div>
                        <div class="type_msg">
                        Message Form Input
                        <div class="input_msg_write">
                              <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                              
                            </div>
                         </div>
                        <div class="form-group">
                            <button class="msg_send_btn" type="submit" type="button"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
                           </div>
                    </div>
                </form>  -->
		   			
		   		</div>

			</div>

		</div>

	</div>

</div>

@stop