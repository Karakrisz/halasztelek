@extends('layouts.app')

@section('title', $title)

@section('content')

<section>
    <div class="promotions-content promotions-content--subpage-formating">

        <h2 class="promotions-content__h2 text-transform-uppercase text-center">Blog</h2>

        <div class="promotions-content__img-text-box  d-flex d-flex-wrap">
            @foreach($posts as $post)
            <div
                class="promotions-content__img-text-box__div promotions-content__img-text-box__div--subpage-formating position-relative">
                <div class="promotions-content__img-text-box__div__margin-box">
                    <img class="promotions-content__img-text-box__div__img" src="{{ Voyager::image($post->image) }}"
                        alt="{{ $post->title }}">
                    <div class="promotions-content__img-text-box__div__name-panel">
                        <p class="promotions-content__img-text-box__div__name-panel__p">{{ $post->title }}</p>
                    </div>
                    <div class="promotions-content__img-text-box__div__bottom-panel d-flex">
                        <p
                            class="promotions-content__img-text-box__div__bottom-panel__p promotions-content__img-text-box__div__bottom-panel__subpage-formating">
                            {!! \Illuminate\Support\Str::limit(strip_tags(htmlspecialchars_decode($post->body)), 100)
                            !!}
                        </p>
                        <p class="promotions-content__img-text-box__div__bottom-panel__p 
                            promotions-content__img-text-box__div__bottom-panel__p--next-font-formating">
                            <a class="promotions-content__img-text-box__div__bottom-panel__p__link"
                                href="{{ route('post.show', ['post' => $post]) }}">
                                <img class="promotions-content__img-text-box__div__bottom-panel__p__link__img"
                                    src="/img/gallery/g-arrow-right.svg" alt="halesztelek">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection