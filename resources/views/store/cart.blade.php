@extends('store.template')
@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Cart detail</h1>
		</div>
		<div class="table-cart">
		@if(count($cart))
			<a href="{{route('cart-trash')}}" class="btn btn-danger btn-lg btn-block">
				<i class="fa fa-trash"></i> Cancel all items
			</a><br>	
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th class="text-center">Image</th>
							<th class="text-center">Product</th>
							<th class="text-center">Price</th>
							<th class="text-center">Quantity</th>
							<th class="text-center">Subtotal</th>
							<th class="text-center">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
							<tr>
								<td><img src="{{ $item->image }}"></td>
								<td> {{$item->name}} </td>
								<td><i class="fa fa-usd"></i> {{ number_format($item->price,2) }} </td>
								<td> 
									<input type="number"
										   min="1"
										   max="100"
										   value="{{ $item->quantity }}"
										   id="product_{{ $item->id }}"
									> 
									<a 
										href=""
										class="btn btn-info btn-xs btn-update-item"
										data-href="{{ route('cart-update',$item->slug) }}"
										data-id="{{ $item->id }}"
									>
										<i class="fa fa-refresh"></i>
									</a>
								</td>
								<td><i class="fa fa-usd"></i> {{ number_format($item->price * $item->quantity,2) }} </td>
								<td><a href="{{route('cart-delete',$item->slug)}}" class="btn btn-danger">
									<i class="fa fa-remove"></i></a></td>
							</tr>
						@endforeach 
					</tbody>
				</table>
				<hr>
				<h3>
					<span class="label label-success">
						Total <i class="fa fa-usd"></i>{{number_format($total,2)}}
					</span>
				</h3>
				<hr>
				<p>
					<a href="{{route('home')}}" class="btn btn-default">
							<i class="fa fa-chevron-circle-left"></i> Continue
					</a>
				  	<a href="{{route('order-detail')}}" class="btn btn-info"><i class="fa fa-credit-card"></i> Buy</a>
				</p>
			</div>
			@else
				<div class="alert alert-dismissible alert-danger">
					  <button type="button" class="close" data-dismiss="alert">×</button>
					  <h3>
					  	<span>
					  		Oh no! We've notice you don't have items added to your cart.
					  		Go and buy some nice stuff!
					  		<i class="fa fa-thumbs-up"></i>
					  	</span>
					  </h3>
				</div>
			@endif	
		</div><br><hr>



	</div>
@stop