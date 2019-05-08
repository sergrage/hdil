<form action="{{route('cabinet.card.update', $card)}}" method="post" accept-charset="utf-8" class="cabinet-content__form">
	@csrf
    @method('PUT')
	<div class="form-group">
		<label for="cardName">Card Name</label>
		<input name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter card name" value="{{ $card->name }}">
        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
	</div>
	<div class="form-group">
        <label for="parent" class="col-form-label">Category</label>
        <select id="parent" name="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}">
            <option value="" disabled selected>Select category</option>
            @foreach ($parents as $parent)
                <option value="{{ $parent->id }}">
                    @for ($i = 0; $i < $parent->depth; $i++) &mdash; @endfor
                    {{ $parent->name }}
                </option>
            @endforeach;
        </select>

        @if ($errors->has('category_id'))
            <span class="invalid-feedback"><strong>{{ $errors->first('category_id') }}</strong></span>
        @endif
    </div>
	<div class="form-group">
		<label for="editor">Card Body</label>
		<textarea name="content" id="editor" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}">{{ $card->content }}</textarea>
        @if ($errors->has('content'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>