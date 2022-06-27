<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Замовлення - Kirill pizza</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
</head>
<body>
<div class="wrap-main">
@include('partials.header')
    <!-- content -->
    <div class="content">
        <h1 class="title menu-2">our menu</h1>
        <div class="block-menu">
            <div class="control">
                <button>discounts</button>
                <a href="#">more</a>
            </div>
            <div class="block-pizza">
                @foreach($pizzas['discounts'] as $id => $pizza)
                    <form action="/add_product" method="post">
                        @csrf
                        <div class="menu-goods">
                            <img src="{{ asset("{$pizza['img']}") }}" alt="">
                            <p>{{ $pizza['title'] }}</p>
                            <p>Price: {{ $pizza['price'] }} $</p>
                            <input type="hidden" name="prod_type" value="discounts">
                            <input type="hidden" name="prod_id" value="{{ $id }}">
                            <button type="submit">Add to cart</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
        <div class="block-menu">
            <div class="control">
                <button>novelty</button>
                <a href="#">more</a>
            </div>
            <div class="block-pizza">
                @foreach($pizzas['novelty'] as $id => $pizza)
                    <form action="/add_product" method="post">
                        @csrf
                        <div class="menu-goods">
                            <img src="{{ asset("{$pizza['img']}") }}" alt="">
                            <p>{{ $pizza['title'] }}</p>
                            <p>Price: {{ $pizza['price'] }} $</p>
                            <input type="hidden" name="prod_type" value="novelty">
                            <input type="hidden" name="prod_id" value="{{ $id }}">
                            <button type="submit">Add to cart</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
        <div class="block-menu">
            <div class="control">
                <button>vegetarian</button>
                <a href="#">more</a>
            </div>
            <div class="block-pizza">
                @foreach($pizzas['vegeterian'] as $id => $pizza)
                    <form action="/add_product" method="post">
                        @csrf
                        <div class="menu-goods">
                            <img src="{{ asset("{$pizza['img']}") }}" alt="">
                            <p>{{ $pizza['title'] }}</p>
                            <p>Price: {{ $pizza['price'] }} $</p>
                            <input type="hidden" name="prod_type" value="vegeterian">
                            <input type="hidden" name="prod_id" value="{{ $id }}">
                            <button type="submit">Add to cart</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>

<script src="{{ asset('script/script.js') }}"></script>
</body>
</html>
