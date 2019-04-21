@extends('layouts.app')

@section('content')

<div class="container-fluid">
            
    <div class="d-flex" id="wrapper">
        <div class="row">
        @include('partials.sidebar')
        <div id="page-content-wrapper">
        <div class="container-fluid" style="margin-left: 15px;">
            @include('partials.cabinetBtn')
            <h1> Edit Profile </h1>
            <hr>
            <!-- Sign up form -->
            <form action="{{ route('fillprofile.update', $user->id) }}" method="POST" accept-charset="utf-8">
                @csrf
                <!-- Sign up card -->
                <div class="card person-card mb-4">
                    <div class="card-body">
                        <h2 id="who_message" class="card-title">Who are you ?</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input id="firstname" name="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" placeholder="First name" value="{{ $user->firstname }}">
                                        @if ($errors->has('firstname'))
                                            <span class="invalid-feedback"><strong>{{ $errors->first('firstname') }}</strong></span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="lastname" name="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Last name" value="{{ $user->lastname }}">
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
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Skills</h2>
                                <div class="table-responsive">  
                                    <table class="table table-bordered">  
                                        <tr>  
                                            <td><input id="addSkill" type="text" autocomplete="off" placeholder="Enter your Skill" class="form-control"/></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                        </tr>
                                    </table>
                                    <div id="dynamic_field">
                                        @foreach($skillsList as $skill)
                                            <span class="badge {{$skill->randomBootstrapBadgeColor()}}" id="">{{$skill->skill}}<i class="fas fa-minus-square p-1"></i><input type="hidden" name="skills[]" value="{{$skill->skill}}"></span>    
                                        @endforeach 
                                    </div>

                                    <div class="skillsList">
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card"> 
                            <div class="card-body">
                                <h2 class="card-title">Bio</h2>
                                <div class="form-group">
                                    <textarea name="bio" type="text" class="form-control" id="password" placeholder="Type your biography">{{ $user->bio }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card"> 
                            <div class="card-body">
                                <h2 class="card-title">Social</h2>
                                <div class="row">
                                <div class="form-group col-md-6">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fab fa-facebook fa-2x" style="color:#3b5998"></i></div>
                                        </div>
                                        <input name="facebook" type="text" class="form-control" id="text" placeholder="Add your facebook page" style="height:inherit">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fab  fa-twitter fa-2x" style="color:#1da1f2"></i></div>
                                        </div>
                                    <input name="twitter" type="text" class="form-control" id="text" placeholder="Add your twitter page" style="height:inherit">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fab  fa-linkedin fa-2x" style="color:#007bb5" ></i></div>
                                        </div>
                                    <input name="linkedin" type="text" class="form-control" id="text" placeholder="Add your linkedin page" style="height:inherit">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="fab  fa-instagram fa-2x" style="color:#c32aa3"></i></div>
                                        </div>
                                    <input name="instagram" type="text" class="form-control" id="text" placeholder="Add your instagram page" style="height:inherit">
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 1em;">
                    <button type="submit" class="btn btn-info btn-lg btn-block mb-4">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('modalImage')

    @include('partials._modalImage')
    
@endsection