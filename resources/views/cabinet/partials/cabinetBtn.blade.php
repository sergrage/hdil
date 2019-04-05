<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 pt-3 border-bottom">
	<button class="btn btn-sm btn-outline-secondary" type="button" id="menu-toggle">
	    <i class="fas fa-arrow-left"></i> toggle menu
	</button>
	
	<div class="btn-toolbar">
	  <div class="btn-group mr-2 d-none d-lg-inline-flex">
	      <button class="btn btn-sm btn-outline-secondary fullBTN cabinetBTN">Full</button>
	      <button class="btn btn-sm btn-outline-secondary halfBTN cabinetBTN disabled">Half</button>
	  </div>
	  <form action="{{route('cabinet.carbonTest')}}" method="POST" accept-charset="utf-8">
	  	@csrf
	  	<button type="submit" class="btn btn-info my-1">
	  	CARBON TEST</button>
	  </form>
	  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonChallenge" aria-haspopup="true" aria-expanded="false">
	    <i class="fas fa-hands-helping"></i> to challenge
	  </button>
	    <div class="dropdown-menu" id="dropdown-menu-challenge" aria-labelledby="dropdownMenuButtonChallenge">
			@include('cabinet.partials.forms.challengeForm')
		</div>
	</div>
</div>