@extends('layouts.front.main')
@section('content')
	<div class="preloader">
		<div class="preloader__content">
			<img src="img/logo.svg" alt="Albatros" class="preloader__logo img-fluid">
			<div class="preloader__dna">
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
				<div class="el"></div>
			</div>
		</div>
	</div>
	<!-- CHANGE попап затемнение-->
	<div class="dev">
		<div class="dev-content">
			<span class="dev__close">
				<img src="img/close-black.svg" alt="ico">
			</span>
			<p>
				Страница на стадии разработки
			</p>
		</div>
	</div>
    <div class="partners-popup">
		<div class="partners-popup__content">
			<span class="partners-popup__close">
				<img src="img/close.svg" alt="ico">
			</span>
			<div class="partners-popup__logo">
				<img src="" alt="ico">
			</div>
			<div class="partners-popup__text">
			</div>
		</div>
	</div>
	{{-- @dd($banners) --}}
	<section class="main">
		<div class="main-carousel owl-carousel">
			<div class="main-item">
				<div class="main-item__wrap">	
					@foreach ($banners as $banner)
						<div class="main-item__content">
							<h2 class="main-item__title">
								{{$banner->products->name_ru}}
							</h2>
							<p class="main-item__text">
								{!!$banner->products->discription_ru!!}
							</p>
							<div class="main-item__btns">
								<a href="#" class="main-item__btn btn">
									Подробнее
								</a>
								{{-- <a href="#" class="main-item__btn main-item__btn-trans btn">
									Каталог
								</a> --}}
							</div>
						</div>
						<div class="main-item__img">
							<img src="{{$banner->photo}}" alt="item" class="main-item__img-desc">
							<img src="{{$banner->mobile_photo}}" alt="item" class="main-item__img-mobi">
						</div>
					@endforeach
				</div>
			</div>
			{{-- <div class="main-item">
				<div class="main-item__wrap">
					<div class="main-item__content">
						<h2 class="main-item__title">
							MAGLUMI™ 4000 Plus + компьютер с сенсорным экраном
						</h2>
						<p class="main-item__text">
							До 280 тестов/час 25 позиций для картриджей с реагентами<br>
							Загрузка до 144 образцов (расширение до 280)<br>
							Загрузка кювет до 160 штативов по 960 анализов
						</p>
						<div class="main-item__btns">
							<a href="#" class="main-item__btn btn">
								Подробнее
							</a>
							<a href="#" class="main-item__btn main-item__btn-trans btn">
								Каталог
							</a>
						</div>
					</div>
					<div class="main-item__img">
						<img src="/img/main1.png" alt="item" class="main-item__img-desc">
						<img src="/img/main1-mobile.png" alt="item" class="main-item__img-mobi">
					</div>
				</div>
			</div>
			<div class="main-item">
				<div class="main-item__wrap">
					<div class="main-item__content">
						<h2 class="main-item__title">
							MAGLUMI™ 4000 Plus2 + компьютер с сенсорным экраном
						</h2>
						<p class="main-item__text">
							До 280 тестов/час 25 позиций для картриджей с реагентами<br>
							Загрузка до 144 образцов (расширение до 280)<br>
							Загрузка кювет до 160 штативов по 960 анализов
						</p>
						<div class="main-item__btns">
							<a href="#" class="main-item__btn btn">
								Подробнее
							</a>
							<a href="#" class="main-item__btn main-item__btn-trans btn">
								Каталог
							</a>
						</div>
					</div>
					<div class="main-item__img">
						<img src="/img/main1.png" alt="item" class="main-item__img-desc">
						<img src="/img/main1-mobile.png" alt="item" class="main-item__img-mobi">
					</div>
				</div>
			</div>
			<div class="main-item">
				<div class="main-item__wrap">
					<div class="main-item__content">
						<h2 class="main-item__title">
							MAGLUMI™ 4000 Plus3 + компьютер с сенсорным экраном
						</h2>
						<p class="main-item__text">
							До 280 тестов/час 25 позиций для картриджей с реагентами<br>
							Загрузка до 144 образцов (расширение до 280)<br>
							Загрузка кювет до 160 штативов по 960 анализов
						</p>
						<div class="main-item__btns">
							<a href="#" class="main-item__btn btn">
								Подробнее
							</a>
							<a href="#" class="main-item__btn main-item__btn-trans btn">
								Каталог
							</a>
						</div>
					</div>
					<div class="main-item__img">
						<img src="/img/main1.png" alt="item" class="main-item__img-desc">
						<img src="/img/main1-mobile.png" alt="item" class="main-item__img-mobi">
					</div>
				</div>
			</div>
			<div class="main-item">
				<div class="main-item__wrap">
					<div class="main-item__content">
						<h2 class="main-item__title">
							MAGLUMI™ 4000 Plus4 + компьютер с сенсорным экраном
						</h2>
						<p class="main-item__text">
							До 280 тестов/час 25 позиций для картриджей с реагентами<br>
							Загрузка до 144 образцов (расширение до 280)<br>
							Загрузка кювет до 160 штативов по 960 анализов
						</p>
						<div class="main-item__btns">
							<a href="#" class="main-item__btn btn">
								Подробнее
							</a>
							<a href="#" class="main-item__btn main-item__btn-trans btn">
								Каталог
							</a>
						</div>
					</div>
					<div class="main-item__img">
						<img src="/img/main1.png" alt="item" class="main-item__img-desc">
						<img src="/img/main1-mobile.png" alt="item" class="main-item__img-mobi">
					</div>
				</div>
			</div>
			<div class="main-item">
				<div class="main-item__wrap">
					<div class="main-item__content">
						<h2 class="main-item__title">
							MAGLUMI™ 4000 Plus4 + компьютер с сенсорным экраном
						</h2>
						<p class="main-item__text">
							До 280 тестов/час 25 позиций для картриджей с реагентами<br>
							Загрузка до 144 образцов (расширение до 280)<br>
							Загрузка кювет до 160 штативов по 960 анализов
						</p>
						<div class="main-item__btns">
							<a href="#" class="main-item__btn btn">
								Подробнее
							</a>
							<a href="#" class="main-item__btn main-item__btn-trans btn">
								Каталог
							</a>
						</div>
					</div>
					<div class="main-item__img">
						<img src="/img/main1.png" alt="item" class="main-item__img-desc">
						<img src="/img/main1-mobile.png" alt="item" class="main-item__img-mobi">
					</div>
				</div>
			</div> --}}
		</div>
		<ul class="main-dots dots">
			<li class="active"></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</section>
	<section class="about">
		<div class="container">
			<div class="about-content">
				<h2 class="section__title about__title">
					О компании
				</h2>
				<p class="section__text about__text">
					С 2017 года мы занимаемся поставками и продажей медицинского оборудования, медицинской мебели, инструментов и расходного материала. Мы предлагаем полный цикл услуг – от проектирования и строительства ЛПУ, первичных консультаций до внедрения медицинских технологий, в том числе сопровождение, сервисное обслуживание и обучение персонала заказчика.
				</p>
				<div class="about-info">
					<div class="about-info__item">
						<h4 class="about-info__title">
							с 1998 года
						</h4>
						<p class="about-info__text">
							на рынке In-Vitro диагностики
						</p>
					</div>
					<div class="about-info__item">
						<h4 class="about-info__title">
							24/7
						</h4>
						<p class="about-info__text">
							технический сервис
						</p>
					</div>
					<div class="about-info__item">
						<h4 class="about-info__title">
							Более 150 клиентов
						</h4>
					</div>
					<a href="/about" class="about-info__btn btn">
						О компании
					</a>
				</div>
			</div>
			<div class="about__img">
				<img src="img/about.png" alt="about">
			</div>
		</div>
		{{-- @dd($categories) --}}
	</section>
	<section class="category">
		
			<div class="container">
				<h2 class="category__title section__title-btn">
					<span>Категории оборудования</span>
					<a href="#">Весь каталог</a>
				</h2>
				<div class="category-main">
					@foreach ($categories as $category)
						<a href="#" class="category-item">
							<div class="category-item__img">
								<img src="{{$category->photo}}" alt="category">
							</div>
							<p class="category-item__text">
								{{$category->name_ru}}
							</p>
						</a>
						{{-- <a href="#" class="category-item">
							<div class="category-item__img">
								<img src="/img/cat2.png" alt="category">
							</div>
							<p class="category-item__text">
								Гемостаз
							</p>
						</a>
						<a href="#" class="category-item">
							<div class="category-item__img">
								<img src="img/cat3.png" alt="category">
							</div>
							<p class="category-item__text">
								Биохимия
							</p>
						</a>
						<a href="#" class="category-item">
							<div class="category-item__img">
								<img src="img/cat4.png" alt="category">
							</div>
							<p class="category-item__text">
								Гематология
							</p>
						</a>
						<a href="#" class="category-item">
							<div class="category-item__img">
								<img src="img/cat5.png" alt="category">
							</div>
							<p class="category-item__text">
								Реагенты ИХЛА
							</p>
						</a>
						<a href="#" class="category-item">
							<div class="category-item__img">
								<img src="img/cat6.png" alt="category">
							</div>
							<p class="category-item__text">
								ПЦР-тесты
							</p>
						</a>
						<a href="#" class="category-item">
							<div class="category-item__img">
								<img src="img/cat5.png" alt="category">
							</div>
							<p class="category-item__text">
								Реагенты ИХЛА
							</p>
						</a>
						<a href="#" class="category-item">
							<div class="category-item__img">
								<img src="img/cat6.png" alt="category">
							</div>
							<p class="category-item__text">
								ПЦР-тесты
							</p>
						</a> --}}
						@endforeach
					</div>
			</div>
		
	</section>
	<section class="product">
		<div class="container">
			<h2 class="product__title section__title-btn">
				<span>Продукция</span>
				<div>
					{{-- <a href="#">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M13.5087 2.53174H7.41007C5.52265 2.53174 3.89557 4.06166 3.89557 5.94999V15.7702C3.89557 17.7649 5.41632 19.3553 7.41007 19.3553H14.7333C16.6217 19.3553 18.1516 17.6595 18.1516 15.7702V7.36807L13.5087 2.53174Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M13.2679 2.521V5.18758C13.2679 6.48925 14.3211 7.54525 15.6219 7.548C16.8291 7.55075 18.0639 7.55166 18.1473 7.54616" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M13.0937 14.2613H8.14642" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.2223 9.72176H8.14597" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>		
						<span>Скачать прайс</span>
					</a> --}}
					<a href="#" class="section__title-btn__white">Каталог</a>
				</div>	
			</h2>
		</div>
		<div class="product-carousel owl-carousel">
			<div class="product-carousel__item">
				<div class="product-carousel__img">
					<img class="owl-lazy" data-src="img/product1.png" alt="product">
				</div>
				<div class="product-carousel__title">
					MAGLUMI™ 600 + компьютер с сенсорным экраном
				</div>
				<div class="product-carousel__text">
					<p>ИХЛА</p>
					До 1 0 8 тестов/час 4 позиций для картриджей с реагентами Загрузка до 16 образцов
				</div>
				<a href="#" class="product-carousel__btn btn">
					Подробнее
				</a>
			</div>
			<div class="product-carousel__item">
				<div class="product-carousel__img">
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product1.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product1.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
					<img class="owl-lazy" data-src="img/product2.png" alt="product">
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
		<div class="product-arrows">
			<div class="container">
				<span class="product-arrow product-arrow__left">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M13.5 17C13.6316 17.0008 13.7621 16.9755 13.8839 16.9258C14.0057 16.876 14.1166 16.8027 14.21 16.71C14.3037 16.617 14.3781 16.5064 14.4289 16.3846C14.4797 16.2627 14.5058 16.132 14.5058 16C14.5058 15.868 14.4797 15.7373 14.4289 15.6154C14.3781 15.4936 14.3037 15.383 14.21 15.29L10.9 12L14.08 8.68999C14.2663 8.50263 14.3708 8.24918 14.3708 7.98499C14.3708 7.7208 14.2663 7.46735 14.08 7.27999C13.987 7.18626 13.8764 7.11187 13.7546 7.0611C13.6327 7.01033 13.502 6.98419 13.37 6.98419C13.238 6.98419 13.1073 7.01033 12.9854 7.0611C12.8636 7.11187 12.753 7.18626 12.66 7.27999L8.8 11.28C8.61677 11.4669 8.51414 11.7182 8.51414 11.98C8.51414 12.2417 8.61677 12.4931 8.8 12.68L12.8 16.68C12.8898 16.7769 12.9978 16.8551 13.118 16.91C13.2381 16.965 13.368 16.9955 13.5 17Z" fill="white"/>
					</svg>		
				</span>
				<span class="product-arrow product-arrow__right">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M10.5 17C10.3684 17.0008 10.2379 16.9755 10.1161 16.9258C9.99426 16.876 9.88344 16.8027 9.79 16.71C9.69627 16.617 9.62188 16.5064 9.57111 16.3846C9.52034 16.2627 9.4942 16.132 9.4942 16C9.4942 15.868 9.52034 15.7373 9.57111 15.6154C9.62188 15.4936 9.69627 15.383 9.79 15.29L13.1 12L9.92 8.68999C9.73375 8.50263 9.62921 8.24918 9.62921 7.98499C9.62921 7.7208 9.73375 7.46735 9.92 7.27999C10.013 7.18626 10.1236 7.11187 10.2454 7.0611C10.3673 7.01033 10.498 6.98419 10.63 6.98419C10.762 6.98419 10.8927 7.01033 11.0146 7.0611C11.1364 7.11187 11.247 7.18626 11.34 7.27999L15.2 11.28C15.3832 11.4669 15.4859 11.7182 15.4859 11.98C15.4859 12.2417 15.3832 12.4931 15.2 12.68L11.2 16.68C11.1102 16.7769 11.0022 16.8551 10.882 16.91C10.7619 16.965 10.632 16.9955 10.5 17Z" fill="#E31E24"/>
					</svg>			
				</span>
			</div>
		</div>
	</section>
	<section class="timeline">
		<div class="container">
			<h2 class="timeline__title section__title-btn">
				<span>События и семинары</span>
				<a href="#" class="section__title-btn__white">Все</a>
			</h2>
			<div class="timeline-type">
				<span class="timeline-type__event">События</span>
				<span class="timeline-type__seminar">Семинары</span>
			</div>
		</div>
		<div class="timeline-event timeline-tab">
			<div class="container">
				<div class="timeline-years">
					<span>2019</span>
					<span>2020</span>
					<span>2021</span>
				</div>
			</div>
			<div class="timeline__year">
				<div class="timeline-carousel owl-carousel">
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			<div class="timeline__year">
				<div class="timeline-carousel owl-carousel">
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			<div class="timeline__year">
				<div class="timeline-carousel owl-carousel">
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="timeline-seminar timeline-tab">
			<div class="container">
				<div class="timeline-years">
					<span>2019</span>
					<span>2020</span>
					<span>2021</span>
				</div>

			</div>
			<div class="timeline__year">
				<div class="timeline-carousel owl-carousel">
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			<div class="timeline__year">
				<div class="timeline-carousel owl-carousel">
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			<div class="timeline__year">
				<div class="timeline-carousel owl-carousel">
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline1.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
					<div class="timeline-carousel__item">
						<div class="timeline-carousel__date">
							24.03.21
						</div>
						<div class="timeline-carousel__dot">
							<span></span>
						</div>
						<div class="timeline-carousel__wrap">
							<img src="img/timeline2.jpg" alt="image">
							<p class="timeline-carousel__text">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</p>
							<a href="#" class="timeline-carousel__link">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="consult">
		<div class="container">
			<div class="consult-main">
				<div class="consult-card">
					<div class="consult__title">
						Получить <strong>консультацию специалиста</strong>
					</div>
					<p class="consult__text">
						Закажите в один клик обратный звонок!
					</p>
					<div class="consult-form">
						<form action="#" class="form">
							<input type="text" class="form__name" required placeholder="Ваше имя">
							<input type="tel" class="form__tel" placeholder="Номер телефона" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
							<button type="submit" class="form__btn btn">Отправить заявку</button>
						</form>
					</div>
				</div>
				<img src="img/consult.png" alt="consult" class="consult__img">
			</div>
		</div>
	</section>
	{{-- @dd($partners->all()) --}}
	<section class="partners">
		<div class="container">
			<h2 class="partners__title section__title-btn">
				<span>Партнёры по Республике Узбекистан</span>
			</h2>
			
			<div class="partners-wrap">
				<div class="partners-main">
						@foreach ($partners as $partner)
							<img src="{{$partner->photo}}" alt="ico">
						@endforeach
						<a href="#" class="partners__link">Еще 40+</a>
					</div>
			</div>
		</div>
	</section>
	{{-- @dd($informations->all()) --}}
	<section class="knowledge">
		<div class="container">
			<h2 class="knowledge__title section__title-btn">
				<span>База знаний</span>
				<!-- CHANGE класс добавил для открытия попапа dev-open-->
				<a href="#" class="section__title-btn__white dev-open">Все</a>
			</h2>
			<div class="knowledge-main">
				@foreach ($informations as $information)
				<a href="#" class="knowledge-item">
					<div class="knowledge-item__img">
						<img src="{{$information->info_photo}}" alt="knowledge">
					</div>
					<div class="knowledge-item__name">
						{{$information->name_ru}}
					</div>
				</a>
				@endforeach
				{{-- <a href="knowledge.html#license" class="knowledge-item">
					<div class="knowledge-item__img">
						<img src="img/know2.jpg" alt="knowledge">
					</div>
					<div class="knowledge-item__name">
						Лицензии
					</div>
				</a>
				<a href="knowledge.html#instruct" class="knowledge-item">
					<div class="knowledge-item__img">
						<img src="img/know3.jpg" alt="knowledge">
					</div>
					<div class="knowledge-item__name">
						Инструкции
					</div>
				</a> --}}
				<a href="knowledge.html#more" class="knowledge-item">
					<div class="knowledge-item__img">
						<img src="img/know4.jpg" alt="knowledge">
					</div>
					<div class="knowledge-item__name">
						Другое
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="foreign">
		<div class="container">
			<h2 class="foreign__title section__title-btn">
				<span>Наши зарубежные партнёры</span>
				<div>
					<a href="#" class="section__title-btn__white">Все</a>
					<div class="foreign-carousel__arrows">
						<svg class="foreign-carousel__left" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M13.4998 16.9999C13.4991 16.8683 13.5243 16.7379 13.574 16.616C13.6238 16.4942 13.6971 16.3834 13.7898 16.2899L17.7898 12.2899C17.8831 12.1967 17.9937 12.1227 18.1156 12.0723C18.2374 12.0218 18.368 11.9958 18.4998 11.9958C18.6317 11.9958 18.7622 12.0218 18.8841 12.0723C19.0059 12.1227 19.1166 12.1967 19.2098 12.2899C19.3031 12.3832 19.377 12.4939 19.4275 12.6157C19.4779 12.7375 19.5039 12.8681 19.5039 12.9999C19.5039 13.1318 19.4779 13.2624 19.4275 13.3842C19.377 13.506 19.3031 13.6167 19.2098 13.7099L15.8998 16.9999L19.0798 20.2999C19.1821 20.3919 19.2643 20.504 19.3213 20.6293C19.3783 20.7545 19.4088 20.8901 19.411 21.0276C19.4132 21.1652 19.387 21.3017 19.334 21.4287C19.281 21.5556 19.2024 21.6703 19.103 21.7655C19.0037 21.8607 18.8858 21.9343 18.7567 21.9819C18.6276 22.0294 18.4901 22.0498 18.3528 22.0418C18.2154 22.0338 18.0812 21.9975 17.9586 21.9352C17.8359 21.873 17.7274 21.7861 17.6398 21.6799L13.7798 17.6799C13.6035 17.4971 13.5034 17.2539 13.4998 16.9999Z" fill="white"/>
						</svg>  
						<svg class="foreign-carousel__right" width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.5 20.9999C14.4992 20.8683 14.5244 20.7379 14.5742 20.616C14.624 20.4942 14.6973 20.3834 14.79 20.2899L18.1 16.9999L14.92 13.6999C14.7337 13.5126 14.6292 13.2591 14.6292 12.9949C14.6292 12.7308 14.7337 12.4773 14.92 12.2899C15.0129 12.1962 15.1235 12.1218 15.2454 12.071C15.3673 12.0203 15.498 11.9941 15.63 11.9941C15.762 11.9941 15.8927 12.0203 16.0146 12.071C16.1364 12.1218 16.247 12.1962 16.34 12.2899L20.2 16.2899C20.3832 16.4769 20.4858 16.7282 20.4858 16.9899C20.4858 17.2517 20.3832 17.503 20.2 17.6899L16.2 21.6899C16.107 21.7837 15.9964 21.8581 15.8746 21.9088C15.7527 21.9596 15.622 21.9857 15.49 21.9857C15.358 21.9857 15.2273 21.9596 15.1054 21.9088C14.9835 21.8581 14.8729 21.7837 14.78 21.6899C14.6013 21.5046 14.501 21.2574 14.5 20.9999Z" fill="white"/>
						</svg>
					</div>
				</div>
			</h2>
		</div>
		{{-- @dd($brends->all()) --}}
		<div class="foreign-carousel owl-carousel">
			@foreach ($brends as $brend)
			<div class="foreign-carousel__item">
					<div class="foreign-carousel__img">
						<img src="{{$brend->photo}}" alt="ico">
					</div>
					<p class="foreign-carousel__text">
						{{$brend->discription_ru}}
						{{-- {!!substr($brend->discription_ru, 0, 100)!!} --}}
						
						<span class="foreign-carousel__more">
							Подробнее
							<i class="fa fa-chevron-right"></i>
						</span>
					</p>
				
					<!-- ТЕКСТ ПОПАПА-->
				<div class="foreign-carousel__popup">
					<p>
						{!!$brend->discription_ru!!}
					</p>
						Официальный сайт компании: <a href="{{$brend->link}}" target="_blank">{{$brend->link}}</a>
				</div>
            </div>
			@endforeach
		</div>
	</section>
@endsection