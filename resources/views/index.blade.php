<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Про нас - Kirill pizza</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>

<body>
<div class="wrap-main">
    @include('partials.header')
    <!-- content -->

    <div class="content-main">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="index-main">
            <h1 class="title menu-2">Kiril Pizza</h1>
            <p>Unforgettable taste, the highest quality products and only real Italian pizza made by the best
                student of KPI.</p>
            <img src="{{ asset('images/pizza_changed.png') }}" alt="">
        </div>

    </div>
    <div class="out-menu-index">
        <h1 class="title menu-2">OUR MENU</h1>
        <p>Our menu provides the best and most selected pizza recipes based on authentic Italian recipes. Each pizza
            is prepared by real professionals and with love with every ingredient.</p>
    </div>
    <div class="pizza-index">
        <div class="p-index">
            <img src="{{ asset('images/bravar_without_bg.png') }}" alt="">
            <p>Pizza "Brovar"</p>
        </div>
        <div class="p-index">
            <img src="{{ asset('images/kolbasnaya_without_bg.png') }}" alt="">
            <p>Pizza "Kolbasnaya"</p>
        </div>
        <div class="p-index">
            <img src="{{ asset('images/img-1.png') }}" alt="">
            <p>Pizza "Gribnaya"</p>
        </div>
    </div>
    <a href="/catalog" class="btn-menu">menu</a>

    <div class="block-forus">
        <div class="block">
            <h1 class="title">ABOUT US</h1>
            <p>Kiril Pizza</p>
            <p>
                We welcome you to sit back, unwind and appreciate the lovely sights and hints of the ocean while our
                best gourmet expert sets you up a scrumptious dinner utilizing the best and freshest
                ingredients.Kiril
                Pizza legacy comes from The parent Restaurant which was built up in 2019.
            </p>
            <p>
                Kiril Pizza was worked for people in general and has advanced into a combination between exquisite
                chic
                and contemporary fine charge.
                Enjoy our dazzling dishes and make the most of your eating background with us!
            </p>
            <a href="#" class="btn-read">read more</a>
        </div>
        <div class="block">
            <img src="{{ asset('images/image 4.png') }}" alt="">
        </div>
    </div>
    <div class="content-main bot">
        <img class="img-b" src="{{ asset('images/bravar_without_bg.png') }}" alt="">
        <h1 class="title menu-2">Kiril Pizza</h1>
        <div class="wrap-social bottom">
            <div class="social">
                <a href="#"><img src="{{ asset('images/telegram.svg') }}" alt=""></a>
            </div>
            <div class="social">
                <a href="#"><img src="{{ asset('images/facebook.svg') }}" alt=""></a>
            </div>
            <div class="social">
                <a href="#"><img src="{{ asset('images/instagram.svg') }}" alt=""></a>
            </div>
        </div>

    </div>
    @include('partials.footer')

    <script src="{{ asset('script/script.js') }}"></script>
</body>

</html>
