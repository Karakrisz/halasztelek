@extends('layouts.app')

@section('content')
<section>
    <div class="slider-content position-relative">
        <img class="slider-content__img" src="img/slider/slider.webp" alt="gazdaesbadogos">

        <div class="slider-content__img-text-box d-flex position-absolute">

            <div class="slider-content__img-text-box__text-box t-end">
                <h1 class="slider-content__img-text-box__text-box__h1 text-transform-uppercase">Lorem ipsum dolor sit
                    amet
                    consectetur iaculis eu
                    vitae aenean</h1>
            </div>

            <div class="slider-content__img-text-box__img-box">
                <img class="slider-content__img-text-box__img-box__img" src="img/slider/mdi_screw-flat-top.svg"
                    alt="gazdaesbadogos">
            </div>

        </div>
    </div>
</section>

<section>
    <div class="about-content">

        <h2 class="about-content__h2 text-transform-uppercase text-center">AKCIÓINK</h2>

        <div class="about-content__img-text-box d-flex">

            <div class="about-content__img-text-box__div position-relative">
                <div class="about-content__img-text-box__div__number-box position-absolute">
                    <p class="about-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="about-content__img-text-box__div__margin-box">
                    <img class="about-content__img-text-box__div__img" src="img/about/product.webp"
                        alt="gazdaesbadogos">
                    <div class="about-content__img-text-box__div__bottom-panel d-flex">
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

            <div class="about-content__img-text-box__div position-relative">
                <div class="about-content__img-text-box__div__number-box position-absolute">
                    <p class="about-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="about-content__img-text-box__div__margin-box">
                    <img class="about-content__img-text-box__div__img" src="img/about/product-2.webp"
                        alt="gazdaesbadogos">
                    <div class="about-content__img-text-box__div__bottom-panel d-flex">
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

            <div class="about-content__img-text-box__div position-relative">
                <div class="about-content__img-text-box__div__number-box position-absolute">
                    <p class="about-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="about-content__img-text-box__div__margin-box">
                    <img class="about-content__img-text-box__div__img" src="img/about/product-3.webp"
                        alt="gazdaesbadogos">
                    <div class="about-content__img-text-box__div__bottom-panel d-flex">
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

            <div class="about-content__img-text-box__div position-relative">
                <div class="about-content__img-text-box__div__number-box position-absolute">
                    <p class="about-content__img-text-box__div__number-box__p">-25%</p>
                </div>
                <div class="about-content__img-text-box__div__margin-box">
                    <img class="about-content__img-text-box__div__img" src="img/about/product-4.webp"
                        alt="gazdaesbadogos">
                    <div class="about-content__img-text-box__div__bottom-panel d-flex">
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--font-fomating">
                            500 Ft</p>
                        <p class="about-content__img-text-box__div__bottom-panel__p 
                            about-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            325 Ft</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="about-content__link-box text-center">
            <a class="page-link" href="#">Összes akció</a>
        </div>

    </div>
</section>


@endsection