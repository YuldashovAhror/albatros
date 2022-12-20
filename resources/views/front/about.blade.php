<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Albatros</title>
</head>
<body>
	
	<div class="feedback">
		<div class="feedback-content">
			<span class="feedback__close">
				<img src="img/close-black.svg" alt="ico">
			</span>
			<h4 class="feedback__title">
				Форма обратной связи
			</h4>
			<p class="feedback__text">
				Оставьте ваши координаты и мы свяжемся с вами в ближайшее время
			</p>
			<form action="#" class="feedback-form form">
				<div class="form__wrap">
					<input type="tel" class="form__tel" placeholder="+998" maxlength="19" required="" pattern="^[0-9-+\s()]*$" inputmode="text">
				</div>
				<input type="text" class="form__name" required="" placeholder="Как вас зовут?">
				<p class="feedback__text">
					Нажимая кнопку «Отправить», вы подтверждаете свое согласие на обработку персональных данных
				</p>
				<button type="submit" class="form__btn btn">
					Отправить заявку
				</button>
			</form>
		</div>
	</div>


	<!-- CHANGE попап вакансий-->

	<div class="feedback-vacancy">
		<div class="feedback-content">
			<div class="feedback-wrap">
				<span class="feedback__close">
					<img src="img/close-black.svg" alt="ico">
				</span>
				<h4 class="feedback__title">
					Заявка на вакансию
				</h4>
				<div class="feedback-vacancy__name">
					<img src="img/Briefcase.svg" alt="ico">
					<span>Менеджер по продажам</span>
				</div>
				<h3 class="feedback__subtitle">
					Контактные данные
				</h3>
				<form action="#" class="feedback-form form">
					<div class="form__wrap">
						<input type="tel" class="form__tel" placeholder="+998" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
					</div>
					<input type="text" class="form__name" required placeholder="Как вас зовут?">
					<h3 class="feedback__subtitle">
						Загрузить резюме
					</h3>
					<div class="form-file__wrap">
						<input type="file" name="file1" id="file1" onchange="uploadFile()">
					</div>
					<button type="submit" class="form__btn btn">
						<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.2317 2.76854C16.0902 2.6272 15.9137 2.52609 15.7202 2.47561C15.5267 2.42513 15.3232 2.4271 15.1308 2.48131L2.02957 6.1765C1.80914 6.23867 1.61293 6.36664 1.46717 6.5433C1.32142 6.71997 1.23306 6.93691 1.2139 7.16515C1.19475 7.39338 1.24571 7.62202 1.35998 7.82051C1.47426 8.019 1.64639 8.17788 1.85338 8.27592L7.33308 10.8716L11.0795 7.12517C11.185 7.01967 11.3281 6.9604 11.4773 6.9604C11.6265 6.9604 11.7695 7.01967 11.875 7.12517C11.9805 7.23066 12.0398 7.37375 12.0398 7.52294C12.0398 7.67213 11.9805 7.81522 11.875 7.92071L8.12863 11.6671L10.7243 17.1468C10.8142 17.3396 10.9574 17.5027 11.137 17.6167C11.3166 17.7307 11.525 17.791 11.7378 17.7904C11.77 17.7904 11.8024 17.789 11.8351 17.7863C12.0637 17.7684 12.2813 17.6805 12.4582 17.5346C12.6351 17.3886 12.7627 17.1917 12.8237 16.9706L16.5189 3.86944C16.5731 3.67696 16.575 3.47353 16.5245 3.28005C16.474 3.08657 16.373 2.91002 16.2317 2.76854Z" fill="white"/>
						</svg>
						Отправить заявку
					</button>
				</form>
			</div>
			<div class="feedback-done">
				<img src="img/done.svg" alt="ico">
				<div class="feedback-done__title">
					Ваша заявка успешно отправлена
				</div>
				<p class="feedback-done__text">
					Наши менеджеры обязательно свяжутся с Вами 
					и ответят на все Ваши вопросы.
				</p>
				<a href="index.html" class="form__btn btn">На главную</a>
			</div>
		</div>
	</div>

	<div class="zoom-image-popup">
		<svg class="zoom-image-popup__close" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M11.5237 10.6259L19.8274 18.9295L18.9125 19.8445L10.6088 11.5408L1.92532 20.2243L0.975834 19.2748L9.6593 10.5914L1.68363 2.61569L2.59859 1.70073L10.5743 9.67639L19.275 0.975667L20.2245 1.92515L11.5237 10.6259Z" fill="black"/>
		</svg>
		<img src="" alt="img">
	</div>

	<div class="mobile-menu">
		<div class="mobile-menu__wrap">
			<ul>
				<li>
					<a href="#" class="current">Главная</a>
				</li>
				<li>
					<a href="#">Каталог</a>
				</li>
				<li>
					<a href="#">О компании</a>
				</li>
				<li>
					<a href="#">Партнёры</a>
				</li>
				<li>
					<a href="#">События и семинары</a>
				</li>
				<li>
					<a href="#">База знаний</a>
				</li>
				<li>
					<a href="#">Контакты</a>
				</li>
				<li>
					<a href="#" class="btn">Заказать звонок</a>
				</li>
			</ul>
		</div>
	</div>

	<header class="header">
		<div class="header-logos">
			<div class="container">
				<img src="img/snibe.svg" alt="ico" class="header-logos__img">
				<img src="img/bd.svg" alt="ico" class="header-logos__img">
				<img src="img/bioquell.svg" alt="ico" class="header-logos__img">
				<img src="img/qiagen.svg" alt="ico" class="header-logos__img">
				<img src="img/werfen.svg" alt="ico" class="header-logos__img">
				<img src="img/randox.svg" alt="ico" class="header-logos__img">
				<img src="img/dymind.svg" alt="ico" class="header-logos__img">
				<div class="header-logos__time">
					Пн. – Пт.: с 09:00 до 18:00
				</div>
				<div class="header-logos__tel">
					<img src="img/tel.svg" alt="ico">
					<span>+998(78) 150 06 88</span>
				</div>
			</div>
		</div>
		<div class="header-nav">
			<div class="container">
				<div class="header-nav__logo">
					<a href="index.html">
						<img src="img/logo.svg" alt="Albatros">
					</a>
				</div>
				<ul class="header-nav__menu menu">
					<li class="menu__item">
						<a href="#" class="menu__link menu__link-current">
							Главная
						</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">
							Каталог
						</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">
							События и семинары
						</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">
							Партнёры
						</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">
							База знаний
						</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">
							О компании
						</a>
					</li>
					<li class="menu__item">
						<a href="#" class="menu__link">
							Контакты
						</a>
					</li>
				</ul>
				<a href="#" class="header-nav__btn btn">
					Заказать звонок
				</a>
				<div class="header-nav__mobi">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>

	<div class="offer">
		<div class="container">
			<div class="offer-links">
				<a href="#">Главная</a>
				<i class="fa fa-chevron-right current"></i>
				<a href="#" class="current">О компании</a>
			</div>
		</div>
	</div>

	<span class="tel-popup">
		<img src="img/tel-popup.svg" alt="ico">
	</span>

	<div class="sidemenu">
		<div class="sidemenu__lang">
			<a href="#" >RU</a>
			<a href="#" >UZ</a>
			<a href="#" >EN</a>
		</div>
		<div class="sidemenu__search">
			<img src="img/search.svg" alt="ico">
			<input type="text">
		</div>
		<a href="#" class="sidemenu__cabinet">
			<img src="img/cabinet.svg" alt="ico">
			<span>Личный кабинет</span>
		</a>
	</div>

	<section class="about-main">
		
		<div class="section__nav section__nav-full">
			<div class="container">
				<div class="section__nav-wrap">
					<nav>
						<a href="#about" class="nav-link current">О компании</a>
						<a href="#event" class="nav-link">События и семинары</a>	
						<a href="#personal" class="nav-link">Вакансии</a>
						<a href="#sert" class="nav-link">Сертификаты</a>
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
			</div>
		</div>

		
		<div class="about__main" id="about">
			<div class="container">
				<div class="about__main-wrap">
					<div class="about-content">
						<h2 class="section__title about__title">
							О компании
						</h2>
						<p class="section__text about__text">
							В недалеком 2017 году компания Albatros Health Care начала свою деятельность как официальный дистрибьютор компании Snibe Diagnostic на рынке Узбекистана, представив таким образом новый еще не знакомый многим метод проведения анализов – ИХЛА. Продукты Snibe Diagnostic – ИХЛА автомат-анализаторы Maglumi на тот момент являлись новшеством на рынке и хоть и встречались с интересом, но в то же время с осторожностью с точки зрения руководителей медицинских лабораторий так и инвесторов. Однако понимая, что системы Maglumi представляют собой закрытые системы, и конечные пользователи нуждаются не только в качественном оборудовании, но и в поддержке, Albatros Health Care сконцентрировалась на обеспечении клиентов качественным техническим сервисом и регистрации новых реагентов, чтобы удовлетворить спрос на актуальные, а также редкие реагенты для своих партнеров. Таким образом уже 2 года спустя Albatros Health Care заработала репутацию не только как поставщика оборудования для упрощения и ускорения работы лабораторий, но и надежного партнера решающего задачи и проблемы своих клиентов, а также обеспечивающего гибкий подход во взаимосотрудничестве. Параллельно, изучая рынок лабораторной диагностики и желая развивать диагностику в стране Albatros Health Care находится в поиске решений доступных на мировом рынке, чтобы представить их рынку Узбекистана. Так Albatros Health Care начинает переговоры с крупнейшими мировыми производителями такими как Becton Dickinson, Randox, Werfen (Instrumentation Laboratories), Qiagen, Dymind и другие. Одним из важных продуктов, представленных Albatros Health Care является программа внешней оценки качества (ВОК), которая позволяет лабораториям быть уверенными в качестве получаемых результатов проводимых тестов, и таким образом быть востребованными в среде врачей и в среде конечных пользователей – пациентов. На сегодняшний день портфель Albatros Health Care состоит из решений по широкому спектру автоматизированных направлений – ИХЛА, Биохимия, Гематология, Гемостаз, Микробиология, Молекулярная диагностика, Деконтаминация, ВОК. Компания Albatros Health Care зарекомендовала себя не только как поставщик актуальных продуктов в сфере IVD (In Vitro Diagnostcs), но прежде как надежный партнер обеспечивающий поддержку в решении проблем своих клиентов, обеспечивающая технический сервис 24/7, и поставляющая широчайший ассортимент реагентов для закрытых и открытых систем лабораторной диагностики. Помимо своей коммерческой деятельности компания видит свою миссию в развитии качества диагностики Узбекистана. Для этого мы регулярно проводим семинары и конференции с привлечением ученых с мировым именем из широко известных зарубежных институтов и клиник. Эффективное лечение – через качественную диагностику.
						</p>
					</div>
					<div class="about__img">
						<div class="about__info">
							<p>
								<span>Реквизиты:</span><br>
								ООО «ALBATROS HEALTH CARE»<br>
								Республика Узбекистан, г. Ташкент, ул. Халкобад 17</p>
							<p><span>Тел:</span> +998781500688</p>
							<p>
								<span>р/с:</span> 20208000704997287001
								ЧАКБ Универсал банк
							</p>
							<p><span>МФО:</span> 00996</p>
							<p><span>ИНН:</span> 302383155 </p>
							<p><span>ОКЭД:</span> 46460ООО </p>
					
						</div>
						<img src="img/about.png" alt="about">
					</div>
					</div>
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
							Более 150<br>клиентов
						</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="timeline" id="event">
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
						<span>2017</span>
						<span>2018</span>
						<span>2019</span>
						<span>2020</span>
						<span>2021</span>
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
			</div>
			<div class="timeline-seminar timeline-tab">
				<div class="container">
					<div class="timeline-years">
						<span>2017</span>
						<span>2018</span>
						<span>2019</span>
						<span>2020</span>
						<span>2021</span>
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
			</div>
		</div>

		<div class="personal" id="personal">
			<div class="container">
				<h2 class="personal__title section__title">
					Вакансии
				</h2>

				<!-- <p class="personal-empty">
					Нет свободных вакансий
				</p>     ЭТО ЕСЛИ НЕТ СВОБОДНЫХ ВАКАНСИЙ   -->

				<!-- CHANGE новый блок-->

				<div class="knowledge-tab personal-tab ">
					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Менеджер по продажам медицинского оборудования

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content product-tab__text">
							<!-- ТЕГ Р ОБЫЧНЫЙ ТЕКСТ, LI С ТОЧКАМИ, BR ОТСТУП-->
							<p>
								Требования:
							</p>

							<ul>
								<li>Грамотная устная речь и переписка на русском и узбекском языках</li>
								<li>Возможность приступить к обучению и работе у нас - уже завтра</li>
								<li>Опыт работы в продажах «на телефоне» и переписках - обязателен!</li>
								<li>Опыт работы в Amocrm - приветствуется</li>
								<li>Умение выявлять потребности клиента и работать с возражениями</li>
								<li>Быть «online» на раб.месте с 10-18 - 6 дней в неделю -</li>

							</ul>

							
							<p>Обязанности:</p>
							<ul>
								<li>Прием входящих звонков по телефону, e-mail и мессенджерам</li>
								<li>Обзвон теплых лидов (посетителей наших соцсетей и сайта)</li>
								<li>Заполнение и ведение карточек клиента в AmoCRM</li>
								<li>Выполнение поставленного плана продаж (в формате KPI)</li>
								<li>Работа по готовым скриптам</li>
								<li>Ежедневная отчетность перед руководителем</li>
							</ul>

							<br>

							<p>Основная функция менеджера: оперативная и грамотная консультация всех поступающих обращений от потенциальных учеников наших курсов.</p>
							<p>Условия работы:</p>



							<ul>
								<li>Комфортный офис в г. Ташкент</li>
								<li>
									Премия за KPI (прозрачная система мотивации - звонки, кол-во отправленных ссылок на оплату)
									% c каждой продажи
								</li>
								<li>Выплаты зарплаты - 2 раза в месяц (аванс + основная ЗП) • • • Заработная плата: от 500$ (без верхних ограничений)</li>
								<li>Представляем хорошее жилье в центре города</li>
								<li>Оплачиваемая телефония</li>
								<li>Бонусы (обучение + наставничество)</li>
								<li>При успешном прохождении испытательного срока - гарантированная окладная часть и доп. премии</li>
								<li>Работа в престижной компании, являющейся лидером рынка в Узбекистане и СНГ</li>
							</ul>
							


							<a href="#" class="personal-btn btn">
								<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16.2317 2.76854C16.0902 2.6272 15.9137 2.52609 15.7202 2.47561C15.5267 2.42513 15.3232 2.4271 15.1308 2.48131L2.02957 6.1765C1.80914 6.23867 1.61293 6.36664 1.46717 6.5433C1.32142 6.71997 1.23306 6.93691 1.2139 7.16515C1.19475 7.39338 1.24571 7.62202 1.35998 7.82051C1.47426 8.019 1.64639 8.17788 1.85338 8.27592L7.33308 10.8716L11.0795 7.12517C11.185 7.01967 11.3281 6.9604 11.4773 6.9604C11.6265 6.9604 11.7695 7.01967 11.875 7.12517C11.9805 7.23066 12.0398 7.37375 12.0398 7.52294C12.0398 7.67213 11.9805 7.81522 11.875 7.92071L8.12863 11.6671L10.7243 17.1468C10.8142 17.3396 10.9574 17.5027 11.137 17.6167C11.3166 17.7307 11.525 17.791 11.7378 17.7904C11.77 17.7904 11.8024 17.789 11.8351 17.7863C12.0637 17.7684 12.2813 17.6805 12.4582 17.5346C12.6351 17.3886 12.7627 17.1917 12.8237 16.9706L16.5189 3.86944C16.5731 3.67696 16.575 3.47353 16.5245 3.28005C16.474 3.08657 16.373 2.91002 16.2317 2.76854Z" fill="white"/>
								</svg>
								<span>Заполнить форму на вакансию</span>
							</a>

						</div>
					</div>

					<div class="knowledge-tab__item">
						<div class="knowledge-tab__name">
							Менеджер по продажам чего-то другого

							<i class="fa fa-chevron-down"></i>
						</div>
						<div class="knowledge-tab__content product-tab__text">
							<!-- ТЕГ Р ОБЫЧНЫЙ ТЕКСТ, LI С ТОЧКАМИ, BR ОТСТУП-->
							<p>
								Требования:
							</p>

							<ul>
								<li>Грамотная устная речь и переписка на русском и узбекском языках</li>
								<li>Возможность приступить к обучению и работе у нас - уже завтра</li>
								<li>Опыт работы в продажах «на телефоне» и переписках - обязателен!</li>
								<li>Опыт работы в Amocrm - приветствуется</li>
								<li>Умение выявлять потребности клиента и работать с возражениями</li>
								<li>Быть «online» на раб.месте с 10-18 - 6 дней в неделю -</li>

							</ul>

							
							<p>Обязанности:</p>
							<ul>
								<li>Прием входящих звонков по телефону, e-mail и мессенджерам</li>
								<li>Обзвон теплых лидов (посетителей наших соцсетей и сайта)</li>
								<li>Заполнение и ведение карточек клиента в AmoCRM</li>
								<li>Выполнение поставленного плана продаж (в формате KPI)</li>
								<li>Работа по готовым скриптам</li>
								<li>Ежедневная отчетность перед руководителем</li>
							</ul>

							<br>

							<p>Основная функция менеджера: оперативная и грамотная консультация всех поступающих обращений от потенциальных учеников наших курсов.</p>
							<p>Условия работы:</p>



							<ul>
								<li>Комфортный офис в г. Ташкент</li>
								<li>
									Премия за KPI (прозрачная система мотивации - звонки, кол-во отправленных ссылок на оплату)
									% c каждой продажи
								</li>
								<li>Выплаты зарплаты - 2 раза в месяц (аванс + основная ЗП) • • • Заработная плата: от 500$ (без верхних ограничений)</li>
								<li>Представляем хорошее жилье в центре города</li>
								<li>Оплачиваемая телефония</li>
								<li>Бонусы (обучение + наставничество)</li>
								<li>При успешном прохождении испытательного срока - гарантированная окладная часть и доп. премии</li>
								<li>Работа в престижной компании, являющейся лидером рынка в Узбекистане и СНГ</li>
							</ul>
							


							<a href="#" class="personal-btn btn">
								<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16.2317 2.76854C16.0902 2.6272 15.9137 2.52609 15.7202 2.47561C15.5267 2.42513 15.3232 2.4271 15.1308 2.48131L2.02957 6.1765C1.80914 6.23867 1.61293 6.36664 1.46717 6.5433C1.32142 6.71997 1.23306 6.93691 1.2139 7.16515C1.19475 7.39338 1.24571 7.62202 1.35998 7.82051C1.47426 8.019 1.64639 8.17788 1.85338 8.27592L7.33308 10.8716L11.0795 7.12517C11.185 7.01967 11.3281 6.9604 11.4773 6.9604C11.6265 6.9604 11.7695 7.01967 11.875 7.12517C11.9805 7.23066 12.0398 7.37375 12.0398 7.52294C12.0398 7.67213 11.9805 7.81522 11.875 7.92071L8.12863 11.6671L10.7243 17.1468C10.8142 17.3396 10.9574 17.5027 11.137 17.6167C11.3166 17.7307 11.525 17.791 11.7378 17.7904C11.77 17.7904 11.8024 17.789 11.8351 17.7863C12.0637 17.7684 12.2813 17.6805 12.4582 17.5346C12.6351 17.3886 12.7627 17.1917 12.8237 16.9706L16.5189 3.86944C16.5731 3.67696 16.575 3.47353 16.5245 3.28005C16.474 3.08657 16.373 2.91002 16.2317 2.76854Z" fill="white"/>
								</svg>
								<span>Заполнить форму на вакансию</span>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sert" id="sert">
			<div class="container">
				<h2 class="personal__title section__title">
					Сертификаты
				</h2>
				<div class="sert-carousel owl-carousel">
					<div class="sert-carousel__item">
						<div class="sert-carousel__img zoom-image">
							<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="25" cy="25" r="25" fill="#E31E24"/>
								<path d="M33.71 32.29L30.31 28.9C31.407 27.5025 32.0022 25.7767 32 24C32 22.4178 31.5308 20.871 30.6518 19.5554C29.7727 18.2398 28.5233 17.2145 27.0615 16.609C25.5997 16.0035 23.9911 15.845 22.4393 16.1537C20.8874 16.4624 19.462 17.2243 18.3431 18.3431C17.2243 19.462 16.4624 20.8874 16.1537 22.4393C15.845 23.9911 16.0035 25.5997 16.609 27.0615C17.2145 28.5233 18.2398 29.7727 19.5554 30.6518C20.871 31.5308 22.4178 32 24 32C25.7767 32.0022 27.5025 31.407 28.9 30.31L32.29 33.71C32.383 33.8037 32.4936 33.8781 32.6154 33.9289C32.7373 33.9797 32.868 34.0058 33 34.0058C33.132 34.0058 33.2627 33.9797 33.3846 33.9289C33.5064 33.8781 33.617 33.8037 33.71 33.71C33.8037 33.617 33.8781 33.5064 33.9289 33.3846C33.9797 33.2627 34.0058 33.132 34.0058 33C34.0058 32.868 33.9797 32.7373 33.9289 32.6154C33.8781 32.4936 33.8037 32.383 33.71 32.29ZM18 24C18 22.8133 18.3519 21.6533 19.0112 20.6666C19.6705 19.6799 20.6075 18.9109 21.7039 18.4567C22.8003 18.0026 24.0067 17.8838 25.1705 18.1153C26.3344 18.3468 27.4035 18.9182 28.2426 19.7574C29.0818 20.5965 29.6532 21.6656 29.8847 22.8295C30.1162 23.9933 29.9974 25.1997 29.5433 26.2961C29.0892 27.3925 28.3201 28.3295 27.3334 28.9888C26.3467 29.6481 25.1867 30 24 30C22.4087 30 20.8826 29.3679 19.7574 28.2426C18.6321 27.1174 18 25.5913 18 24Z" fill="white"/>
							</svg>
							<img src="img/sert.jpg" alt="personal">
						</div>
					</div>
					<div class="sert-carousel__item">
						<div class="sert-carousel__img zoom-image">
							<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="25" cy="25" r="25" fill="#E31E24"/>
								<path d="M33.71 32.29L30.31 28.9C31.407 27.5025 32.0022 25.7767 32 24C32 22.4178 31.5308 20.871 30.6518 19.5554C29.7727 18.2398 28.5233 17.2145 27.0615 16.609C25.5997 16.0035 23.9911 15.845 22.4393 16.1537C20.8874 16.4624 19.462 17.2243 18.3431 18.3431C17.2243 19.462 16.4624 20.8874 16.1537 22.4393C15.845 23.9911 16.0035 25.5997 16.609 27.0615C17.2145 28.5233 18.2398 29.7727 19.5554 30.6518C20.871 31.5308 22.4178 32 24 32C25.7767 32.0022 27.5025 31.407 28.9 30.31L32.29 33.71C32.383 33.8037 32.4936 33.8781 32.6154 33.9289C32.7373 33.9797 32.868 34.0058 33 34.0058C33.132 34.0058 33.2627 33.9797 33.3846 33.9289C33.5064 33.8781 33.617 33.8037 33.71 33.71C33.8037 33.617 33.8781 33.5064 33.9289 33.3846C33.9797 33.2627 34.0058 33.132 34.0058 33C34.0058 32.868 33.9797 32.7373 33.9289 32.6154C33.8781 32.4936 33.8037 32.383 33.71 32.29ZM18 24C18 22.8133 18.3519 21.6533 19.0112 20.6666C19.6705 19.6799 20.6075 18.9109 21.7039 18.4567C22.8003 18.0026 24.0067 17.8838 25.1705 18.1153C26.3344 18.3468 27.4035 18.9182 28.2426 19.7574C29.0818 20.5965 29.6532 21.6656 29.8847 22.8295C30.1162 23.9933 29.9974 25.1997 29.5433 26.2961C29.0892 27.3925 28.3201 28.3295 27.3334 28.9888C26.3467 29.6481 25.1867 30 24 30C22.4087 30 20.8826 29.3679 19.7574 28.2426C18.6321 27.1174 18 25.5913 18 24Z" fill="white"/>
							</svg>
							<img src="img/sert.jpg" alt="personal">
						</div>
					</div>
					<div class="sert-carousel__item">
						<div class="sert-carousel__img zoom-image">
							<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="25" cy="25" r="25" fill="#E31E24"/>
								<path d="M33.71 32.29L30.31 28.9C31.407 27.5025 32.0022 25.7767 32 24C32 22.4178 31.5308 20.871 30.6518 19.5554C29.7727 18.2398 28.5233 17.2145 27.0615 16.609C25.5997 16.0035 23.9911 15.845 22.4393 16.1537C20.8874 16.4624 19.462 17.2243 18.3431 18.3431C17.2243 19.462 16.4624 20.8874 16.1537 22.4393C15.845 23.9911 16.0035 25.5997 16.609 27.0615C17.2145 28.5233 18.2398 29.7727 19.5554 30.6518C20.871 31.5308 22.4178 32 24 32C25.7767 32.0022 27.5025 31.407 28.9 30.31L32.29 33.71C32.383 33.8037 32.4936 33.8781 32.6154 33.9289C32.7373 33.9797 32.868 34.0058 33 34.0058C33.132 34.0058 33.2627 33.9797 33.3846 33.9289C33.5064 33.8781 33.617 33.8037 33.71 33.71C33.8037 33.617 33.8781 33.5064 33.9289 33.3846C33.9797 33.2627 34.0058 33.132 34.0058 33C34.0058 32.868 33.9797 32.7373 33.9289 32.6154C33.8781 32.4936 33.8037 32.383 33.71 32.29ZM18 24C18 22.8133 18.3519 21.6533 19.0112 20.6666C19.6705 19.6799 20.6075 18.9109 21.7039 18.4567C22.8003 18.0026 24.0067 17.8838 25.1705 18.1153C26.3344 18.3468 27.4035 18.9182 28.2426 19.7574C29.0818 20.5965 29.6532 21.6656 29.8847 22.8295C30.1162 23.9933 29.9974 25.1997 29.5433 26.2961C29.0892 27.3925 28.3201 28.3295 27.3334 28.9888C26.3467 29.6481 25.1867 30 24 30C22.4087 30 20.8826 29.3679 19.7574 28.2426C18.6321 27.1174 18 25.5913 18 24Z" fill="white"/>
							</svg>
							<img src="img/sert.jpg" alt="personal">
						</div>
					</div>
					<div class="sert-carousel__item">
						<div class="sert-carousel__img zoom-image">
							<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="25" cy="25" r="25" fill="#E31E24"/>
								<path d="M33.71 32.29L30.31 28.9C31.407 27.5025 32.0022 25.7767 32 24C32 22.4178 31.5308 20.871 30.6518 19.5554C29.7727 18.2398 28.5233 17.2145 27.0615 16.609C25.5997 16.0035 23.9911 15.845 22.4393 16.1537C20.8874 16.4624 19.462 17.2243 18.3431 18.3431C17.2243 19.462 16.4624 20.8874 16.1537 22.4393C15.845 23.9911 16.0035 25.5997 16.609 27.0615C17.2145 28.5233 18.2398 29.7727 19.5554 30.6518C20.871 31.5308 22.4178 32 24 32C25.7767 32.0022 27.5025 31.407 28.9 30.31L32.29 33.71C32.383 33.8037 32.4936 33.8781 32.6154 33.9289C32.7373 33.9797 32.868 34.0058 33 34.0058C33.132 34.0058 33.2627 33.9797 33.3846 33.9289C33.5064 33.8781 33.617 33.8037 33.71 33.71C33.8037 33.617 33.8781 33.5064 33.9289 33.3846C33.9797 33.2627 34.0058 33.132 34.0058 33C34.0058 32.868 33.9797 32.7373 33.9289 32.6154C33.8781 32.4936 33.8037 32.383 33.71 32.29ZM18 24C18 22.8133 18.3519 21.6533 19.0112 20.6666C19.6705 19.6799 20.6075 18.9109 21.7039 18.4567C22.8003 18.0026 24.0067 17.8838 25.1705 18.1153C26.3344 18.3468 27.4035 18.9182 28.2426 19.7574C29.0818 20.5965 29.6532 21.6656 29.8847 22.8295C30.1162 23.9933 29.9974 25.1997 29.5433 26.2961C29.0892 27.3925 28.3201 28.3295 27.3334 28.9888C26.3467 29.6481 25.1867 30 24 30C22.4087 30 20.8826 29.3679 19.7574 28.2426C18.6321 27.1174 18 25.5913 18 24Z" fill="white"/>
							</svg>
							<img src="img/sert.jpg" alt="personal">
						</div>
					</div>
					<div class="sert-carousel__item">
						<div class="sert-carousel__img zoom-image">
							<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="25" cy="25" r="25" fill="#E31E24"/>
								<path d="M33.71 32.29L30.31 28.9C31.407 27.5025 32.0022 25.7767 32 24C32 22.4178 31.5308 20.871 30.6518 19.5554C29.7727 18.2398 28.5233 17.2145 27.0615 16.609C25.5997 16.0035 23.9911 15.845 22.4393 16.1537C20.8874 16.4624 19.462 17.2243 18.3431 18.3431C17.2243 19.462 16.4624 20.8874 16.1537 22.4393C15.845 23.9911 16.0035 25.5997 16.609 27.0615C17.2145 28.5233 18.2398 29.7727 19.5554 30.6518C20.871 31.5308 22.4178 32 24 32C25.7767 32.0022 27.5025 31.407 28.9 30.31L32.29 33.71C32.383 33.8037 32.4936 33.8781 32.6154 33.9289C32.7373 33.9797 32.868 34.0058 33 34.0058C33.132 34.0058 33.2627 33.9797 33.3846 33.9289C33.5064 33.8781 33.617 33.8037 33.71 33.71C33.8037 33.617 33.8781 33.5064 33.9289 33.3846C33.9797 33.2627 34.0058 33.132 34.0058 33C34.0058 32.868 33.9797 32.7373 33.9289 32.6154C33.8781 32.4936 33.8037 32.383 33.71 32.29ZM18 24C18 22.8133 18.3519 21.6533 19.0112 20.6666C19.6705 19.6799 20.6075 18.9109 21.7039 18.4567C22.8003 18.0026 24.0067 17.8838 25.1705 18.1153C26.3344 18.3468 27.4035 18.9182 28.2426 19.7574C29.0818 20.5965 29.6532 21.6656 29.8847 22.8295C30.1162 23.9933 29.9974 25.1997 29.5433 26.2961C29.0892 27.3925 28.3201 28.3295 27.3334 28.9888C26.3467 29.6481 25.1867 30 24 30C22.4087 30 20.8826 29.3679 19.7574 28.2426C18.6321 27.1174 18 25.5913 18 24Z" fill="white"/>
							</svg>
							<img src="img/sert.jpg" alt="personal">
						</div>
					</div>
				</div>
			</div>
		</div>



	</section>
	
	
	<footer class="footer">
		<div class="footer-contact">
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
								Карта сайта
							</div>
							<ul class="footer-menu">
								<li class="footer-menu__item">
									<a href="#" class="footer-menu__link">
										Главная
									</a>
								</li>
								<li class="footer-menu__item">
									<a href="#" class="footer-menu__link">
										Каталог
									</a>
								</li>
								<li class="footer-menu__item">
									<a href="#" class="footer-menu__link">
										О компании
									</a>
								</li>
								<li class="footer-menu__item">
									<a href="#" class="footer-menu__link">
										Партнёры
									</a>
								</li>
								<li class="footer-menu__item">
									<a href="#" class="footer-menu__link">
										События и семинары
									</a>
								</li>
								<li class="footer-menu__item">
									<a href="#" class="footer-menu__link">
										База знаний
									</a>
								</li>
								<li class="footer-menu__item">
									<a href="#" class="footer-menu__link">
										Контакты
									</a>
								</li>
							</ul>
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
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/map.js"></script>
	<script src="js/main.js"></script>
</body>
</html>