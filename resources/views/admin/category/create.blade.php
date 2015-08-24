@extends('admin.template')
@section('content')
  <div class="container text-center">
    <div class="page-header">
      <h1><i class="fa fa-shopping-cart"></i>Categories <small>Add new category</small></h1>
    </div>

    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <div class="page">
          @if(count($errors)>0)
            @include('admin.partials.errors')
          @endif

        {!! Form::open(['route'=>'admin.category.store']) !!}
            <div class="form-group">
              <label for="name">Name:</label>
              {!!
                form::text(
                'name',
                null,
                array(
                'class'=>'form-control',
                'placeholder'=>'Write the name for a new category',
                'autofocus'=>'autofocus'
                )
                )
                !!}
            </div>
            <div class="form-group">
              <label for="description">Description:</label>
              {!!
                form::textarea(
                'description',
                null,
                array(
                'class'=>'form-control',
                )
                )
                !!}
            </div>

            <div class="form-group">
              <label for="color">Color</label>
              <input type="color" name="color" class="form-control">
            </div>

            <div class="form-group">
              {!! Form::submit('Save',array('class'=>'btn btn-info')) !!}
              <a href="{{route('admin.category.index')}}" class="btn btn-danger">Cancel</a>
            </div>
            {!!Form::close()!!}
        </div>
      </div>
    </div>

  </div>
@stop
