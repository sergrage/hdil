<div class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto pt-3 px-4 cabinet-content">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		<h1 class="h2">{{$user->firstname}} {{$user->lastname}}</h1><span class="badge badge-info" style="margin: auto auto auto 0; opacity: 0.5;">online</span>
		<div class="btn-toolbar mb-2 mb-md-0">
		  <div class="btn-group mr-2 d-none d-lg-inline-flex">
		      <button class="btn btn-sm btn-outline-secondary fullBTN cabinetBTN">Full</button>
		      <button class="btn btn-sm btn-outline-secondary halfBTN cabinetBTN disabled">Half</button>
		  </div>
		  <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
		    <i class="fas fa-hands-helping"></i> to challenge
		  </button>
		    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    	<form action="" method="get" accept-charset="utf-8">
		    		<div class="input-group mb-2 mr-sm-2 cabinet-content__challenge-input-wrapper">
					    <div class="input-group-prepend">
					      <div class="input-group-text"><i class="far fa-check-square"></i></div>
					    </div>
					    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
					</div>
					<div class="form-group col-md-4">
				      <label for="inputState">State</label>
				      <select id="inputState" class="form-control">
				        <option selected>Choose...</option>
				        <option>Say your frend</option>
				        <option>Say to community</option>
				      </select>
				    </div>
					<button type="submit" class="btn btn-primary my-1">Submit</button>
		    	</form>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- Форма для создания карточек -->
		<div class="col-lg-6 cabinet-content__form-wrapper pb-4 pb-lg-0">
			<form action="" method="get" accept-charset="utf-8" class="cabinet-content__form">
				<div class="form-group">
					<label for="cardName">Card Name</label>
					<input type="" name="" id="cardName" class="form-control" placeholder="Enter">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="editor">Card Body</label>
					<textarea name="content" id="editor"></textarea>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
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
		<!-- Новости / Мануал -->
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
