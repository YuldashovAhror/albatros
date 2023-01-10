@extends('layouts.front.main')
@section('content')
	<span class="tel-popup">
		<img src="/img/tel-popup.svg" alt="ico">
	</span>
	<section class="catalog">
		<div class="container">
			<div class="catalog__item" id="ihla">			
				<h2 class="product__title section__title-btn">
					<span>{{$category->name_ru}}</span>
				</h2>
				<div class="catalog-main">
					@foreach ($products as $product)
						
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="{{$product->photo}}" alt="product">
						</div>
						<div class="product-carousel__title">
							{{$product->name_ru}}
						</div>
						<div class="product-carousel__text">
							{!!substr($product->discription_ru, 0, 200)!!}
						</div>
						<a href="{{route('product.show', $product->slug)}}" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection