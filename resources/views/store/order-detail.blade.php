@extends('store.template')
@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Cart Detail</h1>
	</div>
	<div class="page">
		<div class="table-responsive">
			<h3>User Info</h3>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td>
				</tr>
				<tr>
					<td>Usuario:</td><td>{{ Auth::user()->user }}</td>
				</tr>
				<tr>
					<td>Correo:</td><td>{{ Auth::user()->email }}</td>
				</tr>
				<tr>
					<td>Direccion:</td><td>{{ Auth::user()->address }}</td>
				</tr>
			</table>

		</div>
		<div class="table-responsive">
			<h3>Cart Info</h3>
			<table class="table table-striped table-bordered table-hover">
				<tr>
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>SubTotal</th>
				</tr>
				@foreach($cart as $item)
				<tr>
					<td> {{$item->name}} </td>
					<td> {{number_format($item->price,2)}} </td>
					<td> {{$item->quantity}} </td>
					<td> {{number_format($item->price * $item->quantity,2)}} </td>
				</tr>
				@endforeach
			</table><hr>
			<h3>
				<span class="label label-success"></span>
				Total: <i class="fa fa-usd"></i>{{number_format($total,2)}}
			</h3><hr>
			<a href="{{route('cart-show')}}" class="btn btn-default">
				<i class="fa fa-chevron-circle-left fa-2x"></i> Back</a>

			<a href="#" class="btn btn-warning">Pay at
				<i class="fa fa-cc-paypal fa-2x"></i></a>
		</div>
	</div>
</div>


@stop