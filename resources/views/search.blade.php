@extends('layouts.app')

@section('content')
<div class="custom-product">
	<div class="col-sm-4">
		
	</div>
	<div class="col-sm-4">
		<div class="trending-wrapper">
			<h4>result for  Products</h4>
			@foreach($products as $item)
			<div class="searched-item">
					<a href="product_details/{{$item['id']}}">
					<img src="{{$item['gallery']}}" class="trending-image">
					<div class="">
						<h2>{{$item['name']}}</h2>
					</div>
				</a>
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection