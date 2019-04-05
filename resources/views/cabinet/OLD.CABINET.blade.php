<!--<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">
            	<a href="{{route('fillprofile.edit', $user->id)}}" class="btn btn-info"><i class="far fa-edit"></i> Edit Profile</a>
            	<a href="#" class="btn btn-info"><i class="fas fa-plus"></i> Add Card</a>
            </h4>
        </div>
        <div class="modal-body">
            <center>
            <img src="{{$avatar}}" name="aboutme" width="140" height="140" border="0" class="img-thumbnail"></a>
            <h3 class="media-heading">{{$user->firstname}} {{$user->lastname}}</h3>
            <span><strong>Skills: </strong></span>
            @if($user->skills->isNotEmpty())
            @foreach($user->skills as $skill)
                <span class="badge {{$bootstrapColors[array_rand($bootstrapColors, 1)]}}">{{ $skill->skill }}</span>
            @endforeach
            @else
			<a href="{{route('fillprofile.edit', $user->id)}}" class="btn btn-info btn-sm">
				<i class="far fa-edit"></i> Edit profile and add your skills</a>
            @endif
            </center>
            <hr>
            @if($user->bio)
            <p class="text-left"><strong>Bio: </strong><br>
                {{ $user->bio }}</p>
            <br>
            @else
            <a href="{{route('fillprofile.edit', $user->id)}}" class="btn btn-info btn-sm">
				<i class="far fa-edit"></i> Edit profile and add your bio</a>
            @endif
        </div>
        <div class="modal-footer">
        	@if($user->facebook)
			<i class="fab fa-facebook"></i>
			<i class="fab fa-twitter-square"></i>
			<i class="fab fa-github-square"></i>
			<i class="fab fa-github-square"></i>
			@else
			<a href="{{route('fillprofile.edit', $user->id)}}" class="btn btn-info btn-sm"><i class="far fa-edit"></i> Edit profile and add your social pages</a>
        	@endif
        </div>
    </div>
</div> -->