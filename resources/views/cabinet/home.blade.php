@extends('layouts.app')

@section('content')
    <div class="container">
    	<div class="row">
    		
			<div class="col-md-4">
		        <div class="modal-dialog">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <h4 class="modal-title">
		                    	<a href="#" class="btn btn-info"><i class="far fa-edit"></i> Edit Profile</a>
		                    	<a href="#" class="btn btn-info"><i class="fas fa-plus"></i> Add Card</a>
		                    </h4>
		                </div>
		                <div class="modal-body">
		                    <center>
		                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-thumbnail"></a>
		                    <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
		                    <span><strong>Skills: </strong></span>
		                        <span class="badge badge-warning">HTML5/CSS</span>
		                        <span class="badge badge-info">Adobe CS 5.5</span>
		                        <span class="badge badge-info">Microsoft Office</span>
		                        <span class="badge badge-success">Windows XP, Vista, 7</span>
		                    </center>
		                    <hr>
		                    <p class="text-left"><strong>Bio: </strong><br>
		                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
		                    <br>
		                </div>
		                <div class="modal-footer">
							<i class="fab fa-facebook"></i>
							<i class="fab fa-twitter-square"></i>
							<i class="fab fa-github-square"></i>
		                </div>
		            </div>
		        </div>
		    </div>
			<div class="col-md-8">

					<div class="row">
						<div class="col-sm-6">
							<div class="card" style="margin: 1.75rem auto;">
								<div class="card-header">
									<h4>How did i learn <i class="pull-right fas fa-arrow-circle-down"></i></h4>
								  	<i class="far fa-edit"></i>
								  	<i class="far fa-trash-alt"></i>
								</div>
<!-- 							  <img class="card-img-top" src="https://habrastorage.org/webt/ks/ta/wd/kstawdh9qq_e7ocb6wk-izoxqmg.png" name="aboutme" class="img-fluid" alt="Card image cap"> -->
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

				<div class="card-blocks">
	            <div class="card-item panel">
	                <div class="card-head panel-heading">Card Ten <span class="pull-right"></span></div>
	                <div class="card-body panel-body">Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient to Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it's not genuine, correct, or comprehensible Latin anymore. </div>
	                <div class="card-foot panel-footer"><a href="#" class="btn btn-link">Read more</a></div>
	            </div>
			</div>
			</div>
    	</div>
    </div>

@endsection