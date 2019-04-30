<form action="{{ route('fillprofile.store', $user->id) }}" method="POST" accept-charset="utf-8">
     @csrf
    <!-- Sign up card -->
    <div class="card person-card">
        <div class="card-body">
            <h2 id="who_message" class="card-title">Who are you ? <span style="color:red">*</span></h2>
			<div class="row">
				<div class="col-md-12">
	                <div class="row">
	                    <div class="form-group col-md-6">
	                        <input id="firstname" name="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" placeholder="First name" value="{{ old('firstname') }}">
                            @if ($errors->has('firstname'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('firstname') }}</strong></span>
                            @endif
	                    </div>
	                    <div class="form-group col-md-6">
	                        <input id="lastname" name="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Last name" value="{{ old('lastname') }}">
                            @if ($errors->has('lastname'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('lastname') }}</strong></span>
                            @endif
	                    </div>
	                </div>
	                <!-- Avatar file input -->
	                <div class="form-group col-md-12">
					    <label for="upload_image" class="custom-file-upload">Choose your avatar</label>
					    <input type="file" class="form-control-file" id="upload_image" name="avatar">
					</div>
					<div id="uploaded_image">
						
					</div>
				</div>
			</div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-md-6" style="padding=0.5em;">
            <div class="card">
                <div class="card-body">
                	<h2 class="card-title">Skills</h2>
                    <div class="table-responsive">  
                		<table class="table table-bordered" id="dynamic_field">  
                    		<tr>  
                        		<td><input id="addSkill" type="text" autocomplete="off" placeholder="Enter your Skill" class="form-control"/></td>
                                
                       			<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    		</tr>  
                		</table>
                        <div class="skillsList"></div>  
            		</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card"> 
                <div class="card-body">
                    <h2 class="card-title">Bio</h2>
                    <div class="form-group">
                        <textarea name="bio" type="text" class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" placeholder="Type your biography">{{ old('bio') }}</textarea>
                        @if ($errors->has('bio'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('bio') }}</strong></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <div class="card"> 
                <div class="card-body">
                    <h2 class="card-title">Social</h2>
                    <div class="form-group">
                    	<div class="input-group mb-2">
                        	<div class="input-group-prepend">
					          <div class="input-group-text"><i class="fab fa-facebook fa-lg" style="color:#3b5998"></i></div>
					        </div>
                        	<input name="facebook" type="text" value="{{ old('facebook') }}" class="form-control{{ $errors->has('facebook') ? ' is-invalid' : '' }}" placeholder="Add your facebook page" style="height:inherit">
                            @if ($errors->has('facebook'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('facebook') }}</strong></span>
                            @endif
                    	</div>
                    </div>
                    <div class="form-group">
                    	<div class="input-group mb-2">
                        	<div class="input-group-prepend">
					          <div class="input-group-text"><i class="fab  fa-twitter fa-lg" style="color:#1da1f2"></i></div>
					        </div>
                        <input name="twitter" type="text" value="{{ old('twitter') }}" class="form-control{{ $errors->has('twitter') ? ' is-invalid' : '' }}" placeholder="Add your twitter page" style="height:inherit">
                        @if ($errors->has('twitter'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('twitter') }}</strong></span>
                        @endif
                    </div>
                    </div>
                    <div class="form-group">
                    	<div class="input-group mb-2">
                        	<div class="input-group-prepend">
					          <div class="input-group-text"><i class="fab  fa-linkedin fa-lg" style="color:#007bb5"></i></div>
					        </div>
                        <input name="linkedin" type="text" value="{{ old('linkedin') }}" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" placeholder="Add your linkedin page" style="height:inherit">
                        @if ($errors->has('linkedin'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('linkedin') }}</strong></span>
                        @endif
                    </div>
                    </div>
                    <div class="form-group">
                    	<div class="input-group mb-2">
                        	<div class="input-group-prepend">
					          <div class="input-group-text"><i class="fab fa-instagram ffa-lg" style="color:#c32aa3"></i></div>
					        </div>
                        <input name="instagram" type="text" value="{{ old('instagram') }}" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" placeholder="Add your instagram page" style="height:inherit">
                        @if ($errors->has('instagram'))
                        <span class="invalid-feedback"><strong>{{ $errors->first('instagram') }}</strong></span>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="mt-4 card"> 
        <div class="card-body">
        	<a href="#">Read site policy</a>
	        <div class="form-group form-check">
			    <input type="checkbox" class="form-check-input" id="policyCheck" name="policy">
			    <label class="form-check-label" for="policyCheck">I agree with this website policy</label> <span style="color:red">*</span>
                @if ($errors->has('policy'))
                <span class="invalid-feedback d-block"><strong>The policy field is required.</strong></span>
                @endif
			</div>
		</div>
	</div>
    <div style="margin-top: 1em;" class="mb-4">
        <button type="submit" class="btn btn-info btn-lg btn-block">Sign up !</button>
    </div>
</form>