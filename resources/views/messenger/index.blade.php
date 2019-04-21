@extends('layouts.app')

@section('content')

<div class="container-fluid">
	<div class="d-flex" id="wrapper">
		<div class="row">
			@include('partials.sidebar')
			<div id="page-content-wrapper">
				<div class="container-fluid" style="margin-left: 15px;">
					@include('partials.cabinetBtn')
					
<!-- <form action="{{ route('messages.store') }}" method="post">
    {{ csrf_field() }}
    <div class="col-12">
        Subject Form Input
        <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Subject"
                   value="{{ old('subject') }}">
        </div>

        Message Form Input
        <div class="form-group">
            <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
        </div>

        @if($users->count() > 0)
            <div class="checkbox">
                @foreach($users as $user)
                    <label title="{{ $user->name }}">
                    	<input type="checkbox" name="recipients[]"
                                            	value="{{ $user->id }}">{!!$user->name!!}</label>
                @endforeach
            </div>
        @endif

        Submit Form Input
        <div class="form-group">
            <button type="submit" class="btn btn-info form-control">Submit</button>
        </div>
    </div>
</form> -->			

					@include('messenger.partials.flash')

			   		@foreach($threads as $thread)
						@include('messenger.partials.thread')
			   		@endforeach

		   			<div class="type_msg">
					    <div class="input_msg_write">
					      <input type="text" class="write_msg" placeholder="Type a message" />
					      <button class="msg_send_btn" type="button"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
					    </div>
					</div>
		   		</div>

			</div>

		</div>

	</div>

</div>

@stop