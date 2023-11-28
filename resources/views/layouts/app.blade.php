<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="
        default-src 'self' https: data:;
        img-src 'self' https: http: data:;
        font-src 'self' https: data:;
        style-src 'self' https: 'unsafe-inline';
        script-src 'self' https: 'unsafe-inline' 'unsafe-eval';
    ">
    <title>@yield('title', 'Gazda és Bádogbolt Halásztelek')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- SEO -->
    <meta property="og:title" content="gazdaesbadogosbolt" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="gazdaesbadogosbolt" />
    <meta property="og:description" content="" />

    <link rel="schema.dcterms" href="http://purl.org/dc/terms/">
    <meta name="DC.coverage" content="Hungary" />
    <meta name="DC.description" content="" />
    <meta name="DC.format" content="text/html" />
    <meta name="DC.publisher" content="gazdaesbadogosbolt" />
    <meta name="DC.title" content="" />
    <!-- App css -->
    <link rel="stylesheet" href="/css/app.css">


</head>

<body class="antialiased">
    <header>
        <div class="header__right-box d-flex">
            <div class="header__right-box__div">
                <a class="header__right-box__div__link" target="_blank"
                    href="https://www.google.com/maps/place/Hal%C3%A1sztelek,+II.+R%C3%A1k%C3%B3czi+Ferenc+%C3%BAt+58,+2314/@47.3606318,18.9849686,17z/data=!3m1!4b1!4m6!3m5!1s0x4741e5d31bee69f3:0xbc33a92d2f9d9f01!8m2!3d47.3606282!4d18.9875435!16s%2Fg%2F11c249tqpd?authuser=0&entry=ttu">
                    <img class="header__right-box__div__link__img position-relative" src="/img/header/map-icon.svg"
                        alt="gazdaesbadogos">
                    2314
                    Halásztelek ,
                    II. Rákóczi
                    Ferenc út 58/A</a>
            </div>

            <div class="header__right-box__div">
                <a class="header__right-box__div__link" href="tel:+3624450402">
                    <img class="header__right-box__div__link__img position-relative" src="/img/header/phone-icon.svg"
                        alt="gazdaesbadogos">
                    +36 24 450402</a>
            </div>
        </div>
        <nav class="navbar d-flex">
            <div class="hamburger position-relative" id="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="navbar-logo-box">
                <a href="/">
                    <img class="navbar-logo-box__img" src="/img/header/logo.jpg" alt="gazdaesbadogos">
                </a>
            </div>
            <ul class="menu d-flex" id="menu">
                <li><a href="/">Főoldal</a></li>
                <li><a href="{{ route('rolunk') }}">Rólunk</a></li>
                <li><a href="{{ route('galeria') }}">Galéria</a></li>
                <!-- <li><a href="#">Termékeink</a></li> -->
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('kapcsolat') }}">Kapcsolat</a></li>
                <li><a class="menu__elem__link--font-w" href="{{ route('akciok') }}">AKCIÓK</a></li>
                <li class="menu__elem--pr-0"><a href="#"><img class="menu__link__img" src="img/header/facebook-icon.svg"
                            alt="gazdaesbadogos"></a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-content d-flex d-flex-wrap">
            <div class="footer-content__div footer-content__links-box">
                <h5 class="footer-content__links-box__h5">Elérhetőség:</h5>
                <p class="footer-content__links-box__p">
                    <img class="footer-content__links-box__p__img position-relative" src="/img/footer/map.svg"
                        alt="gazdaesbadogos">
                    <a target="_blank" class="footer-content__links-box__p__link"
                        href="https://www.google.com/maps/place/Hal%C3%A1sztelek,+II.+R%C3%A1k%C3%B3czi+Ferenc+%C3%BAt+58,+2314/@47.3606318,18.9849686,17z/data=!3m1!4b1!4m6!3m5!1s0x4741e5d31bee69f3:0xbc33a92d2f9d9f01!8m2!3d47.3606282!4d18.9875435!16s%2Fg%2F11c249tqpd?authuser=0&entry=ttu">2314
                        Halásztelek, II Rákóczi
                        Ferenc
                        út 58/A</a>
                </p>
                <p class="footer-content__links-box__p">
                    <img class="footer-content__links-box__p__img position-relative" src="/img/footer/mobil.svg"
                        alt="gazdaesbadogos">
                    <a class="footer-content__links-box__p__link" href="tel:+36706768368">Istenes Tímea +36 70 67 68
                        368</a>
                </p>
                <p class="footer-content__links-box__p">
                    <img class="footer-content__links-box__p__img position-relative" src="/img/footer/mobil.svg"
                        alt="gazdaesbadogos">
                    <a class="footer-content__links-box__p__link" href="tel:+36704297262">Istenes Tamás +36 70 42 97
                        262</a>
                </p>
                <p class="footer-content__links-box__p">
                    <img class="footer-content__links-box__p__img position-relative" src="/img/footer/telephone.svg"
                        alt="gazdaesbadogos">
                    <a class="footer-content__links-box__p__link" href="tel:+3624450402">Bolt telefon +36 24 450
                        402</a>
                </p>
            </div>

            <div class="footer-content__div footer-content__opening-hours">
                <div class="footer-content__opening-hours__div">
                    <h5 class="footer-content__opening-hours__div__h5">Nyitvatartás:</h5>
                    <p class="footer-content__opening-hours__div__p">Hétfő
                        <strong class="footer-content__opening-hours__div__p__strong float-right">6:30–16:00</strong>
                    </p>
                    <p class="footer-content__opening-hours__div__p">Kedd
                        <strong class="footer-content__opening-hours__div__p__strong float-right">6:30–16:00</strong>
                    </p>
                    <p class="footer-content__opening-hours__div__p">Szerda
                        <strong class="footer-content__opening-hours__div__p__strong float-right">6:30–16:00</strong>
                    </p>
                    <p class="footer-content__opening-hours__div__p">Csütörtök
                        <strong class="footer-content__opening-hours__div__p__strong float-right">6:30–16:00</strong>
                    </p>
                    <p class="footer-content__opening-hours__div__p">Péntek
                        <strong class="footer-content__opening-hours__div__p__strong float-right">6:30–16:00</strong>
                    </p>
                    <p class="footer-content__opening-hours__div__p">Szombat
                        <strong class="footer-content__opening-hours__div__p__strong float-right">6:30–12:00</strong>
                    </p>
                    <p class="footer-content__opening-hours__div__p">Vasárnap
                        <strong class="footer-content__opening-hours__div__p__strong float-right">Zárva</strong>
                    </p>
                </div>
            </div>
            <div class="footer-content__div footer-content__google-map">
                <div class="footer-content__google-map__div">
                    <iframe class="footer-content__google-map__div__iframe map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.629459988783!2d18.984968576261615!3d47.36063180493064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e5d31bee69f3%3A0xbc33a92d2f9d9f01!2zSGFsw6FzenRlbGVrLCBJSS4gUsOha8OzY3ppIEZlcmVuYyDDunQgNTgsIDIzMTQ!5e0!3m2!1shu!2shu!4v1699612974647!5m2!1shu!2shu"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </footer>

</body>

</html>