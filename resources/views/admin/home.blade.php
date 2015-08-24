@extends('admin.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1 class="hfont"><i class="fa fa-tasks"></i> Vive Store - Admin Panel</h1>
        </div>

        <h2>Welcome <strong>{{ Auth::user()->user }}</strong></h2><br>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-default btn-block btn-home-admin">Categories</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-shopping-cart  icon-home"></i>
                    <a href="{{route('admin.product.index')}}" class="btn btn-default btn-block btn-home-admin">Products</a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-cc-paypal  icon-home"></i>
                    <a href="#" class="btn btn-default btn-block btn-home-admin">Carts</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-users  icon-home"></i>
                    <a href="{{route('admin.user.index')}}" class="btn btn-default btn-block btn-home-admin">Users</a>
                </div>
            </div>

        </div>

    </div>
    <br>

@stop
