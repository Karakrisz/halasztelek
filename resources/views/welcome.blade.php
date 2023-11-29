@extends('layouts.app')

@section('content')

<section>
    <div class="slider-content position-relative">
        <img class="slider-content__img" src="/img/slider/slider.webp" alt="gazdaesbadogos">

        <div class="slider-content__img-text-box d-flex position-absolute">

            <div class="slider-content__img-text-box__text-box t-end">
                <h1 class="slider-content__img-text-box__text-box__h1 text-transform-uppercase matrix-text">
                    <span class="matrix-text__span">Vevő</span>
                    <span class="matrix-text__span">innen</span>
                    <span class="matrix-text__span">nem</span>
                    <span class="matrix-text__span">mehet</span>
                    <span class="matrix-text__span">el</span>
                    <span class="matrix-text__span">üres</span>
                    <span class="matrix-text__span">kézzel.</span>
                    <span class="matrix-text__span">Ha</span>
                    <span class="matrix-text__span">mégis</span>
                    <span class="matrix-text__span">olyat</span>
                    <span class="matrix-text__span">szeretne,</span>
                    <span class="matrix-text__span">ami</span>
                    <span class="matrix-text__span">nincs,</span>
                    <span class="matrix-text__span">akkor</span>
                    <span class="matrix-text__span">az</span>
                    <span class="matrix-text__span">holnap</span>
                    <span class="matrix-text__span">már</span>
                    <span class="matrix-text__span">készleten</span>
                    <span class="matrix-text__span">van.</span>
                </h1>
            </div>

            <div class="slider-content__img-text-box__img-box">
                <img class="slider-content__img-text-box__img-box__img" src="img/slider/mdi_screw-flat-top.svg"
                    alt="gazdaesbadogos">
            </div>

        </div>
    </div>
</section>

<section>
    <div class="promotions-content">

        <h2 class="promotions-content__h2 text-transform-uppercase text-center">AKCIÓINK</h2>

        <div class="promotions-content__img-text-box d-flex d-flex-wrap">

            <div class="promotions-content__img-text-box__div position-relative">
                <div class="promotions-content__img-text-box__div__number-box position-absolute">
                    <p class="promotions-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="promotions-content__img-text-box__div__margin-box">
                    <img class="promotions-content__img-text-box__div__img" src="img/promotions/product.webp"
                        alt="gazdaesbadogos">
                    <div class="promotions-content__img-text-box__div__name-panel">
                        <p class="promotions-content__img-text-box__div__name-panel__p">Termék neve</p>
                    </div>
                    <div class="promotions-content__img-text-box__div__bottom-panel d-flex">
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

            <div class="promotions-content__img-text-box__div position-relative">
                <div class="promotions-content__img-text-box__div__number-box position-absolute">
                    <p class="promotions-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="promotions-content__img-text-box__div__margin-box">
                    <img class="promotions-content__img-text-box__div__img" src="img/promotions/product-2.webp"
                        alt="gazdaesbadogos">
                    <div class="promotions-content__img-text-box__div__name-panel">
                        <p class="promotions-content__img-text-box__div__name-panel__p">Termék neve</p>
                    </div>
                    <div class="promotions-content__img-text-box__div__bottom-panel d-flex">
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

            <div class="promotions-content__img-text-box__div position-relative">
                <div class="promotions-content__img-text-box__div__number-box position-absolute">
                    <p class="promotions-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="promotions-content__img-text-box__div__margin-box">
                    <img class="promotions-content__img-text-box__div__img" src="img/promotions/product-3.webp"
                        alt="gazdaesbadogos">
                    <div class="promotions-content__img-text-box__div__name-panel">
                        <p class="promotions-content__img-text-box__div__name-panel__p">Termék neve</p>
                    </div>
                    <div class="promotions-content__img-text-box__div__bottom-panel d-flex">
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

            <div class="promotions-content__img-text-box__div position-relative">
                <div class="promotions-content__img-text-box__div__number-box position-absolute">
                    <p class="promotions-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="promotions-content__img-text-box__div__margin-box">
                    <img class="promotions-content__img-text-box__div__img" src="img/promotions/product-4.webp"
                        alt="gazdaesbadogos">
                    <div class="promotions-content__img-text-box__div__name-panel">
                        <p class="promotions-content__img-text-box__div__name-panel__p">Termék neve</p>
                    </div>
                    <div class="promotions-content__img-text-box__div__bottom-panel d-flex">
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="promotions-content__link-box text-center">
            <a class="page-link" href="{{ route('akciok') }}">Összes akció</a>
        </div>

    </div>
