@extends('store.template')
@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-user"></i>Log in</h1>
        </div>

        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">
                    @include('store.partials.errors')
                    <form method="POST" action="/auth/login" class="form-horizontal">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="form-group">
                                <label for="email" class="col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                </div> 
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-lg-2">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label> 
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2"></div>
                                <button type="submit" class="btn btn-info">Login</button>
                            </div>
                        </fieldset>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
@stop