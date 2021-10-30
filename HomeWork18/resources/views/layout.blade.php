<!doctype html>
<html class="no-js" lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Minecraft Projects</title>
    <meta name="description" content="">
    <!---meta name="viewport" content="width=device-width, initial-scale=1"---->
    <link rel="manifest" href="site.webmanifest">
    <link rel="icon" href="/favicon.png">
    <link rel="apple-touch-icon" href="../icon.png">

    <!-- Place favicon.ico in the root directory -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/icomoon.css">
    <link rel="stylesheet" href="/icons/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/plugins.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/dist/css/swiper.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Page Content START -->
    <div class="page-content">
        <nav id="main-nav" class="main-nav fixed">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="nav-header d-flex justify-content-between align-items-center">
                            <a href="index.html" class="logo" title="LOGO">
                                <img class="logo-img" src="../img/logo.png" alt="LOGO">
                                <img class="alt-logo-img" src="../img/logo-alt.png" alt="LOGO">
                            </a>
                        </div>
                        <div class="nav-wrap">
                            <ul id="nav" class="nav-wrap__list menu">
                                <li class="current"><a href="/" title="Главная">Главная</a></li>
                                <li><a href="/about.html" title="Проекте">О Проекте</a></li>
                                <li><a href="/donate.html" title="Донат"><span class="red-fox">Донат</span></a></li>
                                <li><a href="/contacts.html" title="Контакты">Контакты</a></li>
                                <div class="dropdown">
                                    <span>
                                        <div class="drop-ed"></div>
                                    </span>
                                    <div class="dropdown-content">
                                        <span class="arrow_box"></span>
                                        <ul class="drop-vape">
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                            <li><a href="#">Банлист</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                            <div class="riglt-floats-xs">
                                <a href="#" class="btn-login"><span class="ic-sx21"></span> Войти в аккаунт</a>
                                <a href="/how-start.html" class="btn-startgames"><span class="ic-sx22"></span> Начать играть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="section site-footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <img class="logo-img my-3" src="../img/logo-ft.png" alt="LOGO">
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <p class="footer-text">© ProjectNames 2018 - Все права только у меня.</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="ft-nav social-nav my-3">
                            <li class="mx-1"><a href="javascript:void(0);" title="vk"><i class="fa fa-vk"></i></a></li>
                            <li class="mx-1"><a href="javascript:void(0);" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="mx-1"><a href="javascript:void(0);" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="mx-1"><a href="javascript:void(0);" title="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <a href="http://larts.pro/">
                            <span class="corp-design"></span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Page Content END -->
    <script src="/dist/js/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 30,
            hashNavigation: {
                watchState: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/circle-progress.js"></script>
    <script src="/js/examples.js"></script>
    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
