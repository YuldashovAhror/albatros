<header class="header">
    <div class="header-logos">
        <div class="container">
            <img src="/img/snibe.svg" alt="ico" class="header-logos__img">
            <img src="/img/bd.svg" alt="ico" class="header-logos__img">
            <img src="/img/bioquell.svg" alt="ico" class="header-logos__img">
            <img src="/img/qiagen.svg" alt="ico" class="header-logos__img">
            <img src="/img/werfen.svg" alt="ico" class="header-logos__img">
            <img src="/img/randox.svg" alt="ico" class="header-logos__img">
            <img src="/img/dymind.svg" alt="ico" class="header-logos__img">
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
                <a href="{{route('main')}}">
                    <img src="img/logo.svg" alt="Albatros">
                </a>
            </div>
            <ul class="header-nav__menu menu">
                <li class="menu__item">
                    <a href="{{route('main')}}" class="menu__link  @if(\Request::segment(1) == '') menu__link-current @endif">
                        Главная
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/catalog"  class="menu__link @if(\Request::segment(1) == 'catalog') menu__link-current @endif">
                        Каталог
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/event" class="menu__link @if(\Request::segment(1) == 'event') menu__link-current @endif">
                        События и семинары
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/partners" class="menu__link @if(\Request::segment(1) == 'partners') menu__link-current @endif">
                        Партнёры
                    </a>
                </li>
                <!-- CHANGE класс добавил для открытия попапа dev-open-->
                <li class="menu__item">
                    <a href="/info" class="menu__link @if(\Request::segment(1) == 'info') menu__link-current @endif">
                        База знаний
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/about" class="menu__link @if(\Request::segment(1) == 'about') menu__link-current @endif">
                        О компании
                    </a>
                </li>
                <li class="menu__item">
                    <a href="/contact" class=" menu__link @if(\Request::segment(1) == 'contact') menu__link-current @endif">
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