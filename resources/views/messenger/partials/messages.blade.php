<div class="media">
    <a class="pull-left" href="#">
        <img src="{{ $message->user->getAvatar() }}" alt="{{ $message->user->name }}" class="mr-3" width="64" height="64">
    </a>
    <div class="media-body">
        <h5 class="mt-0">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>

<hr>