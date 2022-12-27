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
				<a href="#" class="current">Контакты</a>
			</div>
		</div>
	</div>
	<span class="tel-popup">
		<img src="img/tel-popup.svg" alt="ico">
	</span>
	<footer class="footer">
		<div class="footer-contact footer-contact__page">
			<div class="container">
				<div class="footer-main">
					<div class="footer-logo">
						<a href="index.html">
							<img src="img/logo.svg" alt="Albatros">
						</a>
					</div>
					<div class="footer-wrap">
						<div>
							<div class="footer-info">
								<img src="img/marker.svg" alt="ico">
								<p>39 улица М. Массона, Ташкент</p>
							</div>
							<div class="footer-tel">
								<img src="img/tel-round.svg" alt="ico">
								<div>
									<p>
										<span>+998 78 152 02 22</span> Головной офис
									</p>
									<p>
										<span>+998 78 153 03 23</span> Отдел снабжения
									</p>
									<p>
										<span>+998 78 154 04 24</span> Бухгалтерия
									</p>
								</div>
							</div>
							<div class="footer-info">
								<img src="img/time.svg" alt="ico">
								<p>8:00 - 19:30 <br>
									Ежедневно</p>
							</div>
							<div class="footer-info">
								<img src="img/mail.svg" alt="ico">
								<p>info@ahc.uz</p>
							</div>
						</div>
						<div>
							<div class="footer-title">
								Следите за нами в социальных сетях:
							</div>
							<ul class="footer-follow">
								<li class="footer-follow__item">
									<a href="#" class="footer-follow__link">
										<img src="img/telegram.svg" target="_blank" alt="ico">
									</a>
								</li>
								<li class="footer-follow__item">
									<a href="#" class="footer-follow__link">
										<img src="img/instagram.svg" target="_blank" alt="ico">
									</a>
								</li>
								<li class="footer-follow__item">
									<a href="#" class="footer-follow__link">
										<img src="img/facebook.svg" target="_blank" alt="ico">
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer-top">
						<i class="fa fa-chevron-up"></i>
					</div>
				</div>
			</div>
			<div class="footer-map" id="map"></div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<p>2021 &copy; Albatros Health Care. </p>
			<p class="footer-copy__abs">Политика конфиденциальности</p>
			<p><span>Разработано в</span> <a href="http://novastudio.uz/" target="_blank"> <img src="img/nova.svg" alt=""> </a></p>
			</div>
		</div>
	</footer>
@endsection
	{{-- <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>
</body>
</html> --}}