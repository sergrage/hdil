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
	<div class="row">
		<!-- Форма для создания карточек -->
		<div class="col-lg-6 cabinet-content__form-wrapper pb-4 pb-lg-0">
				@include('cabinet.partials.forms.cardsForm')
		</div>
		<!-- Новости / Мануал -->
		<div class="col-lg-6 cabinet-news">
			<div class="jumbotron">
			  <h3>Hello, world!</h3>
			  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			  <hr class="my-4">
			  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			  <p class="lead">
			    <a class="btn btn-primary" href="#" role="button">Learn more</a>
			  </p>
			</div>
		</div>
		<!-- Cards List -->
		<div class="col-sm-6">
			<div class="card" style="margin: 1.75rem auto;">
				<div class="card-header">
					<h4>How did i learn <i class="pull-right fas fa-arrow-circle-down"></i></h4>
				  	<i class="far fa-edit"></i>
				  	<i class="far fa-trash-alt"></i>
				</div>
				<div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore.</p>
				</div>
		     	<div class="card-footer">
			    	<small>Last updated 3 mins ago</small>
			    	<div class="pull-right">
				    	<i class="far fa-thumbs-up">5</i>
				    	<i class="far fa-eye">112</i>
				    	<i class="far fa-comment">3</i>
				    </div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card" style="margin: 1.75rem auto;">
				<div class="card-header bg-info text-white">
					<h4>How did i learn <i class="pull-right fas fa-arrow-circle-down"></i></h4>
				  	<i class="far fa-edit"></i>
				  	<i class="far fa-trash-alt"></i>
				</div>
				<div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore.</p>
					</div>
			     	<div class="card-footer">
				    	<small>Last updated 3 mins ago</small>
				    	<div class="pull-right">
				    	<i class="far fa-thumbs-up">5</i>
				    	<i class="far fa-eye">112</i>
				    	<i class="far fa-comment">3</i>
				    </div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card" style="margin: 1.75rem auto;">
				<div class="card-header bg-warning text-white">
					<h4>How did i learn <i class="pull-right fas fa-arrow-circle-down"></i></h4>
				  	<i class="far fa-edit"></i>
				  	<i class="far fa-trash-alt"></i>
				</div>
				<div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore.</p>
					</div>
			     	<div class="card-footer">
				    	<small>Last updated 3 mins ago</small>
				    	<div class="pull-right">
				    	<i class="far fa-thumbs-up">5</i>
				    	<i class="far fa-eye">112</i>
				    	<i class="far fa-comment">3</i>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
