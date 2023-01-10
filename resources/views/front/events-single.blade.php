@extends('layouts.front.main')
@section('content')
	<div class="offer">
		<div class="container">
			<div class="offer-links">
				<a href="#">Главная</a>
				{{-- <i class="fa fa-chevron-right"></i> --}}
				{{-- <a href="#">События и семинары</a> --}}
				<i class="fa fa-chevron-right current"></i>
				<a href="#" class="current">{{$new->title_ru}}</a>
			</div>
		</div>
	</div>

	<span class="tel-popup">
		<img src="/img/tel-popup.svg" alt="ico">
	</span>
	{{-- @dd($new) --}}
	<section class="events-single">
		<div class="container">
			<div class="events-single__wrap">
				<div class="events-single__main">
					<div class="events-single__back">
						<a href="/event"><i class="fa fa-chevron-left"></i>Назад</a>
					</div>
					<div class="events-single__img">
						<span>{{$new->date}}</span>
						<img src="{{$new->photo}}" alt="img">
						{{-- <a href="#" class="btn">Принять участие</a> --}}
					</div>
					<h3 class="events-single__title">
						{{$new->title_ru}}
					</h3>
					<p class="events-single__text">
						{!!$new->discription_ru!!}
					</p>
					<div class="product-tabs">
						<div class="product-tabs__nav">
							<a href="#" class="current product-tabs__nav-char" >Файлы</a>
							<a href="#" class="product-tabs__nav-video">Видео</a>
						</div>
						<div class="product-tabs__wrap">
							<div class="product-tab">
								<div class="product-tab__text">
									<img src="{{$new->photo_2}}" >
									{{-- <div class="product-tab__doc">
										<span>
											Итоги семинара.pdf 
										</span>
										<span>
											
											<img src="/img/doc.svg" alt="ico">
										</span>
									</div> --}}
									{{-- <div class="product-tab__doc">
										<span>
											<img src="img/file.svg" alt="ico">
											Файлы презентации.pdf 
										</span>
										<span>
											<a href="#"><img src="img/eye.svg" alt="ico"></a>
											<a href="#"><img src="img/doc.svg" alt="ico"></a>
										</span>
									</div>
									<div class="product-tab__doc">
										<span>
											<img src="img/file.svg" alt="ico">
											Буклет.pdf  
										</span>
										<span>
											<a href="#"><img src="img/eye.svg" alt="ico"></a>
											<a href="#"><img src="img/doc.svg" alt="ico"></a>
										</span>
									</div>
									<div class="product-tab__doc">
										<span>
											<img src="img/file.svg" alt="ico">
											Полезные материалы.pdf  
										</span>
										<span>
											<a href="#"><img src="img/eye.svg" alt="ico"></a>
											<a href="#"><img src="img/doc.svg" alt="ico"></a>
										</span>
									</div> --}}
									
								</div>
								<div class="product-tab__video">
									{!!$new->link!!}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="events-single__side">
					<div class="events-single__other">
						Другие семинары
					</div>
					@foreach ($news as $new)
					<a href="{{route('event.show',$new->slug )}}" class="events-single__more">
						<div class="events-single__more-img">
							<img src="{{$new->photo}}" alt="img">
						</div>
						<div class="events-single__more-wrap">
							<div class="events-single__more-name">
								{{$new->title_ru}}
							</div>
							<div class="events-single__time">
								{{$new->date}}
							</div>
						</div>
					</a>
					@endforeach
					{{-- <a href="#" class="events-single__more">
						<div class="events-single__more-img">
							<img src="img/events2.jpg" alt="img">
						</div>
						<div class="events-single__more-wrap">
							<div class="events-single__more-name">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</div>
							<div class="events-single__time">
								24.05.2021
							</div>
						</div>
					</a>
					<a href="#" class="events-single__more">
						<div class="events-single__more-img">
							<img src="img/events1.jpg" alt="img">
						</div>
						<div class="events-single__more-wrap">
							<div class="events-single__more-name">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</div>
							<div class="events-single__time">
								24.05.2021
							</div>
						</div>
					</a>
					<a href="#" class="events-single__more">
						<div class="events-single__more-img">
							<img src="img/events2.jpg" alt="img">
						</div>
						<div class="events-single__more-wrap">
							<div class="events-single__more-name">
								Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.
							</div>
							<div class="events-single__time">
								24.05.2021
							</div>
						</div>
					</a> --}}
				</div>
			</div>
		</div>
	</section>
	
@endsection