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

    <div class="content-main pd">
        <div class="wrap-content-main">
            <div class="block">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="block">
                <h1 class="title">Kiril Pizza</h1>
                <p>
                    Pizzeria Pizza Plus is located in the heart of Ivano-Frankivsk, on Rynok Square. Modern interior
                    in the style of minimalism and complemented by wild stone and natural wood. Guests can enjoy
                    popular Italian and European dishes. Branded treat - pizza on thin dough. There are vegetarian
                    dishes and a separate children's menu. The bar serves draft beer and beer snacks. The delivery
                    service is working.
                </p>
            </div>
        </div>
        <a href="/catalog" class="btn-menu">menu</a>
    </div>
    <div class="maps">
        <h2 class="title">
            We are on the map
        </h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.468905161947!2d30.48661821533884!3d50.46961377947803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce742f6d298d%3A0xa78a8e13bdf9636c!2z0YPQuy4g0J_QtdGH0LXQvdC10LbRgdC60LDRjywgMSwg0JrQuNC10LIsIDA0MTA3!5e0!3m2!1sru!2sua!4v1655721759818!5m2!1sru!2sua"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <h2 class="title">
            Contacts
        </h2>
        <div class="wrap-contact main-contact">
            <div class="block">
                <div class="wrap-social">
                    <div class="social">
                        <a href="#"><img src="{{ asset('images/telegram.svg') }}" alt=""></a>
                    </div>
                    <div class="social">
                        <a href="#"><img src="{{ asset('images/facebook.svg') }}" alt=""></a>
                    </div>
                    <div class="social">
                        <a href="#"><img src="{{ asset('images/instagram.svg') }}" alt=""></a>
                    </div>
                    <div class="social">
                        <a href="#"><img src="{{ asset('images/twitter.svg') }}" alt=""></a>
                    </div>
                </div>
                <div class="phone">
                    <div class="wrap-social">
                        <div class="social">
                            <a href="#"><img src="{{ asset('images/telephone 1.png') }}" alt=""></a>
                        </div>
                    </div>
                    <span>+38 067 414 44 44</span>
                </div>
            </div>
            <div class="block">
                <form>
                    <h3>Complete the form and we will call you</h3>
                    <div class="wrap-contact">
                        <div class="block">
                            <p>Name</p>
                            <input type="text" name="name">
                        </div>
                        <div class="block">
                            <p>Phone</p>
                            <input type="text" name="phone">
                        </div>
                    </div>
                    <p>Message</p>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                    <button>Send</button>
                </form>
            </div>
        </div>
    </div>

   @include('partials.footer')
</div>

<script src="{{ asset('script/script.js') }}"></script>
</body>

</html>
