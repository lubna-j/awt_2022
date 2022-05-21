@extends('layouts.app')

@section('content')
<div class="custom-product">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			@foreach($products as $item)
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$item['id']}}" class="{{$item['id']==1?'active':''}}" aria-current="true" aria-label="Slide {{$item['id']}}"></button>
			@endforeach
		</div>
		<div class="carousel-inner">
			@foreach($products as $item)
			<div class="carousel-item {{$item['id']==1?'active':''}}">
			<a href="product_details/{{$item['id']}}">
				<img src="{{$item['gallery']}}" class="d-block w-100 slider-img">
				<div class="carousel-caption d-none d-md-block slider-text">
					<h5>{{$item['name']}}</h5>
					<p>{{$item['description']}}</p>
				</div>
				</a>
			</div>
			@endforeach
		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div class="trending-wrapper">
		<h3>Trending Products</h3>
		@foreach($products as $item)
		<div class="trending-item">
				<a href="product_details/{{$item['id']}}">
				<img src="{{$item['gallery']}}" class="trending-image">
				<div class="">
					<h5>{{$item['name']}}</h5>
				</div>
			</a>
			</div>
		@endforeach
	</div>
</div>
@endsection