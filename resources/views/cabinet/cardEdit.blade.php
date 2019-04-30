@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    	<div class="d-flex" id="wrapper">
			<div class="row">
				@include('partials.sidebar')
				<div id="page-content-wrapper">

					<div class="container-fluid" style="margin-left: 15px;">
					@include('partials.cabinetBtn')
						<div class="row">
							<!-- Форма для создания карточек -->
							<div class="col-lg-6 cabinet-content__form-wrapper pb-4 pb-lg-0">
									@include('cabinet.partials.forms.cardsEditForm')
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    </div>
    </div>
@endsection

@section('ClassicEditor')

<script src="{{ mix('/app/js/ClassicEditor.js') }}"></script>
    
@endsection