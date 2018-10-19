@extends('layouts.admin')

@section('content')
  
  @include('admin.includes._cardsNav')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Cards List</h1>
    </section>
  
    <!-- Main content -->
    <section class="content">

      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">Card</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Author</a>
            </li>
          </ul>

        </div>
        <div class="card-body">
          <h5 class="card-title">How did I Learn {{ $card->getCategoryName() }}</h5>
          <p class="card-text">{{ $card->content }}</p>
          <a href="#" class="btn btn-primary">Read Comments</a>
        </div>
      </div>

      <!-- Default box -->
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">

              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Author</th>
                  <th>Category</th>
                  <th>Text</th>
                  <th>Likes</th>
                  <th>Comments</th>
                  <th>Views</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <tr>
                    <td> {{ $card->id }} </td>
                    <td> {{ $card->getUserName() }} </td>
                    <td> {{ $card->getCategoryName() }} </td>
                    <td> {{ $card->content }} </td>
                    <td> {{ $card->likesNumber }} </td>
                    <td> {{ $card->commentsNumber }} </td>
                    <td> {{ $card->views }} </td>
                    <td> 
                      <form class="d-inline" method="POST" action="" class="mr-1">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm m-1 p-1">Delete</button>
                      </form>
                    </td>
                  </tr>

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