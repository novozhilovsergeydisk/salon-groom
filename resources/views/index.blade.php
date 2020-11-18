<!doctype html>
<html lang="ru">
<head>
    <title>Салон стрижки собак и кошек</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Balsamiq%20Sans">--}}
    <style>
        body {
            font-family: "Balsamiq Sans" /* Rubik "Roboto Slab" "Yanone Kaffeesatz" Caveat "Balsamiq Sans" */
            /*font-size: 22px;*/
        }


    </style>

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
            </div>
        </div>
    </nav>
</header>
<!-- END header -->

<!-- Slider mobile -->
<section id="home-slider-mobile" class="hidden">
    <div id="container" class="slider-mobile">
        <br />
        <p class="text-center text-white main-font">Салон №1 груминг собак и кошек</p>
        <p class="text-center">
            <a class="btn btn-white btn-outline-white btn-save" href="#orders-list" style="font-weight: 600; padding: 20px;">Записаться</a>

{{--            <button class="btn btn-white btn-outline-white btn-save main-font" data-toggle="modal" data-target="#myModal">Записаться</button>--}}
        </p>
    </div>
</section>
<!-- END section -->

<!-- Slider -->
<section id="home-slider" class="home-slider owl-carousel">
    <div class="slider-item main-slider-2">
        <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
                <div class="col-md-8 text-center col-sm-12 element-animate">
                    <h2 class="color-light__ text-white section-title">Мы стрижем ваших питомцев с любовью</h2>
                    <p class="mb-5 font-weight-bold">Салон №1 груминг собак и кошек</p>
                    <p>

                        <a class="btn btn-white btn-outline-white btn-save" href="#orders-list" style="font-weight: 600; padding: 20px;">Записаться</a>

{{--                        <button class="btn btn-white btn-outline-white btn-save" data-toggle="modal" data-target="#myModal">--}}
{{--                            <h4 class="text-white">Записаться</h4>--}}
{{--                        </button>--}}
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- END slider -->

<!-- Masters -->
<section id="masters" class="section">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate" style__="margin-top: -50px">
            <div class="col-md-10 text-center">
                <h2 class="heading mb-4 color-common section-title">Наши мастера просто обожают ваших питомцев</h2>
                <!--            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>-->
            </div>
        </div>

        <div class="row element-animate" style="margin-top: -50px">
            <div class="col-md text-center">
                <div class="card" style="margin: 0 auto; max-width: 500px">
                    <img class="card-img-top" src="/public/img/masters/master_1.jpg" alt="Card image">
                    <div class="card-body bg-light">
                        <h3 class="mt-0 text-white section-title">Карина</h3>
                        <p class="block-master main-font">
                            Аккуратный мастер с опытом работы. Ищет индивидуальный подход к каждому любимцу. Внимательная и ласковая, любящая животных.
                            Сделает великолепную стрижку для вашего питомца. Стремится развиваться в профессии, сделает ваших любимцев самыми красивыми.<br /><br />
                            <strong>Владелица Йорка Гуччи.</strong>
                        </p>
                    </div>
                </div>
            </div>

            <!--      <div class="major-caousel js-carousel-1 owl-carousel">-->
            <!--        <div>-->
            <!--          <div class="media d-block media-custom text-center">-->
            <!--            <a href="adoption-single.html"><img src="img/masters/master_1.jpg" alt="Image Placeholder" class="img-fluid"></a>-->
            <!--            <div class="media-body bg-light">-->
            <!--              <h3 class="mt-0 text-white"><b>Карина Ферхо</b></h3>-->
            <!--              <p class="block-master">-->
            <!--                Аккуратный мастер с опытом работы. Ищет индивидуальный подход к каждому любимцу. Внимательная и ласковая, любящая животных.-->
            <!--                Сделает великолепную стрижку для вашего питомца. Стремится развиваться в профессии, сделает ваших любимцев самыми красивыми.<br /><br />-->
            <!--                <strong>Владелица Йорка Гуччи.</strong>-->
            <!--              </p>-->
            <!--            </div>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </div>-->
            <!-- END slider -->
        </div>
    </div>
