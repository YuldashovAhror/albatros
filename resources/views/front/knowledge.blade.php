@extends('layouts.front.main')
@section('content')
{{-- @dd($infos) --}}
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
				<a href="#" class="current">База знаний</a>
			</div>
		</div>
	</div>

	<span class="tel-popup">
		<img src="/img/tel-popup.svg" alt="ico">
	</span>


	<section class="knowledge-page">
		<div class="container">
			{{-- @dd($infocats) --}}
			<div class="knowledge__nav">
				<nav>
					@foreach ($infocats as $key=>$infocat)
					<a href="#" @if($key == 0)class="current"@endif>{{$infocat->name_ru}}</a>
					{{-- <a href="#">Лицензии</a>
					<a href="#">Инструкции</a>
					<a href="#">Другое</a>	 --}}
					@endforeach
				</nav>
			</div>
			{{-- @dd($inf) --}}
			<div class="knowledge-tabs">
				@foreach ($infocats as $infocat)
					<div class="knowledge-tab">
						@foreach ($infocat->informations as $information)
							<div class="knowledge-tab__item">
								<div class="knowledge-tab__name">
									{{ $information->name_uz }}
									<i class="fa fa-chevron-down"></i>
								</div>
								<div class="knowledge-tab__content">
									
										<div class="product-tab__doc">
											<span>
												<img src="{{$information->info_photo}}" alt="ico">
												Итоги семинара
											</span>
											<span>
												<a href="{{$information->info_photo}}"><img src="/img/eye.svg" alt="ico"></a>
												<a href="{{$information->info_photo}}" download=""><img src="/img/doc.svg" alt="ico"></a>
											</span>
										</div>

										<div class="product-tab__doc">
											<span>
												<img src="{{$information->presentation_photo}}" alt="ico">
												Презентация 
											</span>
											<span>
												<a href="{{$information->presentation_photo}}"><img src="/img/eye.svg" alt="ico"></a>
												<a href="{{$information->presentation_photo}}" download=""><img src="/img/doc.svg" alt="ico"></a>
											</span>
										</div>
								</div>
							</div>
						@endforeach
					</div>
				@endforeach
				{{-- <div class="knowledge-tab">
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="knowledge-tab">
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="knowledge-tab">
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Вебинар: COVID-19. Поствакцинальное лабораторное тестирование и биомаркеры воспаления.

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content">
							<div class="product-tab__doc">
								<span>
									<img src="img/file.svg" alt="ico">
									Итоги семинара.pdf 
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
									<a href="#"><img src="img/doc.svg" alt="ico"></a>
								</span>
							</div>
							<div class="product-tab__doc">
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
									<img src="img/film.svg" alt="ico">
									Ссылка на видео
								</span>
								<span>
									<a href="#"><img src="img/eye.svg" alt="ico"></a>
								</span>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
	
@endsection