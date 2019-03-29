<form action="{{route('challenge')}}" method="post" accept-charset="utf-8">
	@csrf
	<div class="input-group mb-2 mr-sm-2 cabinet-content__challenge-input-wrapper">
	    <div class="input-group-prepend">
	      <div class="input-group-text"><i class="far fa-check-square"></i></div>
	    </div>
	    <input type="text" name="skill" class="form-control" placeholder="Skill">
	</div>
	<div class="input-group mb-1 mr-sm-2 cabinet-content__challenge-input-wrapper cabinet-content__challenge-email" style="display: none">
	    <div class="input-group-prepend">
	      <div class="input-group-text">@</div>
	    </div>
	    <input type="email" id="challengeEmailInput" name="email" class="form-control" placeholder="Email" disabled>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="whereToSend" id="communityRadios" value="toCommunity" checked>
	  <label class="form-check-label" for="communityRadios">Challenge to community</label>
	</div>
	<div class="form-check">
	  <input class="form-check-input" type="radio" name="whereToSend" id="friendRadios" value="toFriend">
	  <label class="form-check-label" for="friendRadios">Challenge to friend</label>
	</div>
	<button type="submit" class="btn btn-info my-1">Send challenge</button>
</form>