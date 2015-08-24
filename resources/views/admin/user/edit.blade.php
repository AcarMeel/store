@extends('admin.template')

@section('content')

    <div class="container text-center">

        <div class="page-header">
            <h1>
                <i class="fa fa-user"></i> USERS <small>[ Update user ]</small>
            </h1>
        </div>

        <div class="row">
            <div class="col-md-offset-3 col-md-6">

                <div class="page">

                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif

                    {!! Form::model($user, array('route' => array('admin.user.update', $user))) !!}

                        <input type="hidden" name="_method" value="PUT">

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
                            <label for="last_name">lastnames:</label>

                            {!!
                                Form::text(
                                    'last_name',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Enter Lastname...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>

                            {!!
                                Form::text(
                                    'email',
                                    null,
                                    array(
                                        'class'=>'form-control',
                                        'placeholder' => 'Enter your email...',
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
                                        'placeholder' => 'Enter your new username...',
                                        //'required' => 'required'
                                    )
                                )
                            !!}
                        </div>

                        <div class="form-group">
                            <label for="type">Type:</label>

                            {!! Form::radio('type', 'user', $user->type=='user' ? true : false) !!} User
                            {!! Form::radio('type', 'admin', $user->type=='admin' ? true : false) !!} Admin
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

                            {!! Form::checkbox('active', null, $user->active == 1 ? true : false) !!}
                        </div><hr>

                        <fieldset>
                            <legend>Cambiar password:</legend>
                            <div class="form-group">
                                <label for="password">New Password:</label>

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
                                <label for="confirm_password">Confirm new Password:</label>

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
                        </fieldset><hr>

                        <div class="form-group">
                            {!! Form::submit('Update', array('class'=>'btn btn-info')) !!}
                            <a href="{{ route('admin.user.index') }}" class="btn btn-primary">Cancel</a>
                        </div>

                    {!! Form::close() !!}

                </div>

            </div>
        </div>

    </div>

@stop