</section>
<!-- END section -->

<!-- Prices -->
<section id="prices" class="section">
    <div class="container">
        <div id="row" style__="margin-top: -150px">
            <h2 class="heading mb-4 text-center color-common section-title">Цены на наши услуги не кусаются и не царапаются</h2>
        </div>

        <p class="text-center main-font" style="margin-top: 15px">
            <!--      <button id="tab-btn-1" class="tab-btn btn-tab-active">Порода</button>-->
            <button id="tab-btn-2" class="tab-btn btn-tab-active">Под машинку/модельная</button>
            <button id="tab-btn-3" class="tab-btn">Гигиена</button>
            <button id="tab-btn-4" class="tab-btn">Мытье-сушка</button>
            <button id="tab-btn-5" class="tab-btn">Тримминг</button>
            <button id="tab-btn-6" class="tab-btn">Экпресс/линька</button>
        </p>

        <div class="row main-font">
            <div id="tab-1" class="col-sm tabs-price main-font">
                <p><strong>Порода</strong></p>
                <p>Бишон-фризе</p>
                <p>Гриффон, пти брабансон</p>
                <p>Йоркширский терьер, бивер-йорк</p>
                <p>Китайская хохлатая голая</p>
                <p>Китайская хохлатая пуховка</p>
                <p>Левретка</p>
                <p>Мальтийская болонка</p>
                <p>Мопс</p>
                <p>Папильон</p>
                <p>Пекинес</p>
                <p>Той-пудель</p>
                <p>Той-терьер (гладкош./длиннош.)</p>
                <p>Цвергпинчер</p>
                <p>Чихуахуа (гладкош./длиннош.)</p>
                <p>Ши-тцу</p>
                <p>Шпиц (карликовый /малый, до 5кг)</p>
                <p>Японский хин</p>
            </div>
            <div id="tab-2" class="col-sm tabs-price main-font">
                <p><strong>Комплекс: под машинку / модельная</strong></p>
                <p>2700 / 3200 &#8381;</p>
                <p>2000 / 2300 &#8381;</p>
                <p>2200 / 2500 &#8381;</p>
                <p>1800 / 2000 &#8381;</p>
                <p>2000 / 2500 &#8381;</p>
                <p>1500 / *</p>
                <p>2200 / 2500 &#8381;</p>
                <p>2200 / *</p>
                <p>2200 / 2500 &#8381;</p>
                <p>2200 / 2500 &#8381;</p>
                <p>2200 / 2500 &#8381;</p>
                <p>1500 / 1800 &#8381;</p>
                <p>1800 / *</p>
                <p>1800 / 2100 &#8381;</p>
                <p>2200 / 2500 &#8381;</p>
                <p>2500 / 3000 &#8381;</p>
                <p>2200 / 2500 &#8381;</p>
            </div>
            <div id="tab-3" class="col-sm tabs-price hidden">
                <p><strong>Гигиена</strong></p>
                <p>2200 &#8381;</p>
                <p>1800 &#8381;</p>
                <p>2000 &#8381;</p>
                <p>1500 &#8381;</p>
                <p>1800 &#8381;</p>
                <p>1200 &#8381;</p>
                <p>2000 &#8381;</p>
                <p>1800 &#8381;</p>
                <p>2000 &#8381;</p>
                <p>2000 &#8381;</p>
                <p>2000 &#8381;</p>
                <p>1200 &#8381;</p>
                <p>1500 &#8381;</p>
                <p>1500 &#8381;</p>
                <p>2000 &#8381;</p>
                <p>2400 &#8381;</p>
                <p>2000 &#8381;</p>
            </div>
            <div id="tab-4" class="col-sm tabs-price hidden">
                <p><strong>Мытье-сушка</strong></p>
                <p>2000 &#8381;</p>
                <p>1500 &#8381;</p>
                <p>1700 &#8381;</p>
                <p>1200 &#8381;</p>
                <p>1500 &#8381;</p>
                <p>1000 &#8381;</p>
                <p>1700 &#8381;</p>
                <p>1500 &#8381;</p>
                <p>1600 &#8381;</p>
                <p>1800 &#8381;</p>
                <p>1700 &#8381;</p>
                <p>1000 &#8381;</p>
                <p>1200 &#8381;</p>
                <p>1200 &#8381;</p>
                <p>1700 &#8381;</p>
                <p>2000 &#8381;</p>
                <p>1500 &#8381;</p>
            </div>
            <div id="tab-5" class="col-sm tabs-price hidden">
                <p><strong>Тримминг</strong></p>
                <p>*</p>
                <p>3500 &#8381;</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
            </div>
            <div id="tab-6" class="col-sm tabs-price hidden">
                <p><strong>Экспресс-линька</strong></p>
                <p>*</p>
                <p>2800 &#8381;</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>2000 &#8381;</p>
                <p>*</p>
                <p>2800 &#8381;</p>
                <p>*</p>
                <p>*</p>
                <p>*</p>
                <p>2000 &#8381;</p>
                <p>2100 &#8381;</p>
                <p>2100 &#8381;</p>
                <p>*</p>
                <p>3000 &#8381;</p>
                <p>*</p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<!-- Gallery -->
