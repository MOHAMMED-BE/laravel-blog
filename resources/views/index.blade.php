@extends('layouts.app')

@section('content')

<div class="hero-bg-image d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-white fs-1 fw-bolde text-uppercase pb-10">Welcom</h1>
    <a href="/" class="btn btn-light fs-5">Start Reading</a>
</div>

<div class="container mb-4 row mt-3 mx-auto">
    <div class="col-md-auto">
        <img class="rounded shadow" src="https://picsum.photos/id/239/400/250" alt="">
    </div>

    <div class="col-md-auto">
        <h2>Lorem ipsum dolor sit amet.</h2>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nam!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, minus fuga.</p>


        <a href="/" class="btn btn-outline-dark">Read More</a>
    </div>
</div>

<!-- Blog Categories -->

<div class="text-center p-4 bg-dark text-light shadow rounded container">
    <h2 class="fs-2">Blog Categories</h2>
    <div class="mx-auto pt-10 row d-flex justify-content-center align-items-center">
        <div class="py-2 fs-6 col-md-auto">UX Design</div>
        <div class="py-2 fs-6 col-md-auto">Programming Languages</div>
        <div class="py-2 fs-6 col-md-auto">Graphic Design</div>
        <div class="py-2 fs-6 col-md-auto">Front-End Devloper</div>
    </div>
</div>

<!-- Recent Posts -->

<div class="container mx-auto text-center py-5 ">
    <h2 class="px-6">Recent Post</h2>

    <p class="px-6">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum, ducimus expedita nemo nam nobis dolorem consectetur explicabo possimus esse corrupti?
    </p>
</div>


<div class="container row mx-auto text-light ">
    <div class="bg-dark pt-4 col-md-5 col-lg-5 col-sm-1 rounded">
        <div class="d-block m-auto pt-4 pb-5">
            <ul class="justify-content-center">
                <li class="d-inline-block p-1"><a href="http://" class="btn btn-light">PHP</a></li>
                <li class="d-inline-block p-1"><a href="http://" class="btn btn-light">LARAVEL</a></li>
                <li class="d-inline-block p-1"><a href="http://" class="btn btn-light">FLASK</a></li>
                <li class="d-inline-block p-1"><a href="http://" class="btn btn-light">NODE JS</a></li>
            </ul>

            <h5 class="p-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis nostrum animi quidem possimus facere tenetur ullam provident quia ut. Molestiae vero aut nulla molestias corporis. Magnam voluptates libero dolores.
            </h5>

            <a href="http://" class="ms-4 btn btn-outline-light">Read More</a>
        </div>
    </div>

    <div class="col-md-5 col-lg-5 col-sm-1 m-1">
        <img class="rounded shadow object-fit-cover" src="https://picsum.photos/id/6/700/550" alt="">
    </div>
</div>




@endsection