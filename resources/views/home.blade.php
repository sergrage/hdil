@extends('layouts.app')

@section('content')

<section class="hero">
<!--     <img class="hero__image" src="/app/img/hero-1920.jpg" alt="light bulb image"> -->
    <div class="hero__text">
        <h1>Find the best way</h1>
        <h3>to learn something new</h3>  
        <a href="#" class="btn hero__btn">learn more</a>  
    </div>
    <picture>
	   	<source srcset="/app/img/hero-1920.jpg" media="(min-width: 1200px)" sizes="1920px">
       	<source srcset="/app/img/hero-1140.jpg" media="(min-width: 992px)" sizes="1200px">
       	<source srcset="/app/img/hero-992.jpg" media="(min-width: 768px)" sizes="992px">
       	<img src="/app/img/hero-768.jpg" alt="light bulb image" class="hero__image">
    </picture>
</section>


@endsection
