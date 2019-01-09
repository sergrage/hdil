@extends('layouts.app')

@section('content')



<div class="container" style="margin-top: 1em;">

<h1> Fill Profile </h1>
<hr>
    <!-- Sign up form -->
    <form action="{{ route('fillprofile.update', $user->id) }}" method="POST" accept-charset="utf-8">
    	@method('PUT')
        @csrf
        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <h2 id="who_message" class="card-title">Who are you ?</h2>
				<div class="row">
					<div class="col-md-12">
		                <div class="row">
		                    <div class="form-group col-md-6">
		                        <input id="firstname" name="firstname" type="text" class="form-control" placeholder="First name">
		                    </div>
		                    <div class="form-group col-md-6">
		                        <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Last name">
		                    </div>
		                </div>
		                <!-- Avatar file input -->
		                <div class="form-group col-md-12">
						    <label for="exampleFormControlFile1">Choose your avatar</label>
						    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="avatar">
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
	                        		<td><input type="text" name="skill[]" placeholder="Enter your Skill" class="form-control skills_list"/></td>
	                       			<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
	                    		</tr>  
	                		</table>  
	            		</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Bio</h2>
                        <div class="form-group">
                            <textarea name="bio" type="text" class="form-control" id="password" placeholder="Type your biography"></textarea>
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
						          <div class="input-group-text"><i class="fab fa-facebook fa-2x" style="color:#3b5998"></i></div>
						        </div>
                            	<input name="facebook" type="text" class="form-control" id="text" placeholder="Add your facebook page">
                        	</div>
                        </div>
                        <div class="form-group">
                        	<div class="input-group mb-2">
	                        	<div class="input-group-prepend">
						          <div class="input-group-text"><i class="fab  fa-twitter fa-2x" style="color:#1da1f2"></i></div>
						        </div>
                            <input name="twitter" type="text" class="form-control" id="text" placeholder="Add your twitter page">
                        </div>
                        </div>
                        <div class="form-group">
                        	<div class="input-group mb-2">
	                        	<div class="input-group-prepend">
						          <div class="input-group-text"><i class="fab  fa-linkedin fa-2x" style="color:#007bb5"></i></div>
						        </div>
                            <input name="linkedin" type="text" class="form-control" id="text" placeholder="Add your linkedin page">
                        </div>
                        </div>
                        <div class="form-group">
                        	<div class="input-group mb-2">
	                        	<div class="input-group-prepend">
						          <div class="input-group-text"><i class="fab  fa-instagram fa-2x" style="color:#c32aa3"></i></div>
						        </div>
                            <input name="instagram" type="text" class="form-control" id="text" placeholder="Add your instagram page">
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
				    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="policy">
				    <label class="form-check-label" for="exampleCheck1">I agree with this website policy</label> <span style="color:red">*</span>
				</div>
			</div>
		</div>
        <div style="margin-top: 1em;">
            <button type="submit" class="btn btn-info btn-lg btn-block">Sign up !</button>
        </div>
    </form>
</div>
@endsection