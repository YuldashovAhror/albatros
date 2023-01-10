
{{-- @dd($product) --}}
@extends('layouts.front.main')
@section('content')
	<div class="zoom-image-popup">
		<svg class="zoom-image-popup__close" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M11.5237 10.6259L19.8274 18.9295L18.9125 19.8445L10.6088 11.5408L1.92532 20.2243L0.975834 19.2748L9.6593 10.5914L1.68363 2.61569L2.59859 1.70073L10.5743 9.67639L19.275 0.975667L20.2245 1.92515L11.5237 10.6259Z" fill="black"/>
		</svg>
		<img src="" alt="img">
	</div>

	<div class="offer">
		<div class="container">
			<div class="offer-links">
				<a href="/">Главная</a>
				
			</div>
		</div>
	</div>

	<span class="tel-popup">
		<img src="/img/tel-popup.svg" alt="ico">
	</span>

	{{-- $product --}}
	<section class="product-single">
		<div class="container">
			<div class="product-info">
				<div class="product-gallery">
					<div class="product-gallery__thumb">
						<div class="product-gallery__thumb-img current">
							<img src="{{$product->photo}}" alt="img">
						</div>
						{{-- <div class="product-gallery__thumb-img">
							<img src="/img/product2.png" alt="img">
						</div>
						<div class="product-gallery__thumb-img">
							<img src="/img/product1.png" alt="img">
						</div>
						<div class="product-gallery__thumb-img">
							<img src="/img/product2.png" alt="img">
						</div>			 --}}
					</div>
					<div class="product-gallery__img zoom-image">
						<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="25" cy="25" r="25" fill="#E31E24"/>
							<path d="M33.71 32.29L30.31 28.9C31.407 27.5025 32.0022 25.7767 32 24C32 22.4178 31.5308 20.871 30.6518 19.5554C29.7727 18.2398 28.5233 17.2145 27.0615 16.609C25.5997 16.0035 23.9911 15.845 22.4393 16.1537C20.8874 16.4624 19.462 17.2243 18.3431 18.3431C17.2243 19.462 16.4624 20.8874 16.1537 22.4393C15.845 23.9911 16.0035 25.5997 16.609 27.0615C17.2145 28.5233 18.2398 29.7727 19.5554 30.6518C20.871 31.5308 22.4178 32 24 32C25.7767 32.0022 27.5025 31.407 28.9 30.31L32.29 33.71C32.383 33.8037 32.4936 33.8781 32.6154 33.9289C32.7373 33.9797 32.868 34.0058 33 34.0058C33.132 34.0058 33.2627 33.9797 33.3846 33.9289C33.5064 33.8781 33.617 33.8037 33.71 33.71C33.8037 33.617 33.8781 33.5064 33.9289 33.3846C33.9797 33.2627 34.0058 33.132 34.0058 33C34.0058 32.868 33.9797 32.7373 33.9289 32.6154C33.8781 32.4936 33.8037 32.383 33.71 32.29ZM18 24C18 22.8133 18.3519 21.6533 19.0112 20.6666C19.6705 19.6799 20.6075 18.9109 21.7039 18.4567C22.8003 18.0026 24.0067 17.8838 25.1705 18.1153C26.3344 18.3468 27.4035 18.9182 28.2426 19.7574C29.0818 20.5965 29.6532 21.6656 29.8847 22.8295C30.1162 23.9933 29.9974 25.1997 29.5433 26.2961C29.0892 27.3925 28.3201 28.3295 27.3334 28.9888C26.3467 29.6481 25.1867 30 24 30C22.4087 30 20.8826 29.3679 19.7574 28.2426C18.6321 27.1174 18 25.5913 18 24Z" fill="white"/>
						</svg>	
						<span>Новинка</span>
						<img src="" alt="img">
					</div>
				</div>
				<div class="product-desc">
					<h2 class="product-desc__title">
						{{$product->name_ru}}
					</h2>
					<p class="product-desc__text">
						{!!$product->discription_ru!!}
					</p>
					<div class="product-desc__btns">
						<a href="{{$product->instruct_photo}}" class="btn">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5087 2.53174H7.41007C5.52265 2.53174 3.89557 4.06166 3.89557 5.94999V15.7702C3.89557 17.7649 5.41632 19.3553 7.41007 19.3553H14.7333C16.6217 19.3553 18.1516 17.6595 18.1516 15.7702V7.36807L13.5087 2.53174Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.2679 2.521V5.18758C13.2679 6.48925 14.3211 7.54525 15.6219 7.548C16.8291 7.55075 18.0639 7.55166 18.1473 7.54616" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.0937 14.2613H8.14642" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.2223 9.72176H8.14597" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>		
							<span>Инструкция</span>
						</a>
						<a href="#" class="btn btn-blue feedback-open">
							Оставить заявку
						</a>
					</div>
				</div>
			</div>
			<div class="product-tabs">
				<div class="product-tabs__nav">
					<a href="#" class="current product-tabs__nav-char" >Характеристика</a>
					<a href="#" class="product-tabs__nav-video">Видео</a>
				</div>
				<div class="product-tabs__wrap">
					<div class="product-tab">
						<div class="product-tab__text">

							<!-- ТЕГ Р ОБЫЧНЫЙ ТЕКСТ, LI С ТОЧКАМИ-->

							<p>
								{!!$product->charactiristic_ru!!}
							</p>
							</ul>
						</div>
						<div class="product-tab__video">
							{!!$product->link!!}
						</div>
					</div>
					<div class="product-side">
						<div class="product-side__img">
							<img src="/img/bioquell.svg" alt="ico">
						</div>
						<div class="product-side__desc">
							<p>
								Bioquell An Ecolab Solution Ltd - один из мировых лидеров в производстве Ультразвукового диагностического, лабораторного  оборудования и  систем жизнеобеспечения (КНР).
							</p>
							{{-- <a href="#" class="btn">Все товары бренда </a> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- <section class="catalog">
		<div class="container">
			<div class="catalog__item">			
				<h2 class="product__title section__title-btn">
					<span>ИХЛА</span>
					<div>
						<a href="#">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5087 2.53174H7.41007C5.52265 2.53174 3.89557 4.06166 3.89557 5.94999V15.7702C3.89557 17.7649 5.41632 19.3553 7.41007 19.3553H14.7333C16.6217 19.3553 18.1516 17.6595 18.1516 15.7702V7.36807L13.5087 2.53174Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.2679 2.521V5.18758C13.2679 6.48925 14.3211 7.54525 15.6219 7.548C16.8291 7.55075 18.0639 7.55166 18.1473 7.54616" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.0937 14.2613H8.14642" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.2223 9.72176H8.14597" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>		
							<span>Скачать прайс</span>
						</a>
					</div>	
				</h2>
				<div class="catalog-main">
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product1.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product2.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product1.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product2.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product1.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product2.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product1.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
					<div class="product-carousel__item">
						<div class="product-carousel__img">
							<img src="/img/product2.png" alt="product">
						</div>
						<div class="product-carousel__title">
							MAGLUMI™ 600 + компьютер с сенсорным экраном
						</div>
						<div class="product-carousel__text">
							До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
						</div>
						<a href="#" class="product-carousel__btn btn">
							Подробнее
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<section class="category category-product">
		<div class="container">
			<h2 class="category__title section__title-btn">
				<span>Категории оборудования</span>
				<a href="/catalog">Весь каталог</a>
			</h2>
			<div class="category-main">
				@foreach ($categories as $category)
				<a href="{{route('category', $category->id)}}" class="category-item">
					<div class="category-item__img">
						<img src="{{$category->photo}}" alt="category">
					</div>
					<p class="category-item__text">
						{{$category->name_ru}}
					</p>
				</a>
				@endforeach
			</div>
		</div>
	</section>
@endsection