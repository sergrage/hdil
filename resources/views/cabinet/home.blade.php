@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    	<div class="d-flex" id="wrapper">
			<div class="row">
				@include('partials.sidebar')
				<div id="page-content-wrapper">

					@include('cabinet.partials.cabinetContent')

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
	
@section('ClassicEditor')

<script src="{{ mix('/app/js/ClassicEditor.js') }}"></script>
    
@endsection