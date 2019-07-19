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

                    <input id="comment-parent_id" type="hidden" name="parent_id" value="">
                    <input id="comment-card_id" type="hidden" name="card_id" value="{{ $card->id }}">

<!--                       <input id="input-comment-rate" type="hidden" name="comment-rate" value="">
                    <input id="input-comment-id" type="hidden" name="comment-id" value="">
                    <input id="input-comment-name" type="hidden" name="comment-name" value=""> -->
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">add Comment</button>
            </div>
        </form>
                                 
@include('cabinet.partials.cabinetCommentsInner')
</div>