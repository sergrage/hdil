@extends('layouts.lte')

@section('content')
      @include('admin.includes._categoriesNav')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Users List</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="d-flex flex-row mb-3">
            <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-primary mr-1">Edit</a>
            <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" class="mr-1">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>

        <table class="table table-bordered table-striped">
            <tbody>
            <tr>
                <th>ID</th><td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name</th><td>{{ $category->name }}</td>
            </tr>
            <tr>
                <th>Slug</th><td>{{ $category->slug }}</td>
            </tr>
            <tbody>
            </tbody>
        </table>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection