@extends('store.template')
@section('content')
<div class="container text-center">
	<div class="page-header"><h1><i class="fa fa-shopping-cart"></i> Product Details</h1></div>
	
	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src=" {{$product->image}} " alt="">
			</div>
		</div>

		<div class="col-md-6">
			<div class="product-block">
				<h3>{{$product->name}}</h3>
				<hr>
				<div class="product-info panel">
					<p>{{$product->description}}</p>
					<h3><span class="label label-success">Price: ${{number_format($product->price,2)}}</span></h3>
					<br>
					<div class="btn-group btn-group-justified">
						<a class="btn btn-default" href="{{route('home')}}">
							<i class="fa fa-arrow-circle-left"></i> Back</a>
						<a class="btn btn-primary" href="{{route('cart-add',$product->slug)}}">
							<i class="fa fa-cart-plus"></i> I want it</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><hr>
</div>

@stop