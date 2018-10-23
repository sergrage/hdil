@extends('layouts.app')

@section('content')



<div class="container" style="margin-top: 1em;">

<h1> Fill Profile </h1>
<hr>
    <!-- Sign up form -->
    <form>
        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <h2 id="who_message" class="card-title">Who are you ?</h2>
				<div class="row">
					<div class="col-md-12">
<!-- 						<center>
							<div>
								<i class="fas fa-user-cog fa-5x " style="color: #2c5f70"></i>
							</div>
	                		
	                	</center> -->

	    	            <!-- Firstname, Lastname and sex -->
		                <div class="row">
		                    <div class="form-group col-md-2">
		                        <select id="input_sex" class="form-control">
		                            <option value="Mr.">Mr.</option>
		                            <option value="Ms.">Ms.</option>
		                        </select>
		                    </div>
		                    <div class="form-group col-md-5">
		                        <input id="first_name" type="text" class="form-control" placeholder="First name">
		                    </div>
		                    <div class="form-group col-md-5">
		                        <input id="last_name" type="text" class="form-control" placeholder="Last name">
		                    </div>
		                </div>
		                <!-- Avatar file input -->
		                <div class="form-group col-md-12">
						    <label for="exampleFormControlFile1">Choose your avatar</label>
						    <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
<!-- 	               			<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" /> -->  
	            		</div>
<!--                         <div class="form-group">
                            <input type="text" name="skill[]" placeholder="Enter your skill" class="form-control skill_list">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card"> 
                    <div class="card-body">
                        <h2 class="card-title">Bio</h2>
                        <div class="form-group">
                            <textarea name="" type="text" class="form-control" id="password" placeholder="Type your biography"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  mt-4 ">
                <div class="card" > 
                    <div class="card-body">
                        <h2 class="card-title">Social</h2>
                        <div class="form-group">
                        	<div class="input-group mb-2">
	                        	<div class="input-group-prepend">
						          <div class="input-group-text"><i class="fab fa-facebook fa-2x" style="color:#3b5998"></i></div>
						        </div>
                            	<input name="" type="text" class="form-control" id="text" placeholder="Type your password">
                        	</div>
                        </div>
                        <div class="form-group">
                        	<div class="input-group mb-2">
	                        	<div class="input-group-prepend">
						          <div class="input-group-text"><i class="fab  fa-twitter fa-2x" style="color:#1da1f2"></i></div>
						        </div>
                            <input name="" type="text" class="form-control" id="text" placeholder="Type your password">
                        </div>
                        </div>
                        <div class="form-group">
                        	<div class="input-group mb-2">
	                        	<div class="input-group-prepend">
						          <div class="input-group-text"><i class="fab  fa-linkedin fa-2x" style="color:#007bb5"></i></div>
						        </div>
                            <input name="" type="text" class="form-control" id="text" placeholder="Type your password">
                        </div>
                        </div>
                        <div class="form-group">
                        	<div class="input-group mb-2">
	                        	<div class="input-group-prepend">
						          <div class="input-group-text"><i class="fab  fa-instagram fa-2x" style="color:#c32aa3"></i></div>
						        </div>
                            <input name="" type="text" class="form-control" id="text" placeholder="Type your password">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="mt-4 card"> 
	        <div class="card-body">
		        <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
			</div>
		</div>
        <div style="margin-top: 1em;">
            <button type="button" class="btn btn-info btn-lg btn-block">Sign up !</button>
        </div>
    </form>
</div>
@endsection