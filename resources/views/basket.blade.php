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
        <h1 class="title">your order</h1>
        <div class="block-goods">
            @php $sum = 0 @endphp
            @foreach($products as $key => $prod)
                <form class="basket_form" action="/delete_product" method="post">
                    @csrf
                    <div class="goods">
                        <p><img src="{{ $prod['img'] }}" alt=""></p>
                        <p>{{ $prod['title'] }}</p>
                        <p>{{ $prod['price'] }} $</p>
                        <input type="hidden" name="prod_item" value="{{ $key }}">
                        <button class="delete" type="submit">Delete</button>
                    </div>
                </form>

                @php $sum += $prod['price'] @endphp
            @endforeach
            <div class="price">
                <h3>Total: {{ $sum }} $</h3>
                <button class="add_order">Order</button>
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>

<script src="{{ asset('script/script.js') }}"></script>
</body>
</html>
