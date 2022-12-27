@extends('layouts.front.main')
@section('content')
	<div class="offer">
		<div class="container">
			<div class="offer-links">
				<a href="#">Главная</a>
				<i class="fa fa-chevron-right current"></i>
				<a href="#" class="current">Каталог</a>
			</div>
		</div>
	</div>

	<span class="tel-popup">
		<img src="img/tel-popup.svg" alt="ico">
	</span>

	

	<section class="catalog">
		<div class="container">
			<div class="section__nav">
				<nav>
					<a href="#ihla" class="nav-link current">ИХЛА</a>
					<a href="#gemostaz" class="nav-link">Гемостаз</a>
					<a href="#biochemic" class="nav-link">Биохимия</a>
					<a href="#gematolog" class="nav-link">Гематология</a>
					<a href="#category" class="nav-link">Категория</a>		
				</nav>
				<div class="section__nav-arrows">
					<span class="section-arrow__down">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.9999 15.4999C11.8683 15.5007 11.7379 15.4755 11.616 15.4257C11.4942 15.3759 11.3834 15.3026 11.2899 15.2099L7.28994 11.2099C7.1967 11.1167 7.12274 11.006 7.07228 10.8842C7.02182 10.7624 6.99585 10.6318 6.99585 10.4999C6.99585 10.3681 7.02182 10.2375 7.07228 10.1157C7.12274 9.99387 7.1967 9.88318 7.28994 9.78994C7.38318 9.6967 7.49387 9.62274 7.61569 9.57228C7.73751 9.52182 7.86808 9.49585 7.99994 9.49585C8.1318 9.49585 8.26237 9.52182 8.38419 9.57228C8.50601 9.62274 8.6167 9.6967 8.70994 9.78994L11.9999 13.0999L15.2999 9.91994C15.3919 9.81765 15.504 9.73544 15.6293 9.67846C15.7545 9.62147 15.8901 9.59093 16.0276 9.58875C16.1652 9.58657 16.3017 9.6128 16.4287 9.66579C16.5556 9.71878 16.6703 9.7974 16.7655 9.89672C16.8607 9.99605 16.9343 10.1139 16.9819 10.243C17.0294 10.3721 17.0498 10.5096 17.0418 10.647C17.0338 10.7843 16.9975 10.9185 16.9352 11.0412C16.873 11.1639 16.7861 11.2724 16.6799 11.3599L12.6799 15.2199C12.4971 15.3963 12.2539 15.4964 11.9999 15.4999Z" fill="#21234A"/>
						</svg>		
					</span>
					<span class="section-arrow__up">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.9999 14.5C15.8683 14.5008 15.7379 14.4756 15.616 14.4258C15.4942 14.376 15.3834 14.3027 15.2899 14.21L11.9999 10.9L8.69994 14.08C8.51258 14.2663 8.25912 14.3708 7.99494 14.3708C7.73075 14.3708 7.4773 14.2663 7.28994 14.08C7.19621 13.9871 7.12182 13.8765 7.07105 13.7546C7.02028 13.6327 6.99414 13.502 6.99414 13.37C6.99414 13.238 7.02028 13.1073 7.07105 12.9854C7.12182 12.8636 7.19621 12.753 7.28994 12.66L11.2899 8.80002C11.4769 8.61679 11.7282 8.51416 11.9899 8.51416C12.2517 8.51416 12.503 8.61679 12.6899 8.80002L16.6899 12.8C16.7837 12.893 16.8581 13.0036 16.9088 13.1254C16.9596 13.2473 16.9857 13.378 16.9857 13.51C16.9857 13.642 16.9596 13.7727 16.9088 13.8946C16.8581 14.0165 16.7837 14.1271 16.6899 14.22C16.5046 14.3987 16.2574 14.499 15.9999 14.5Z" fill="white"/>
						</svg>		
					</span>
				</div>
			</div>
			<div class="catalog__item" id="ihla">			
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
			<div class="catalog__item" id="gemostaz">
				<h2 class="product__title section__title-btn">
					<span>Гемостаз</span>
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
			<div class="catalog__item" id="biochemic">
				<h2 class="product__title section__title-btn">
					<span>Биохимия</span>
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
			<div class="catalog__item" id="gematolog">
				<h2 class="product__title section__title-btn">
					<span>Гематология</span>
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
			<div class="catalog__item" id="category">
				<h2 class="product__title section__title-btn">
					<span>Категория</span>
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
							<img src="img/product1.png" alt="product">
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
							<img src="img/product2.png" alt="product">
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
	</section>

@endsection