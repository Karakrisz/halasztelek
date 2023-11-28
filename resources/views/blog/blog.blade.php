@extends('layouts.app')

@section('title', $title)

@section('content')

@foreach($posts as $post)

<div class="events__content__box">
    <div class="events__content__box--margin">
        <img class="events__content__box__img" src="{{ Voyager::image($post->image) }}" alt="{{ $post->title }}">
        <div class="events__content__box__text-box">
            <h2 class="events__content__box__h2">{{ $post->title }}</h2>
            <p class="events__content__box__p">
                {!! \Illuminate\Support\Str::limit(strip_tags(htmlspecialchars_decode($post->body)), 100) !!}
            </p>
            <a class="events__content__box__link" href="{{ route('post.show', ['post' => $post]) }}"><img
                    src="/img/events.svg" alt="chajcafe"></a>
        </div>
    </div>
</div>

@endforeach

@endsection