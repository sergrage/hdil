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
								    	<small>Last updated 3 mins ago</small>
								    	<div class="pull-right">
									    	<span class="btn {{ auth()->user()->hasLiked($card) ? 'like-post' : '' }}">
					                            <i id="like{{$card->id}}" class="far fa-thumbs-up "></i> <span id="like{{$card->id}}-bs3">{{ $card->likers()->get()->count() }}</span>
					                        </span>
									    	<i class="far fa-eye p-1">{{ $card->views }}</i>
									    	<i class="far fa-comment p-1">{{ $card->commentsNumber }}</i>
									    </div>
									    <a href="{{route('cabinet.home')}}" class="btn btn-primary">Back</a>
									</div>
								</div>
							</div>

							<div class="col-12">
								<h4>Comments</h4>
									<div class="card">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	        <p class="text-secondary text-center">15 Minutes Ago</p>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>
        	       <div class="clearfix"></div>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	        <p>
        	            <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
        	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
        	       </p>
        	    </div>
	        </div>
	        	<div class="card card-inner">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-md-2">
                    	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    	        <p class="text-secondary text-center">15 Minutes Ago</p>
                    	    </div>
                    	    <div class="col-md-10">
                    	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                    	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    	        <p>
                    	            <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a>
                    	            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                    	       </p>
                    	    </div>
            	        </div>
            	    </div>
	            </div>
	    </div>
	</div>
							</div>
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