<section id="gallery" class="section">
    <div class="container">
        <div id="animate-title" class="row justify-content-center mb-5 element-animate">
            <div class="col-md-10 text-center">
                <h2 class="heading mb-4 color-common section-title">Все работы смотрите в нашем Instagram </h2>
{{--                    и еще немного наших работ для примера--}}
            </div>
        </div>

        <div id="animate-data" class="row element-animate">
            <div class="major-caousel js-carousel-1 owl-carousel">
                <div>
                    <div id="our-1" class="media d-block media-custom text-center">
                        <a href="#our-1" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
                            <span class="ion-plus icon"></span>
                            <img src="/public/img/gallery/our1.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-2" class="media d-block media-custom text-center">
                        <a href="#our-2" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
                            <span class="ion-plus icon"></span>
                            <img src="/public/img/gallery/our4.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-3" class="media d-block media-custom text-center">
                        <a href="#our-3" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
                            <span class="ion-plus icon"></span>
                            <img src="/public/img/gallery/our5.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-4" class="media d-block media-custom text-center">
                        <a href="#our-4" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
                            <span class="ion-plus icon"></span>
                            <img src="/public/img/gallery/our6.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div>
                    <div id="our-5" class="media d-block media-custom text-center">
                        <a href="#our-5" class="link-thumbnail">
                            <h3 class="main-font"> </h3>
                            <span class="ion-plus icon"></span>
                            <img src="/public/img/gallery/our7.jpeg" alt="Image placeholder" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <!-- END slider -->
        </div>

