@extends('admin.template')

@section('content')

    <div class="container text-center">

        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USERS <small>[ Add new user ]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    {!! Form::open(['route'=>'admin.user.store']) !!}

                        <div class="form-group">
                            <label for="name">Name:</label>

                            {!!
                                Form::text(
                                    'name',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Enter your name...',
                                        'autofocus' => 'autofocus',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="last_name">Lastname:</label>

                            {!!
                                Form::text(
                                    'last_name',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Enter your lastname...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail:</label>

                            {!!
                                Form::text(
                                    'email',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Enter your e-mail...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="user">User:</label>

                            {!!
                                Form::text(
                                    'user',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Enter your user...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>

                            {!!
                                Form::password(
                                    'password',
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>

                            {!!
                                Form::password(
                                    'password_confirmation',
                                    array(
                                        'class'=>'form-control',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="type">Type:</label>

                            {!! Form::radio('type', 'user', true) !!} User
                            {!! Form::radio('type', 'admin') !!} Admin
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>

                            {!!
                                Form::textarea(
                                    'address',
                                    null,
                                    array(
                                        'class'=>'form-control'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="active">Active:</label>

                            {!! Form::checkbox('active', null, true) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Save', array('class'=>'btn btn-info')) !!}
                            <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Cancel</a>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>

    </div>

@stop
