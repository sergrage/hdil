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

    <div class="container-fluid">
        <p><a href=" {{route('admin.categories.create')}}" class="btn btn-success">Add Category</a></p>

    <div class="row align-items-start">
        @for ($i = 0; $i < $catCount[0]; $i++)    

            @if($categories[$i]->depth == 0 && $i!=0)
                </ul>
                </div>
            @endif  

            @if ($categories[$i]->depth == 0)
            <div class="col-md-3" style="padding-bottom: 20px;">
                <ul class="list-group">
            @endif  
                
                @if ($categories[$i]->depth == 0)
                    <li class="list-group-item list-group-item-success">
                @else
                    <li class="list-group-item">
                @endif
                    @for ($j = 0; $j < $categories[$i]->depth; $j++) &mdash; @endfor
                        <a href="{{ route('admin.categories.show', $categories[$i]) }}">{{ $categories[$i]->name }} </a>
                    <div class="d-flex flex-row">
                        <form method="POST" action="" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary p-0 px-1"><span class="fa fa-angle-double-up fa-xs"></span></span></button>
                        </form>
                        <form method="POST" action="{{ route('admin.category.up', $categories[$i]) }}"  class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary p-0 px-1"><span class="fa fa-angle-up fa-xs"></span></button>
                        </form>
                        <form method="POST" action="{{ route('admin.category.down', $categories[$i]) }}" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary p-0 px-1"><span class="fa fa-angle-down fa-xs"></span></button>
                        </form>
                        <form method="POST" action="" class="mr-1">
                            @csrf
                            <button class="btn btn-sm btn-outline-primary p-0 px-1"><span class="fa fa-angle-double-down fa-xs"></span></span></button>
                        </form>
                        <form method="POST" action="{{ route('admin.categories.destroy', $categories[$i]) }}" class="mr-1">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger p-0 px-1"><span class="fa fa-trash fa-xs"></span></button>
                        </form> 
                    </div>
                   
                    </li>
                
            @if ($i == $catCount[0])
                </ul>
            </div>
            @endif
        @endfor 
    </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection