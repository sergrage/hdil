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
                @foreach($cards as $card)
                  <tr>
                    <td> {{ $card->id }} </td>
                    <td> {{ $card->getUserName() }} </td>
                    <td> {{ $card->getCategoryName() }} </td>
                    <td> {{ $card->contentStrLimit() }} </td>
                    <td> {{ $card->likesNumber }} </td>
                    <td> {{ $card->commentsNumber }} </td>
                    <td> {{ $card->views }} </td>
                    <td> 
                      <form class="d-inline" method="POST" action="" class="mr-1">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm m-1 p-1">Delete</button>
                      </form>
                      <a href="{{ route('admin.cards.show', $card)}}" class="btn btn-primary btn-sm m-1 p-1">Show</a>
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