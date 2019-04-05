<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <img class="message__avatar" src="{{ $user->getAvatar() }}" alt="user avatar" width="64" height="64">
    <div class="media-body ml-1">
        <h5 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h5>
        <p>
            {{ $thread->latestMessage->body }}
        </p>
        <p>
            <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
            <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
        </p>
        <p>
            
        </p>
    </div>    
</div>