<?php $class = $thread->isUnread(Auth::id()) ? 'thread__wrapper-info' : ''; ?>
<a href="{{ route('messages.show', $thread->id) }}" class="thread__link">
<div class="media alert {{ $class }}">
    <img class="message__avatar" src="{{ $user->getAvatar() }}" alt="user avatar" width="64" height="64">
    <div class="media-body ml-1">
        <h4 class="media-heading">{{ $thread->subject }}</h4>
        <p>
            {{ $thread->latestMessage->body }}
            
            <div>

                @foreach($thread->users->where('name', $thread->participantsString(Auth::id())) as $user)
                    <img src="{{ $user->getAvatar() }}" alt="user avatar" width="64" height="64"> 
                @endforeach

            </div>

        </p>
        <p>
            <small><strong>Participants:</strong> {{ $thread->participantsString()}}</small>
        </p>
        <p>
            
        </p>
    </div>    
</div>
</a>
<hr>