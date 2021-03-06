    @foreach($comments as $comment)
        @if($comment->parent_id)
            <div class="card mb-3 ml-5 border-right-0 border-left-0 border-bottom-0">
        @else
            <div class="card mb-3">
        @endif
		
    	    <div class="card-body">
    	        <div class="row">
            	    <div class="col-md-2 text-center">
                        <h5><a href="#">{{$comment->getUserName()}}</a></h5>
            	        <img src="{{App\Models\User::find($comment->commented_id)->getAvatar()}}" class="rounded-circle img-thumbnail" width="70" height="70">
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
            @if($comment->sub->count())
                @include('cabinet.partials.cabinetCommentsInner', ['comments' => $comment->sub])
            @endif
    	</div>
    @endforeach