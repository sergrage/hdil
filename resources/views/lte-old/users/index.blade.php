@extends('layouts.lte')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href=" {{route('lte.users.create')}}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Имя</th>
                  <th>E-mail</th>
                  <th>Статус</th>
                  <th>Роль</th>
                  <th>Действия</th>
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
                    <span class="label label-success">{{$user->status}}</span>
                    @endif
                    @if($user->isWait())
                    <span class="label label-warning">{{$user->status}}</span>
                    <form method="POST" action="{{ route('lte.users.destroy', $user) }}" class="mr-1">
                          @csrf
                          @method('DELETE')
                          <button class="btn">Verify</button>
                      </form>
                    @endif
                    @if($user->isBanned())
	                  <span class="label label-default">{{$user->status}}</span>
                    @endif
                    </td>
	                  <td>
                    @if($user->isAdmin())
                      <span class="label label-success">{{$user->role}}</span>
                    @else
                      <span>{{$user->role}}</span>
                    @endif
                    </td>
                    <td>
                      <a href="#" class="fa fa-pencil"></a>
                      <form method="POST" action="{{ route('lte.users.destroy', $user) }}" class="mr-1">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-link"><i class="fa fa-minus-square text-danger"></i></button>
                      </form>

                      @if(!$user->isBanned())
                        <form action="{{ route('lte.users.ban', $user) }}" method="POST"> 
                          @csrf
                          <button class="text-danger">BAN</button>
                      </form>
                      @else
                      <form action="{{ route('lte.users.unBan', $user) }}" method="POST"> 
                          @csrf
                          <button class="text-danger">UNBAN</button>
                      </form>
                      @endif
                    </td>
	                </tr>
                @endforeach
                </tboby>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection