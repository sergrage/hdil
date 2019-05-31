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

							<div class="col-12">
								<h4>Comments</h4>
                                    <form action="{{ route('cabinet.addComment', $card->id) }}" method="post" accept-charset="utf-8" class="pb-3">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon">
                                                        <i class="fas fa-pencil-alt prefix"></i>
                                                    </span>
                                                </div>
                                                <textarea id="comment-textarea" class="form-control" name="comment" rows="5"></textarea>
                                                <input id="input-comment-rate" type="hidden" name="comment-rate" value="">
                                                <input id="input-comment-id" type="hidden" name="comment-id" value="">
                                                <input id="input-comment-name" type="hidden" name="comment-name" value="">
                                            </div>
                                        </div>
                                          <div class="form-group">
                                              <button type="submit" class="btn btn-info">add Comment</button>
                                          </div>
                                    </form>
                                 
    @foreach($card->comments as $comment)
		<div class="card mb-3">
    	    <div class="card-body">
    	        <div class="row">
            	    <div class="col-md-2 text-center">
                        <h5><a href="#">{{$comment->getUserName()}}</a></h5>
            	        <img src="{{App\Models\User::find($comment->commented_id)->getAvatar()}}" class="rounded-circle img-thumbnail" width="140" height="140">
            	        <p class="text-secondary">add {{$comment->createdForHumans()}}</p>
            	    </div>
            	    <div class="col-md-10">
<!--<p>
            	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong><p>{{$comment->getUserName() }}</p></strong></a>
            	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
            	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
            	            <span class="float-right"><i class="text-warning fa fa-star"></i></span> </p> -->
            	       <div class="clearfix"></div>
            	        <p>{{$comment->comment}}</p>
                        <div data-commentId='{{$comment->id}}' class="commentBtn">
                            <p class="align-text-bottom">
                            <button class="float-right btn btn-outline-primary ml-2 comment-reply-btn" data-rate='{{$comment->rate}}' data-commentid='{{$comment->id}}' data-username='{{$comment->getUserName()}}'> <i class="fa fa-reply"></i> Reply</button>
                            <a class="float-right btn text-white btn-danger"> <i class="fa fa-heart"></i> Like</a>
                            </p>
                        </div>
            	        
            	    </div>
    	        </div>
<!-- <div class="card card-inner">
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
            	    </div> </div> -->
    	    </div>
    	</div>
    @endforeach
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