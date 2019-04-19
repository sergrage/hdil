<form action="" method="get" accept-charset="utf-8" class="cabinet-content__form">
	@csrf
	<div class="form-group">
		<label for="cardName">Card Name</label>
		<input type="" name="" id="cardName" class="form-control" placeholder="Enter">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
        <label for="parent" class="col-form-label">Category</label>
        <select id="parent" class="form-control{{ $errors->has('parent') ? ' is-invalid' : '' }}" name="parent">
            <option value="" disabled selected>Select category</option>
            @foreach ($parents as $parent)
                <option value="{{ $parent->id }}">
                    @for ($i = 0; $i < $parent->depth; $i++) &mdash; @endfor
                    {{ $parent->name }}
                </option>
            @endforeach;
        </select>
        @if ($errors->has('parent'))
            <span class="invalid-feedback"><strong>{{ $errors->first('parent') }}</strong></span>
        @endif
    </div>
	<div class="form-group">
		<label for="editor">Card Body</label>
		<textarea name="content" id="editor"></textarea>
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>