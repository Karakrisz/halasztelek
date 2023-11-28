@extends('layouts.app')

@section('title', $title)

@section('content')

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


@endsection