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
				<a href="#">Главная</a>
				<i class="fa fa-chevron-right current"></i>
				<a href="#" class="current">События и семинары</a>
			</div>
		</div>
	</div>

	<span class="tel-popup">
		<img src="img/tel-popup.svg" alt="ico">
	</span>

	<section class="timeline timeline-page">
		<div class="container">
			<div class="timeline-type">
				<span class="timeline-type__event">События</span>
				<span class="timeline-type__seminar">Семинары</span>
			</div>
		</div>
		<div class="timeline-event timeline-tab">
			<div class="container">
				<div class="timeline-years">
					@foreach($years_event as $year=>$events)
						<span>{{ $year }}</span>
					@endforeach
				</div>
				@foreach($years_event as $year=>$events)
					<div class="timeline__year">
						<div class="timeline-content">
							@foreach ($years_event[$year] as $event)
								<div class="timeline-carousel__item">
									<div class="timeline-carousel__date">
										{{$event->date}}
									</div>
									<div class="timeline-carousel__dot">
										<span></span>
									</div>
									<div class="timeline-carousel__wrap">
										<img src="{{$event->photo}}" alt="image">
										<p class="timeline-carousel__text">
											{!!substr($event->discription_ru, 0, 200)!!}
										</p>
										<a href="{{route('event.show', $event->slug)}}" class="timeline-carousel__link">Подробнее</a>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<div class="timeline-seminar timeline-tab">
			<div class="container">
				<div class="timeline-years">
					@foreach($years_seminar as $year=>$seminars)
						<span>{{ $year }}</span>
					@endforeach
				</div>
				@foreach($years_seminar as $year=>$value)
				<div class="timeline__year">
					<div class="timeline-content">
						@foreach($years_seminar[$year] as $seminar)
							<div class="timeline-carousel__item">
								<div class="timeline-carousel__date">
									{{$seminar->date}}
								</div>
								<div class="timeline-carousel__dot">
									<span></span>
								</div>
								<div class="timeline-carousel__wrap">
									<img src="{{$seminar->photo}}" alt="image">
									<p class="timeline-carousel__text">
										{!!substr($seminar->discription_ru, 0, 200)!!}
									</p>
									<a href="{{route('event.show',$seminar->slug )}}" class="timeline-carousel__link">Подробнее</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
				@endforeach
				{{-- <div class="timeline__year">
					<div class="timeline-content">
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
					<div class="timeline-content">
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
				</div> --}}
			</div>
		</div>
	</section>
@endsection