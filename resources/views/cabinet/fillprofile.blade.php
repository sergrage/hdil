@extends('layouts.app')

@section('content')



<div class="container" style="margin-top: 1em;">

	<h1>
	Fill Profile
</h1>
    <!-- Sign up form -->
    <form>
        <!-- Sign up card -->
        <div class="card person-card">
            <div class="card-body">
                <!-- Sex image -->

                <center>
                	<i class="fas fa-user-cog fa-10x " style="color: #2c5f70"></i>	
                </center>
                
                <h2 id="who_message" class="card-title">Who are you ?</h2>
                <!-- First row (on medium screen) -->
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
            </div>
        </div>
        
        <div class="row pt-4">
            <div class="col-md-6" style="padding=0.5em;">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Skills</h2>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-form-label">Phone number</label>
                            <input type="text" class="form-control" id="tel" placeholder="+33 6 99 99 99 99" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" > 
                    <div class="card-body">
                        <h2 class="card-title">Bio</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Pasword</label>
                            <textarea name="" type="password" class="form-control" id="password" placeholder="Type your password" required ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" > 
                    <div class="card-body">
                        <h2 class="card-title">Social</h2>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Pasword</label>
                            <textarea name="" type="password" class="form-control" id="password" placeholder="Type your password" required ></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 1em;">
            <button type="button" class="btn btn-info btn-lg btn-block">Sign up !</button>
        </div>
    </form>
</div>
@endsection