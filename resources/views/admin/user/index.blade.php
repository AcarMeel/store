@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> USERS
                <a href="{{ route('admin.user.create') }}" class="btn btn-success pull-right">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </h1>
        </div>

        <div class="page">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>User</th>
                            <th>E-mail</th>
                            <th>Type</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-danger btn-xs">
                                        <i class="fa fa-pencil-square fa-2x"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-primary btn-xs">
        									<i class="fa fa-trash fa-2x"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->user }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->active == 1 ? "yes" : "no" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr>

            <?php echo $users->render(); ?>

        </div>
    </div>
@stop