</section>

<section>

    <div class="about-content">

        <div class="about-content__img-text-box d-flex d-flex-wrap">

            <div class="about-content__img-text-box__text-box">

                <h3 class="about-content__img-text-box__text-box__h3 text-transform-uppercase page-header">
                    <img class="page-header__img position-relative" src="img/about/line.svg" alt="gazdaesbadogos">
                    Rólunk
                </h3>
                <p class="about-content__img-text-box__text-box__p">Volt egyszer egy szűcsmester kit Istenes Miklósnak
                    hívtak. Miklós szerette a választott mesterségét, és a megrendelői szerint szép munkát is végzett.
                    Tehette is, hiszen vérében volt az ügyfelek iránti tisztelet, és segíteni akarás. Munka után Miklós
                    mindig szívesen tett vett a ház körül, és akkor volt nyugodt, ha a kamrájában minden szükséges
                    eszköz a rendelkezésére állt.
                </p>
                <p class="about-content__img-text-box__text-box__p">Erről a tulajdonságáról a környékbeliek is tudtak,
                    így gyakran járt
                    nála szomszéd, jóbarát, hogy kölcsönkérjen kapát kaszát, vagy éppen vetőmagot. Miklós ezt nagyon
                    szerette, mert ilyenkor lehetősége volt a földijeivel néhány szót váltani az élet, és szűkebb
                    környezetük fontos dolgairól. Élt szépen Miklós feleségével és gyermekével, és talán nem is változik
                    semmi, ha egyszer egy ismerős nem ajánl fel neki megvételre egy halásztelki kis bolthelyiséget.
                    Mondván ők Németországba költözne, és szeretnék a kis helyiséget gondos gazdára bízni.</p>

                <div class="about-content__img-text-box__text-box__link-box">
                    <a class="about-content__img-text-box__text-box__link-box__link page-link"
                        href="{{ route('rolunk') }}">Tovább</a>
                </div>
            </div>

            <div class="about-content__img-text-box__img-box position-relative">
                <div class="about-content__img-text-box__img-box__one-img-box position-absolute">
                    <img class="about-content__img-text-box__img-box__one-img-box__img" src="img/about/about-2.webp"
                        alt="gazdaesbadogos">
                </div>
                <img class="about-content__img-text-box__img-box__img" src="img/about/about.webp" alt="gazdaesbadogos">
            </div>

        </div>

    </div>

</section>

<section>

    <div class="gallery-content">

        <div class="gallery-content__page-header-box">
            <h4 class="gallery-content__h4 text-transform-uppercase page-header"> GALÉRIA
                <img class="page-header__img gallery-content__page-header-box__img position-relative"
                    src="img/about/line.svg" alt="gazdaesbadogos">
            </h4>
        </div>

        <div class="container">


            <div class="gallery-content__sildes">
                <img class="gallery-content__sildes__img" src="img/gallery/gallery.webp" alt="gazdaesbadogos">
            </div>

            <div class="gallery-content__sildes">
                <img class="gallery-content__sildes__img" src="img/gallery/gallery2.webp" alt="gazdaesbadogos">
            </div>

            <div class="gallery-content__sildes">
                <img class="gallery-content__sildes__img" src="img/gallery/gallery3.webp" alt="gazdaesbadogos">
            </div>

            <div class="gallery-content__sildes">
                <img class="gallery-content__sildes__img" src="img/gallery/gallery4.webp" alt="gazdaesbadogos">
            </div>

            <div class="gallery-content__sildes">
                <img class="gallery-content__sildes__img" src="img/gallery/gallery5.webp" alt="gazdaesbadogos">
            </div>

            <div class="gallery-content__sildes">
                <img class="gallery-content__sildes__img" src="img/gallery/gallery6.webp" alt="gazdaesbadogos">
            </div>

            <button class="gallery-content__prev" id="prevButton"><img class="gallery-content__prev__img"
                    src="img/gallery/g-arrow-left.svg" alt=""></button>
            <button class="gallery-content__next" id="nextButton"><img class="gallery-content__next__img"
                    src="img/gallery/g-arrow-right.svg" alt=""></button>

            <div class="gallery-content__row">
                <div class="gallery-content__row__column">
                    <img id="demo1" class="gallery-content__row__column__demo cursor gallery-content__row__column__img"
                        src="img/gallery/gallery.webp" alt="gazdaesbadogos">
                </div>

                <div class="gallery-content__row__column">
                    <img id="demo2" class="gallery-content__row__column__demo cursor gallery-content__row__column__img"
                        src="img/gallery/gallery2.webp" alt="gazdaesbadogos">
                </div>
                <div class="gallery-content__row__column">
                    <img id="demo3" class="gallery-content__row__column__demo cursor gallery-content__row__column__img"
                        src="img/gallery/gallery3.webp" alt="gazdaesbadogos">
                </div>
                <div class="gallery-content__row__column">
                    <img id="demo4" class="gallery-content__row__column__demo cursor gallery-content__row__column__img"
                        src="img/gallery/gallery4.webp" alt="gazdaesbadogos">
                </div>
                <div class="gallery-content__row__column">
                    <img id="demo5" class="gallery-content__row__column__demo cursor gallery-content__row__column__img"
                        src="img/gallery/gallery5.webp" alt="gazdaesbadogos">
                </div>
                <div class="gallery-content__row__column">
                    <img id="demo6" class="gallery-content__row__column__demo cursor gallery-content__row__column__img"
                        src="img/gallery/gallery6.webp" alt="gazdaesbadogos">
                </div>
            </div>

        </div>

    </div>

