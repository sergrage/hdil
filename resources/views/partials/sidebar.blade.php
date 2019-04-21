<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-center">{{$user->firstname}} {{$user->lastname}} <span class="badge badge-info" style="margin: auto auto auto 0; opacity: 0.5;">online</span></div>
    <center class="center">
      <a href="#"><img width="140" height="140" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
            class="rounded-circle"></a>
      <p>@if($user->skills->isNotEmpty())
         @foreach($user->skills as $skill)
          <span class="badge {{$user->bootstrapColors[array_rand($user->bootstrapColors, 1)]}}">{{ $skill->skill }}</span>
         @endforeach
         @endif
      </p>
    </center>

    <a href="{{route('cabinet.home')}}" class="list-group-item list-group-item-action bg-light border-right-0"><i class="fas fa-home"></i> Home Page</a>
    <a href="{{ route('fillprofile.edit') }}" class="list-group-item list-group-item-action bg-light border-right-0"><i class="far fa-edit"></i> Edit profile </a>
    <a href="{{ route('messages.index') }}" class="list-group-item list-group-item-action bg-light border-right-0"><i class="far fa-comment"></i> Message @include('messenger.unread-count') </a>
    <a href="#" class="list-group-item list-group-item-action bg-light border-right-0"><i class="fas fa-user-friends"></i> Community </a>
    <a href="#" class="list-group-item list-group-item-action bg-light border-right-0">Profile</a>
    <a href="#" class="list-group-item list-group-item-action bg-light border-right-0">Status</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!--   <center>
    <div class="cabinet-sidebar__avatar-wrapper">
      <img src="{{$user->getAvatar()}}" width="140" height="140">
    </div>
  </center> -->