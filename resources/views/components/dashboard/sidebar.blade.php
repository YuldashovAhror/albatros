<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
        <a href="/dashboard">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Меню</h6>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Бренд</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.brend.index')}}">Лист</a></li>
                            <li><a href="{{route('dashboard.brend.create')}}">Создать</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Баннер</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.banner.index')}}">Лист</a></li>
                            <li><a href="{{route('dashboard.banner.create')}}">Создать</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Категория</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.category.index')}}">Лист</a></li>
                            <li><a href="{{route('dashboard.category.create')}}">Создать</a></li>
                        </ul>
                    </li>

                    <li ><a class="nav-link" href="{{route('dashboard.newcategory.index')}}"><i data-feather="home"></i><span>Категория новостей</span></a>

                        <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="home"></i><span>Новости</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="{{route('dashboard.news.index')}}">Лист</a></li>
                                <li><a href="{{route('dashboard.news.create')}}">Создать</a></li>
                            </ul>
                        </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
