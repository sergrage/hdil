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
							<div class="col-12 cabinet-content__form-wrapper">
								<div class="card" data-id="{{ $card->id }}" style="margin: 1.75rem auto;">
									<div class="card-header">
										<h4>How did i learn</h4>
										<h5><a href="#">
										@foreach($card->category->ancestors as $ancestor)
											{{ $ancestor->name }}  /
										@endforeach
										{{$card->category->name}}
										</a></h5>
									</div>
									<div class="card-body">
										<h5 class="card-title">{{ $card->name }}</h5>
										<p class="card-text">{!! $card->content !!}</p>
									</div>
							     	<div class="card-footer">
								    	<div class="float-left">
									    	<span class="btn p-0 border-0 align-middle {{ auth()->user()->hasLiked($card) ? 'like-post' : '' }}">
					                            <i id="like{{$card->id}}" class="far fa-thumbs-up "></i> <span id="like{{$card->id}}-bs3">{{ $card->likers()->get()->count() }}</span>
					                        </span>
					                        /
					                        <span class="align-middle">
									    	<i class="far fa-eye p-1"><span class="pl-1">{{ $card->views }}</span></i>
									    	</span>
									    	/
					                        <span class="align-middle">
									    	<i class="far fa-comment p-1"><span class="pl-1">{{ $card->commentsNumber }}</span></i>
									    	</span>
					                        <div class=""><small>Last updated 3 mins ago</small></div>
									    </div>
									    <a href="{{route('cabinet.home')}}" class="btn btn-primary float-right">Back</a>
									</div>
								</div>
                                <hr>
							</div>
                        @include('cabinet.partials.cabinetComments')

						</div>
					</div>
				</div>
	    	</div>
	    </div>
    </div>
@endsection

@section('cardLikes')

<script type="text/javascript">
    $(document).ready(function() {     

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('i.fa-thumbs-up, i.fa-thumbs-down').click(function(){
        // находит id карточки    
            var id = $(this).parents(".card").data('id');
            console.log(id);
        // берет значение числа лайков
            var c = $('#'+this.id+'-bs3').html();
            console.log(c);
        // 
            var cObjId = this.id;
            console.log(cObjId);
            var cObj = $(this);
            console.log(cObj);


            $.ajax({
               type:'POST',
               url:'/ajaxRequest',
               data:{id:id},
               success:function(data){
                  if(jQuery.isEmptyObject(data.success.attached)){
                    $('#'+cObjId+'-bs3').html(parseInt(c)-1);
                    $(cObj).removeClass("like-post");
                  }else{
                    $('#'+cObjId+'-bs3').html(parseInt(c)+1);
                    $(cObj).addClass("like-post");
                  }
               }
            });
        });      

        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });                                        
    }); 
</script>

@endsection