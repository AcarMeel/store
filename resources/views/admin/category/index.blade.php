@extends('admin.template')
@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1><i class="fa fa-shopping-cart"></i>Categories
      <a href="{{route('admin.category.create')}}" class="btn btn-success pull-right btn-xs"><i class="fa fa-plus fa-2x"></i></a>
      </h1>
    </div>
    <div class="page">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Edit</th>
                  <th class="text-center">Delete</th>
                  <th class="text-center">Name</th>
                  <th class="text-center">Description</th>
                  <th class="text-center">Color</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                  <tr>
                    <td>
                      <a href="{{route('admin.category.edit',$category)}}" class="btn btn-danger btn-xs"><i class="fa fa-pencil fa-2x"></i></a>
                    </td>
                    <td>
                      {!!Form::open(['route'=>['admin.category.destroy',$category]]) !!}
                        <input type="hidden" name="_method" value="DELETE">
                        <button onclick="return confirm('Delete data?')" class="btn btn-primary btn-xs">
                          <i class="fa fa-trash fa-2x"></i>
                        </button>
                      {!!Form::close()!!}
                    </td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->color}}</td>
                  </tr>
                 @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
@stop
