@extends('layouts.app')

@section('content')
<div class="custom-product">
	<div class="col-sm-10">
		<div class="trending-wrapper">
			<h4>Cart Items</h4>
			@foreach($products as $item)
			<div class="row searched-item cart-list-devider">
				<div class="col-sm-4">
					<a href="product_details/{{$item->product->id}}">
						<img src="{{$item->product->gallery}}" class="trending-image">
					</a>
				</div>
				<div class="col-sm-4">
					<div class="">
						<h5>{{$item->product->name}}</h5>
						<h5>{{$item->product->description}}</h5>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="">
						<a href="removecart/{{$item['id']}}" class="btn btn-warning" >Remove from Cart</a>
					</div>
					
				</div>
			</div>
			@endforeach
			<a class="btn btn-success" href="orderNow">Order Now</a> <br><br>
		</div>
	</div>
</div>
@endsection