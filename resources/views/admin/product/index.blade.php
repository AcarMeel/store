@extends('admin.template')

@section('content')
    <div class="container text-center">
        <div class="page-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> PRODUCTS
                <a href="{{ route('admin.product.create') }}" class="btn btn-success pull-right btn-xs">
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Extract</th>
                            <th>Price</th>
                            <th>Visible</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.product.edit', $product->slug) }}" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil-square fa-2x"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['admin.product.destroy', $product->slug]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Eliminar registro?')" class="btn btn-primary btn-xs">
        									<i class="fa fa-trash fa-2x"></i>
        								</button>
        							{!! Form::close() !!}
                                </td>
                                <td><img src="{{ $product->image }}" width="40"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->extract }}</td>
                                <td>${{ number_format($product->price,2) }}</td>
                                <td>{{ $product->visible == 1 ? "yes" : "no" }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr>

            <?php echo $products->render(); ?>

        </div>
    </div>
@stop
