<!doctype html>
<html lang="ru">
<head>
    <title>Салон стрижки собак и кошек</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/animate.css">
    <link rel="stylesheet" href="/public/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/public/fonts/ionicons/css/ionicons.min.css">
    {{--    <link rel="stylesheet" href="/public/fonts/fontawesome/css/font-awesome.min.css">--}}

    <link rel="stylesheet" href="/public/fonts/fontawesome-free-5.15.1-web/css/all.css">

    <!--  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">-->

    <!-- Theme Style -->
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- Theme Style Custom -->
    <link rel="stylesheet" href="/public/css/custom.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <link href="/public/components/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">

    {{--    <script src="/public/components/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"></script>--}}

    <style>
        @font-face {
            font-family: 'Glyphicons Halflings';
            src: url('/public/fonts/glyphicons-halflings-regular.eot');
            src:
                url('/public/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
                url('/public/fonts/glyphicons-halflings-regular.woff') format('woff'),
                url('/public/fonts/glyphicons-halflings-regular.ttf') format('truetype'),
                url('/public/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
        }
    </style>
</head>

<body class="main">
<!-- Back to top button -->
<a id="button"></a>

<!-- Header -->
<header role="banner" style__="border: 1px solid red;">
    <nav class="navbar navbar-expand-lg navbar-dark transparant">
        <div class="container">
            <a class="navbar-brand absolute" href="/">
                <!--        <strong>SALON GROOM</strong>-->
                <img class="w-72" src="/public/img/logo-new.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-main" aria-controls="navbars-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbars-main">
                <ul class="navbar-nav mx-auto pl-lg-5 pl-0">
                    <li class="nav-item">
                        <a class="nav-link" onclick="hideNavbarCollapse()" href="#about-our"><h6>О нас</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="hideNavbarCollapse()" href="#masters"><h6>Мастера</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="hideNavbarCollapse()" href="#prices"><h6>Цены</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="hideNavbarCollapse()" href="#gallery"><h6>Галерея</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="hideNavbarCollapse()" href="#address"><h6>Адреса салонов</h6></a>
                    </li>
                </ul>
                <span class="color-common font-weight-bold" style="margin-top: -9px; font-size: 20px;"><strong>+7 (499) 430-00-26</strong></span>
            </div>
        </div>
    </nav>
</header>
<!-- END Header -->

<!-- Slider mobile -->
<section id="home-slider-mobile" class="hidden mobile-slider">
    <div id="container" class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 150px; min-height: 500px;">
                <h2 class="text-white section-title">Мы стрижем ваших питомцев с любовью</h2>
                <p class="text-white main-font">Салон №1 груминг собак и кошек</p>
                <p class="text-center">
                    <a class="btn btn-outline-white btn-save" href="#orders-list" style="font-weight: 600; padding: 20px;">Записаться</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<!-- Slider -->
<section id="home-slider" class="home-slider owl-carousel">
    <div class="slider-item main-slider-2">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate mt-50-">
                    <h2 class="color-light__ text-white section-title">Мы стрижем ваших питомцев с любовью</h2>
                    <p class="mb-5 font-weight-bold">Салон №1 груминг собак и кошек</p>
                    <p>
                        <a class="btn btn-white btn-outline-white btn-save" href="#orders-list" style="font-weight: 600; padding: 20px;">Записаться</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Slider mobile -->

<!-- Masters -->
<section id="masters" class="section">
    <div class="container mobile-margin-top">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-10 text-center">
                <h2 class="heading mb-4 color-common section-title mobile-title">Наши мастера просто обожают ваших питомцев</h2>
            </div>
        </div>

        <div id="animate-data" class="row element-animate">
            <div class="major-caousel js-carousel-1 owl-carousel owl-theme owl-loaded owl-drag">
                <div>
                    <div id="our-1" class="media d-block media-custom text-center">
                        <a href="#our-1" class="link-thumbnail">
                            <h3 class="main-font">Марина </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/masters/groomer1.jpg" alt="Image placeholder" class="img-fluid">
                        </a>
{{--                        <h2 class="color-common">Марина </h2>--}}
                    </div>
                </div>

                <div>
                    <div id="our-2" class="media d-block media-custom text-center">
                        <a href="#our-2" class="link-thumbnail">
                            <h3 class="main-font">Светлана </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/masters/groomer2.jpg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-3" class="media d-block media-custom text-center">
                        <a href="#our-3" class="link-thumbnail">
                            <h3 class="main-font">Екатерина </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/masters/groomer3.jpg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                    {{--                </div>--}}

                    {{--                <div>--}}
                    {{--                    <div id="our-4" class="media d-block media-custom text-center">--}}
                    {{--                        <a href="#our-4" class="link-thumbnail">--}}
                    {{--                            <h3 class="main-font"> </h3>--}}
                    {{--                            <span class="ion-plus icon"></span>--}}
                    {{--                            <img src="/public/img/masters/master_1.jpg" alt="Image placeholder" class="img-fluid">--}}
                    {{--                        </a>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
                <!-- END slider -->
            </div>
            <!-- END slider -->
        </div>
</section>
<!-- END Masters -->

<!-- Prices -->
<section id="prices" class="section">
    <div class="container mobile-margin-top">
        <div id="row" class="">
            <h2 class="heading mb-4 text-center color-common section-title mobile-title">Цены на наши услуги не кусаются и не царапаются</h2>
        </div>

        <p class="text-center main-font" style="margin-top: 15px">
            <!--      <button id="tab-btn-1" class="tab-btn btn-tab-active">Порода</button>-->

            <button id="tab-btn-1" class="tab-btn btn-tab-active">Комплекс для собачки </button>
            <button id="tab-btn-2" class="tab-btn">Гигиена и дополнительные услуги </button>
            <button id="tab-btn-3" class="tab-btn">Комплекс для кошечки	</button>

            {{--            <button id="tab-btn-2" class="tab-btn btn-tab-active">Под машинку/модельная</button>--}}
            {{--            <button id="tab-btn-3" class="tab-btn">Гигиена и дополнительные услуги	</button>--}}
            {{--            <button id="tab-btn-4" class="tab-btn">Мытье-сушка</button>--}}
            {{--            <button id="tab-btn-5" class="tab-btn">Тримминг</button>--}}
            {{--            <button id="tab-btn-6" class="tab-btn">Экпресс/линька</button>--}}
        </p>

        <div class="row main-font">
            <div id="tab-1" class="col-sm tabs-price">
                <table class="table table-dark-alt table-hover">
                    <th>Декоративные</th>
                    <th></th>
                    <th>Средние</th>
                    <th></th>
                    <th>Крупные</th>
                    <th></th>

                    <tbody>
                    <tr>
                        <td>Австралийский терьер</td>
                        <td><strong>2 100 ₽</strong></td>
                        <td>Бедлингтон</td>
                        <td><strong>3 300 ₽</strong></td>
                        <td>Английский сеттер</td>                    	 		 		 
                        <td><strong>3 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Бишон фризе</td>
                        <td><strong>2 600 ₽</strong></td>
                        <td>Вельш-терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Афганская борзая</td>                    	 		 		 
                        <td><strong>3 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Грифон, Брабансон</td>
                        <td><strong>2 200 ₽</strong></td>
                        <td>Вест хайленд уайт терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Бернский зенненхунд</td>                    	 		 		 
                        <td><strong>4 500 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Йоркширский терьер</td>
                        <td><strong>2 100 ₽</strong></td>
                        <td>Джек-рассел терьер</td>
                        <td><strong>2 500 ₽</strong></td>
                        <td>Бобтейл</td>                    	 		 		 
                        <td><strong>5 500 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Китайская хохлатая  (голая)</td>
                        <td><strong>1 600 ₽</strong></td>
                        <td>Керн-терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Ирландский терьер</td>                    	 		 		 
                        <td><strong>3 500 ₽</strong></td>
                    </tr>     		 		 
                    <tr>
                        <td>Китайская хохлатая  (пуховка)</td>
                        <td><strong>2 300 ₽</strong></td>
                        <td>Лейкленд-терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Керри-блю терьер</td>                    	 		 		 
                        <td><strong>3 300 ₽</strong></td>
                    </tr>	 		 		 
                    <tr>
                        <td>Мальтийская болонка</td>
                        <td><strong>2 400 ₽</strong></td>
                        <td>Миттельшнауцер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Ньюфаунленд</td>                    	 		 		 
                        <td><strong>5 500 ₽</strong></td>
                    </tr>	 		 		 
                    <tr>
                        <td>Московский дракон</td>
                        <td><strong>2 000 ₽</strong></td>
                        <td>Норвич-терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Пшеничный терьер</td>                    	 		 		 
                        <td><strong>3 400 ₽</strong></td>
                    </tr>	 		 		 
                    <tr>
                        <td>Мальтипу</td>
                        <td><strong>2 500 ₽</strong></td>
                        <td>Норфолк-терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Голден ретривер</td>                    	 		 		 
                        <td><strong>4 600 ₽</strong></td>
                    </tr>	 		 		 
                    <tr>
                        <td>Пекинес</td>
                        <td><strong>2 400 ₽</strong></td>
                        <td>Карликовый пудель (до 35 см)</td>
                        <td><strong>2 500 ₽</strong></td>
                        <td>Лабрадор Ретривер</td>                    	 		 		 
                        <td><strong>4 600 ₽</strong></td>
                    </tr>	 		 		 
                    <tr>
                        <td>Петербургская орхидея</td>
                        <td><strong>2 200 ₽</strong></td>
                        <td>Средний пудель (до 45 см)</td>
                        <td><strong>2 700 ₽</strong></td>
                        <td>Ризеншнауцер</td>                    	 		 		 
                        <td><strong>5 500 ₽</strong></td>
                    </tr>	 		 		 
                    <tr>
                        <td>Той-пудель (до 28 см)</td>
                        <td><strong>2 200 ₽</strong></td>
                        <td>Скотч-терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Русский черный терьер</td>                    	 		 		 
                        <td><strong>6 500 ₽</strong></td>
                    </tr>	 		 		 
                    <tr>
                        <td>Той-терьер / Чихуа-хуа длинношерстные</td>
                        <td><strong>1 800 ₽</strong></td>
                        <td>Спаниели (наголо)</td>
                        <td><strong>2 700 ₽</strong></td>
                        <td>Хаски</td>                    	 		 		 
                        <td><strong>3 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Ши-тцу</td>
                        <td><strong>2 400 ₽</strong></td>
                        <td>Спаниели (модельно)</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Эрдельтерьер</td>                    	 		 		 
                        <td><strong>3 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Шпиц Малый / Померанский</td>
                        <td><strong>2 400 ₽</strong></td>
                        <td>Такса жесткошерстная</td>
                        <td><strong>2 500 ₽</strong></td>
                        <td>Чау-Чау</td>                    	 		 		 
                        <td><strong>4 500 ₽</strong></td>
                    </tr> 		 		 
                    <tr>
                        <td>Японский хин</td>
                        <td><strong>2 100 ₽</strong></td>
                        <td>Тибетский терьер</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td>Метисы от 20 кг (под машинку)</td>                    	 		 		 
                        <td><strong>4 900 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Метисы (до 5 кг)</td>
                        <td><strong>1 900 ₽</strong></td>
                        <td>Фокс-терьер</td>
                        <td><strong>2 700 ₽</strong></td>
                        <td></td>                    	 		 		 
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Цвергшнауцер</td>
                        <td>2 700 ₽</strong></td>
                        <td></td>                    	 		 		 
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Метисы (5-10 кг)</td>
                        <td><strong>2 900 ₽</strong></td>
                        <td></td>                    	 		 		 
                        <td></td>
                    </tr> 
                    </tbody>
                </table>
            </div>

            <div id="tab-2" class="col-sm tabs-price hidden">
                <table class="table table-dark-alt table-hover">
                    <th>Название</th>
                    <th>Цена</th>

                    <tbody>
                    <tr>
                        <td>Стрижка когтей</td>
                        <td><strong>300 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Когти, пах, кончики ушей (без купания и стрижки)</td>
                        <td><strong>950 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Купание, сушка (без вычесывания), когти, пах, кончики ушей (без стрижки)</td>
                        <td><strong>до 1 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Купание, сушка (4-10 кг)</td>
                        <td><strong>до 2 300 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Гигиена шпица: Когти, пах, купание и сушка (без вычесывания и стрижки)</td>
                        <td><strong>1 700 ₽</strong></td>
                    </tr>

                    <tr>
                        <td>Чистка и выщипывание ушек</td>
                        <td><strong>300 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Чистка и промывание глазок</td>
                        <td><strong>100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Чистка зубов (Удаление зубного камня)</td>
                        <td><strong>1 100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Вычесывание колтунов</td>
                        <td><strong>500 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Обработка от блох</td>
                        <td><strong>300 ₽</strong></td>
                    </tr>
                    </tbody>
                </table> 
            </div>

            <div id="tab-3" class="col-sm tabs-price hidden">
                <table class="table table-dark-alt table-hover">
                    <th>Название</th>
                    <th>Цена</th>

                    <tbody>
                    <tr>
                        <td>Стрижка кошек</td>
                        <td><strong>2 100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Стрижка, купание, сушка, ушки и парфюм</td>
                        <td><strong>2 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Купание и сушка</td>
                        <td><strong>2 100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Вычесывание колтунов</td>
                        <td><strong>500 - 1 500 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Экспресс-линька</td>
                        <td><strong>1 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Наклейка антицарапок</td>
                        <td><strong>300 (со своими) - 600 ₽</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- END Prices -->

<!-- Prices mobile -->
<section id="prices-mobile" class="section">
    <div class="container mobile-margin-top">
        <div id="row" class="">
            <h2 class="heading mb-4 text-center color-common section-title mobile-title">Цены на наши услуги не кусаются и не царапаются</h2>
        </div>

        <div class="row main-font">

                <table class="table table-dark-alt table-hover">
                    <th>Стрижка (декоративные)</th>
                    <th class="item-right">Цена</th>
                    <tbody>
                        <tr>
                            <td>Австралийский терьер</td>
                            <td class="min-width-100 item-right"><strong>2 100 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Бишон фризе</td>
                            <td class="item-right"><strong>2 600 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Грифон, Брабансон</td>
                            <td class="item-right"><strong>2 200 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Йоркширский терьер</td>
                            <td class="item-right"><strong>2 100 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Китайская хохлатая  (голая)</td>
                            <td class="item-right"><strong>1 600 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Китайская хохлатая  (пуховка)</td>
                            <td class="item-right"><strong>2 300 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Мальтийская болонка</td>
                            <td class="item-right"><strong>2 400 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Московский дракон</td>
                            <td class="item-right"><strong>2 000 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Мальтипу</td>
                            <td class="item-right"><strong>2 500 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Пекинес</td>
                            <td class="item-right"><strong>2 400 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Петербургская орхидея</td>
                            <td class="item-right"><strong>2 200 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Той-пудель (до 28 см)</td>
                            <td class="item-right"><strong>2 200 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Той-терьер / Чихуа-хуа длинношерстные</td>
                            <td class="item-right"><strong>1 800 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Ши-тцу</td>
                            <td class="item-right"><strong>2 400 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Шпиц Малый / Померанский</td>
                            <td class="item-right"><strong>2 400 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Японский хин</td>
                            <td class="item-right"><strong>2 100 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Метисы (до 5 кг)</td>
                            <td class="item-right"><strong>1 900 ₽</strong></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-dark-alt table-hover">
                    <th>Стрижка (средние)</th>
                    <th class="item-right">Цена</th>
                    <tbody>
                        <tr>
                            <td>Бедлингтон</td>
                            <td class="min-width-100 item-right"><strong>3 300 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Вельш-терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Вест хайленд уайт терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Джек-рассел терьер</td>
                            <td class="item-right"><strong>2 500 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Керн-терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>     		 		 
                        <tr>
                            <td>Лейкленд-терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Миттельшнауцер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Норвич-терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Норфолк-терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Карликовый пудель (до 35 см)</td>
                            <td class="item-right"><strong>2 500 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Средний пудель (до 45 см)</td>
                            <td class="item-right"><strong>2 700 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Скотч-терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Спаниели (наголо)</td>
                            <td class="item-right"><strong>2 700 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Спаниели (модельно)</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Такса жесткошерстная</td>
                            <td class="item-right"><strong>2 500 ₽</strong></td>
                        </tr> 		 		 
                        <tr>
                            <td>Тибетский терьер</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Фокс-терьер</td>
                            <td class="item-right"><strong>2 700 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Цвергшнауцер</td>
                            <td class="item-right">2 700 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Метисы (5-10 кг)</td>
                            <td class="item-right"><strong>2 900 ₽</strong></td>
                        </tr> 
                    </tbody>
                </table>

                <table class="table table-dark-alt table-hover">
                    <th>Стрижка (крупные)</th>
                    <th class="item-right">Цена</th>
                    <tbody>
                        <tr>
                            <td>Английский сеттер</td>                    	 		 		 
                            <td class="min-width-100 item-right"><strong>3 800 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Афганская борзая</td>                    	 		 		 
                            <td class="item-right"><strong>3 800 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Бернский зенненхунд</td>                    	 		 		 
                            <td class="item-right"><strong>4 500 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Бобтейл</td>                    	 		 		 
                            <td class="item-right"><strong>5 500 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Ирландский терьер</td>                    	 		 		 
                            <td class="item-right"><strong>3 500 ₽</strong></td>
                        </tr>     		 		 
                        <tr>
                            <td>Керри-блю терьер</td>                    	 		 		 
                            <td class="item-right"><strong>3 300 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Ньюфаунленд</td>                    	 		 		 
                            <td class="item-right"><strong>5 500 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Пшеничный терьер</td>                    	 		 		 
                            <td class="item-right"><strong>3 400 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Голден ретривер</td>                    	 		 		 
                            <td class="item-right"><strong>4 600 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Лабрадор Ретривер</td>                    	 		 		 
                            <td class="item-right"><strong>4 600 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Ризеншнауцер</td>                    	 		 		 
                            <td class="item-right"><strong>5 500 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Русский черный терьер</td>                    	 		 		 
                            <td class="item-right"><strong>6 500 ₽</strong></td>
                        </tr>	 		 		 
                        <tr>
                            <td>Хаски</td>                    	 		 		 
                            <td class="item-right"><strong>3 800 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Эрдельтерьер</td>                    	 		 		 
                            <td class="item-right"><strong>3 800 ₽</strong></td>
                        </tr>
                        <tr>
                            <td>Чау-Чау</td>                    	 		 		 
                            <td class="item-right"><strong>4 500 ₽</strong></td>
                        </tr> 		 		 
                        <tr>
                            <td>Метисы от 20 кг (под машинку)</td>                    	 		 		 
                            <td class="item-right"><strong>4 900 ₽</strong></td>
                        </tr> 
                    </tbody>
                </table>

                <table class="table table-dark-alt table-hover">
                    <th colspan="2">Гигиена и дополнительные услуги</th>

                    <tbody>
                    <tr>
                        <td>Стрижка когтей</td>
                        <td class="item-right" style="min-width: 100px;"><strong>300 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Когти, пах, кончики ушей (без купания и стрижки)</td>
                        <td class="item-right"><strong>950 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Купание, сушка (без вычесывания), когти, пах, кончики ушей (без стрижки)</td>
                        <td class="item-right"><strong>до 1 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Купание, сушка (4-10 кг)</td>
                        <td class="item-right"><strong>до 2 300 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Гигиена шпица: Когти, пах, купание и сушка (без вычесывания и стрижки)</td>
                        <td class="item-right"><strong>1 700 ₽</strong></td>
                    </tr>

                    <tr>
                        <td>Чистка и выщипывание ушек</td>
                        <td class="item-right"><strong>300 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Чистка и промывание глазок</td>
                        <td class="item-right"><strong>100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Чистка зубов (Удаление зубного камня)</td>
                        <td class="item-right"><strong>1 100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Вычесывание колтунов</td>
                        <td class="item-right"><strong>500 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Обработка от блох</td>
                        <td class="item-right"><strong>300 ₽</strong></td>
                    </tr>
                    </tbody>
                </table> 

                <table class="table table-dark-alt table-hover">
                    <th colspan="2">Комплекс для кошечки</th>

                    <tbody>
                    <tr>
                        <td>Стрижка кошек</td>
                        <td class="item-right" style="min-width: 115px;"><strong>2 100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Стрижка, купание, сушка, ушки и парфюм</td>
                        <td class="item-right"><strong>2 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Купание и сушка</td>
                        <td class="item-right"><strong>2 100 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Вычесывание колтунов</td>
                        <td class="item-right"><strong>500 - 1500 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Экспресс-линька</td>
                        <td class="item-right"><strong>1 800 ₽</strong></td>
                    </tr>
                    <tr>
                        <td>Наклейка антицарапок</td>
                        <td class="item-right"><strong>300 - 600 ₽</strong></td>
                    </tr>
                    </tbody>
                </table>

        </div>
    </div>
</section>
<!-- END Prices mobile -->

<!-- Gallery -->
<section id="gallery" class="section">
    <div class="container mobile-margin-top">
        <div id="animate-title" class="row justify-content-center mb-5 element-animate">
            <div class="col-md-10 text-center">
                <h2 class="heading mb-4 color-common section-title mobile-title">Все работы смотрите в нашем Instagram </h2>
                {{--                    и еще немного наших работ для примера--}}
            </div>
        </div>

        <div id="animate-data" class="row element-animate">
            <div class="major-caousel js-carousel-1 owl-carousel">
                <div>
                    <div id="our-1" class="media d-block media-custom text-center">
                        <a href="#our-1" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/gallery/our1.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-2" class="media d-block media-custom text-center">
                        <a href="#our-2" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/gallery/our7.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-3" class="media d-block media-custom text-center">
                        <a href="#our-3" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/gallery/our5.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-4" class="media d-block media-custom text-center">
                        <a href="#our-4" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/gallery/our6.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-5" class="media d-block media-custom text-center">
                        <a href="#our-5" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
{{--                            <span class="ion-plus icon"></span>--}}
                            <img src="/public/img/gallery/our4.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <!-- END slider -->
        </div>
    </div>
</section>
<!-- END Gallery -->

<!-- About our -->
<section id="about-our" class="section">
    <div class="container mobile-margin-top">
        <h2 class="heading mb-4 color-common text-center section-title mobile-title">Почему клиенты выбирают нас?</h2>

        <div class="row pd-1-rem text-center" >
            <div class="col-md-4 our">
                <i class="fa fa-car our-icon"></i>
                <p><strong>Бесплатная VIP стоянка для наших клиентов возле офиса</strong></p>
            </div>
            <div class="col-md-4 our">
                <i class="fas fa-dog our-icon"></i>
                <p>Комфортная зона отдыха для ожидания ваших питомцев</p>
            </div>
            <div class="col-md-4 our">
                <i class="fa fa-eye-dropper our-icon"></i>
                <p><strong>И конечно, все процедуры выполняются без наркоза</strong></p>
            </div>
            {{--        </div>--}}

            {{--        <div class="row pd-1-rem text-center">--}}
            <div class="col-md-4 our">
                <i class="fas fa-diagnoses our-icon"></i>
                <p>Команда профессиональных груммеров с большим опытом</p>
            </div>
            <div class="col-md-4 our">
                <i class="fas fa-hands-wash our-icon"></i>
                <p>Мы используем современные средства европейских брендов ухода за шерстью</p>
            </div>
            <div class="col-md-4 our">
                <i class="fas fa-user-plus our-icon"></i>
                <p>Помощь в консультировании по вопросам правильного ухода за домашними животными</p>
            </div>
        </div>
    </div>
</section>
<!-- END About our -->

<!-- Orders form -->
<section id="orders-list" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr />
                <h3 class="color-common text-center section-title mobile-title">Запись на стрижку</h3>
                <form id="contactform" method="post" class="validateform" name="contactform">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Имя *</label>
                        <input type="text" class="form-control" placeholder="" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон *</label>
                        <input type="text" class="form-control" placeholder="" id="phone" name="phone">
                    </div>

                    {{--                    <div class="form-group">--}}
                    {{--                        <label for="poroda">Порода *</label>--}}
                    {{--                        <input type="text" class="form-control" placeholder="" id="poroda" name="poroda">--}}
                    {{--                    </div>--}}

                    <div class="form-group">
                        <label for="date" class="">Дата *</label>
                        <div class="input-group date form_date col-md-5__" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="mm-dd-yyyy">
                            <input class="form-control" id="date" name="date" type="text">

                            <span class="input-group-addon pointer">
                                <i class="fa fa-calendar"></i>
{{--                                <span class="glyphicon glyphicon-calendar"></span>--}}
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="time" class="">Желаемое время *</label>
                        <div class="input-group date form_time col-md-5__" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                            <input id="time" name="time" class="form-control" size="16" type="text">

                            <span class="input-group-addon pointer">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div id="sendmessage" style="color: green; font-weight: bold;" class="hidden">
                            Спасибо! Ваша заявка принята. Ожидайте звонок администратора.
                        </div>

                        <div id="senderror" style="color: red; font-weight: bold;" class="hidden">
                            Заполните пустые поля.
                        </div>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <button type="submit" class="btn btn-block bg-common pointer">Записаться</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END Orders form -->

<!-- Address -->
<section id="address" class="address-fluid">
    <div class="container mobile-margin-top">
        <div class="row main-font">
            <div class="col-md-12">
                <h2 class="heading mb-4 color-common text-center section-title mobile-title">Москва, ул. Долгоруковская, 40</h2>

                <div id="map-yandex" class="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac1d2c42ddbc66b85e3eafa2435ccd87074e779036847fb644e7984904e205959&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>

                <div id="map-yandex-mobile" class="map hidden" style="padding-left: 20px; padding-right: 20px;">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac1d2c42ddbc66b85e3eafa2435ccd87074e779036847fb644e7984904e205959&amp;height=200&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Address -->

<!-- END Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row main-font">
            <div class="col-md-4 mb-5">
                <h3>Контакты</h3>
                <ul class="list-unstyled footer-link">
                    <li class="d-block"><span class="d-block">Адрес:</span><span class="text-white">Москва, ул. Долгоруковская, 40</span></li>
                    <li class="d-block"><span class="d-block">Телефон:</span><span class="text-white">+7 (499) 430-00-26</span></li>
                    <li class="d-block"><span class="d-block">Email:</span><span class="text-white">info@salon-groom.ru</span></li>
                </ul>
            </div>
            <div class="col-md-4 mb-5">
                <h3>Навигация</h3>
                <ul class="navbar-nav mx-auto lh-12">
                    <li class="nav-item">
                        <a class="nav-link" href="#masters">Мастера</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prices">Цены</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Галерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-our">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#address">Адрес</a>
                    </li>
                </ul>
                <div class="col-md-3">

                </div>

            </div>
            <div class="col-md-4 mb-5">
                <h3>О нас</h3>
                <p class="mb-5">
                    Салон №1 груминг собак и кошек<br />
                    В нашем салоне доступны услуги: стрижка шерсти и коготков, купание, сушка, чистка глаз и ушей.
                </p>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="row main-font">
            <div class="col-12 text-md-center text-left">
                <p>
                    salon-groom.ru &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->

<script src="/public/js/jquery-3.2.1.min.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/jquery.waypoints.min.js"></script>
<script src="/public/js/owl.carousel.min.js"></script>
<script src="/public/js/main.js"></script>
<script src="/public/js/custom.js"></script>

<!-- Инициализация виджета "Bootstrap datetimepicker" -->
<script>
    $(document).ready(function () {
        console.log('test ajax');

        $('#contactform').on('submit', function (e) {
            e.preventDefault();

            console.log('contactform');

            $.ajax({
                type: 'POST',
                url: '/sendmail',
                data: $('#contactform').serialize(),
                success: function (data) {
                    if (data.result == 'success') {
                        console.log('data.result = ', data.result);
                        $('#senderror').hide();
                        $('#sendmessage').show();
                        $('#contactform')[0].reset();
                    }

                    if (data.result == 'failed') {
                        console.log('data = ', data.name);
                        $('#senderror').show();
                        $('#sendmessage').hide();
                    }
                },
                error: function () {
                    console.log('error ajax');
                    // $('#senderror').show();
                    // $('#sendmessage').hide();
                }
            });
        });
    });
</script>

<script>
    /* 1 */
    var $page = $('html, body');

    $('a[href*="#"]').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 675);
        return false;
    });

    /* 2 */
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
</script>

<script>
    $('#myModal').on('hide.bs.modal', function (event) {
        console.log('hide');
    });

    function hideNavbarCollapse() {
        let navbars_main = $('#navbars-main');

        if (navbars_main.hasClass("show")) {
            navbars_main.removeClass('show');
        }
    }
</script>

<script type="text/javascript" src="/public/components/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/public/components/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.ru.js" charset="UTF-8"></script>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'ru',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'ru',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'ru',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>

</body>
</html>



