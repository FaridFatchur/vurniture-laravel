<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Vurniture</title>
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

    <!-- box icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header section -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>

        <ul class="navbar">
            <li><a href="/">Home</a></li>
            <li><a href="/categories')">Categories</a></li>
            <li><a href="/about-us">About Us</a></li>
        </ul>
        
        <div class="btn">
            <a href="#"><i class='bx bx-search' id="search-btn"></i></a>
            <a href="{{ url('/vurniture/cart') }}"><i class='bx bx-shopping-bag' id="shop-btn"></i></a>
            <a href="{{ url('/vurniture/login') }}"><i class='bx bx-user' id="user-btn"></i></a>
            <a href="#"><i class='bx bx-menu' id="menu-btn"></i></a>
        </div>
    </header>

    @if(!empty($order))
    <section class="cart">
        <div class="title">
            <h2>Cart</h2>
        </div>

        <div class="row">
            @foreach($order_details as $order_detail)
            <div class="catalog">
                {{-- @if($order_detail->product) --}}
                    <img src="{{ url('uploads') }}/{{ $order_detail->products->pic }}">
                    <h3>{{ $order_detail->products->name }} ({{ $order_detail->product_qty }})</h3>
                    <h4>Rp{{ number_format($order_detail->total) }}</h4>
                    <form class="atc-btn-del" action="{{ url('/vurniture/cart') }}/{{ $order_detail->id }}" method="post">
                        @csrf
                        {{ method_field(('delete')) }}
                        <button type="submit">Delete</button>
                    </form>
                {{-- @endif --}}
            </div>
        @endforeach
        
        </div>
    </section>

    <div class="total-cart-container">
        <div class="total-cart-content">
            <h3>Total Order</h3>
            <h4>{{ $order->date }}</h4>
            <hr>
            <h5>Rp{{ number_format($order->total) }}</h5>
            <a href="{{ url('/vurniture/checkout_confirm') }}" class="button-back">Checkout</a>
        </div>
    </div>
    @endif
</body>
</html>