@extends('layouts.admin')

@section('content')
  
  @include('admin.includes._userNav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Users List</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href=" {{route('admin.users.create')}}" class="btn btn-success">Add user</a>
                <form class="d-inline" method="POST" action="{{ route('admin.users.clear') }}" class="mr-1">
                  @csrf
                  <button class="btn btn-danger">Clean</button>
                </form>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Status</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
	                <tr>
	                  <td>{{$user->id}}</td>
	                  <td>{{$user->name}}</td>
	                  <td>{{$user->email}}</td>
                    <td>
                    @if($user->isActive())
                    <span class="badge badge-success">{{$user->status}}</span>
                    @endif
                    @if($user->isWait())
                    <span class="badge badge-warning">{{$user->status}}</span>
                    @endif
                    @if($user->isBanned())
	                  <span class="badge badge-dark">{{$user->status}}</span>
                    @endif
                    </td>
	                  <td>
                    @if($user->isAdmin())
                      <span class="badge badge-success">{{$user->role}}</span>
                    @else
                      <span class="badge badge-light">{{$user->role}}</span>
                    @endif
                    </td>
                    <td>
                      <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-primary btn-sm m-0 p-1">Edit</a>
                      <form class="d-inline" method="POST" action="{{ route('admin.users.destroy', $user) }}" class="mr-1">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm m-0 p-1">Delete</button>
                      </form>

                      @if(!$user->isBanned())
                        <form class="d-inline" action="{{ route('admin.users.ban', $user) }}" method="POST"> 
                          @csrf
                          <button class="btn btn-dark btn-sm m-0 p-1">BAN</button>
                      </form>
                      @else
                      <form class="d-inline" action="{{ route('admin.users.unBan', $user) }}" method="POST"> 
                          @csrf
                          <button class="btn btn-warning btn-sm m-0 p-1">UNBAN</button>
                      </form>
                      @endif
                      @if($user->isWait())
                        <form class="d-inline" method="POST" action="{{ route('admin.users.verify', $user) }}" class="mr-1">
                          @csrf
                          <button class="btn btn-info btn-sm ml-1">Verify</button>
                      </form>
                    @endif
                    </td>
	                </tr>
                @endforeach
                </tboby>
              </table>
              {{ $users->links() }}
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection