@extends('layouts.front.main')
@section('content')
    <div class="offer">
        <div class="container">
            <div class="offer-links">
                <a href="#">Главная</a>
                <i class="fa fa-chevron-right current"></i>
                <a href="#" class="current">Бренды</a>
            </div>
        </div>
    </div>

    <span class="tel-popup">
        <img src="img/tel-popup.svg" alt="ico">
    </span>


    <section class="catalog">
        <div class="container">
            <div class="catalog__item" >
                <h2 class="product__title section__title-btn">
                    <span>{{ $brend->name_ru }}</span>
                </h2>
                <div class="catalog-main">
                    @foreach ($brend->products as $product)
                    <div class="product-carousel__item">
                        <div class="product-carousel__img">
                            <img src="{{ $product->photo }}" alt="product">
                        </div>
                        <div class="product-carousel__title">
                            {{ $product->name_ru }}
                        
                        </div>
                        <div class="product-carousel__text">
                            {!!substr($product->discription_ru, 0, 100)!!}
                        </div>
                        <a href="{{route('product.show', $product->slug)}}" class="product-carousel__btn btn">
                            Подробнее
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </section>
@endsection