{{--        <div id="animate-data" class="row element-animate">--}}
{{--            <div class="major-caousel js-carousel-1 owl-carousel">--}}
{{--                <div>--}}
{{--                    <div class="media d-block media-custom text-center">--}}
{{--                        <a href="single.html" class="link-thumbnail">--}}
{{--                            <h3 class="main-font">Немецкая овчарка</h3>--}}
{{--                            <span class="ion-plus icon"></span>--}}
{{--                            <img src="/public/img/dog_1.jpg" alt="Image placeholder" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <div class="media d-block media-custom text-center">--}}
{{--                        <a href="single.html" class="link-thumbnail">--}}
{{--                            <h3 class="main-font">Лабрадор</h3>--}}
{{--                            <span class="ion-plus icon"></span>--}}
{{--                            <img src="/public/img/dog_2.jpg" alt="Image placeholder" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <div class="media d-block media-custom text-center">--}}
{{--                        <a href="single.html" class="link-thumbnail">--}}
{{--                            <h3 class="main-font">Бульдог</h3>--}}
{{--                            <span class="ion-plus icon"></span>--}}
{{--                            <img src="/public/img/dog_3.jpg" alt="Image placeholder" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <div class="media d-block media-custom text-center">--}}
{{--                        <a href="single.html" class="link-thumbnail">--}}
{{--                            <h3 class="main-font">Восточно-европейская овчарка</h3>--}}
{{--                            <span class="ion-plus icon"></span>--}}
{{--                            <img src="/public/img/dog_4.jpg" alt="Image placeholder" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <div class="media d-block media-custom text-center">--}}
{{--                        <a href="single.html" class="link-thumbnail">--}}
{{--                            <h3 class="main-font">Бигль</h3>--}}
{{--                            <span class="ion-plus icon"></span>--}}
{{--                            <img src="/public/img/dog_5.jpg" alt="Image placeholder" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <div class="media d-block media-custom text-center">--}}
{{--                        <a href="single.html" class="link-thumbnail">--}}
{{--                            <h3 class="main-font">Золотистый ретривер</h3>--}}
{{--                            <span class="ion-plus icon"></span>--}}
{{--                            <img src="/public/img/dog_6.jpg" alt="Image placeholder" class="img-fluid">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- END slider -->--}}
{{--        </div>--}}
    </div>
</section>
<!-- END section -->

<!-- About our -->
<section id="about-our" class="section">
    <div class="container" style__="margin-top: -100px">
        <h2 class="heading mb-4 color-common text-center section-title">Почему клиенты выбирают нас?</h2>

        <div class="row pd-1-rem__ text-center">
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

{{--        <div class="row">--}}
{{--            <div class="col-12 text-center our">--}}
{{--                <p style="margin-top: 2em">--}}
{{--                    В нашем салоне доступны услуги: <strong>стрижка шерсти и коготков, купание, сушка, чистка глаз и ушей</strong>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
<!-- END section -->

<!-- Orders form -->
<section id="orders-list" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr />
                <h3 class="color-common text-center section-title">Запись на стрижку</h3>
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

                    <div class="form-group">
                        <label for="poroda">Порода *</label>
                        <input type="text" class="form-control" placeholder="" id="poroda" name="poroda">
                    </div>

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
                        <label for="time" class="">Время *</label>
                        <div class="input-group date form_time col-md-5__" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                            <input id="time" name="time" class="form-control" size="16" type="text">

                            <span class="input-group-addon pointer">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div id="sendmessage" style="color: green; font-weight: bold;" class="hidden">
                            Ваша заявка принята
                        </div>

                        <div id="senderror" style="color: red; font-weight: bold;" class="hidden">
                            Заполните пустые поля
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
<!-- END section -->

<!-- Address -->
<section id="address" class="address-fluid">
    <h2 class="heading mb-4 color-common text-center section-title">Москва, ул. Долгоруковская, 40</h2>
    <div class="">

        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac1d2c42ddbc66b85e3eafa2435ccd87074e779036847fb644e7984904e205959&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>

    </div>
</section>
<!-- END section -->

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
<!-- END footer -->

<!-- loader -->
<!--    <div id="loader" class="show fullscreen">-->
<!--      <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>-->
<!--        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/>-->
<!--      </svg>-->
<!--    </div>-->

<script src="/public/js/jquery-3.2.1.min.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/owl.carousel.min.js"></script>
<script src="/public/js/jquery.waypoints.min.js"></script>
<script src="/public/js/main.js"></script>
<script src="/public/js/custom.js"></script>

<!-- 6. Подключить js-файл библиотеки Bootstrap 3 DateTimePicker -->
{{--<script src="/public/js/moment.js"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>--}}

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

<!-- Fix navbar-toggler button code for hiding navbar-collapse --->
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