</section>

<section>

    <div class="products-content">

        <div class="products-content__header-box">
            <h5 class="products-content___h5 text-transform-uppercase page-header"> TERMÉKEINK
                <img class="page-header__img gallery-content__page-header-box__img position-relative"
                    src="img/about/line.svg" alt="gazdaesbadogos">
            </h5>
        </div>

        <div class="products-content__flex-box d-flex d-flex-wrap">

            <div class="products-content__flex-box__div products-content__flex-box__div--one-bg-img">
                <div class="products-content__flex-box__div__text-box">
                    <div class="products-content__flex-box__div__text-box__div position-relative">
                        <h6 class="products-content__flex-box__div__text-box__div__h6 position-absolute">CSAVAROK
                        </h6>
                    </div>
                </div>
            </div>

            <div class="products-content__flex-box__div products-content__flex-box__div--two-bg-img">
                <div class="products-content__flex-box__div__text-box">
                    <div class="products-content__flex-box__div__text-box__div position-relative">
                        <h6 class="products-content__flex-box__div__text-box__div__h6 position-absolute">SZÁRAZ
                            ÉPÍTÉSZET</h6>
                    </div>
                </div>
            </div>

            <div class="products-content__flex-box__div products-content__flex-box__div--three-bg-img">
                <div class="products-content__flex-box__div__text-box">
                    <div class="products-content__flex-box__div__text-box__div position-relative">
                        <h6 class="products-content__flex-box__div__text-box__div__h6 position-absolute">KERTÉSZETI
                            KELLÉKEK</h6>
                    </div>
                </div>
            </div>

        </div>

        <div class="products-content__flex-box d-flex d-flex-wrap">

            <div class="products-content__flex-box__div products-content__flex-box__div--four-bg-img">
                <div class="products-content__flex-box__div__text-box">
                    <div class="products-content__flex-box__div__text-box__div position-relative">
                        <h6 class="products-content__flex-box__div__text-box__div__h6 position-absolute">SZERSZÁMOK
                        </h6>
                    </div>
                </div>
            </div>

            <div class="products-content__flex-box__div products-content__flex-box__div--five-bg-img">
                <div class="products-content__flex-box__div__text-box">
                    <div class="products-content__flex-box__div__text-box__div position-relative">
                        <h6 class="products-content__flex-box__div__text-box__div__h6 position-absolute">
                            MEZŐGAZDASÁGI FÓLIÁK</h6>
                    </div>
                </div>
            </div>

            <div class="products-content__flex-box__div products-content__flex-box__div--six-bg-img">
                <div class="products-content__flex-box__div__text-box">
                    <div class="products-content__flex-box__div__text-box__div position-relative">
                        <h6 class="products-content__flex-box__div__text-box__div__h6 position-absolute">
                            MEZŐGAZDASÁGI FÓLIÁK</h6>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
@endsection