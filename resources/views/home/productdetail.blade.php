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
            <img src="{{asset('img/logo.png')}}">
        </div>

        <ul class="navbar">
            <li><a href="/">Home</a></li>
            <li><a href="/categories">Categories</a></li>
            <li><a href="/about-us">About Us</a></li>
        </ul>
        
        <div class="btn">
            <a href="#"><i class='bx bx-search' id="search-btn"></i></a>
            <a href="{{ url('/vurniture/cart') }}"><i class='bx bx-shopping-bag' id="shop-btn"></i></a>
            @auth
            @if (Auth::user()->isadmin)
                <a href="{{ url('/admin/dashboard') }}"><i class='bx bx-user' id="user-btn"></i></a>
            @else
                <a href="{{ url('/dashboard') }}"><i class='bx bx-user' id="user-btn"></i></a>
            @endif
            @else
                <a href="{{ url('/login') }}"><i class='bx bx-user' id="user-btn"></i></a>
            @endauth
            <a href="#"><i class='bx bx-menu' id="menu-btn"></i></a>
        </div>
    </header>

    <div class="product-details">
        <img class="product-image" src="{{ url('uploads') }}/{{ $product->pic }}" alt="">
        <div class="product-info">
            <h2>{{ $product->name }}</h2>
            <h3>{{ $product->desc }}</h3>
            <h4>Rp{{ number_format($product->price) }}</h4>

            <form action="{{ url('/vurniture/productdetail') }}/{{ $product->id }}" method="post">
                @csrf
                <div class="qty-container">
                    <p class="qty">Quantity</p>
                    <input class="qty-form" name="order_qty" type="number" value="1" min="1" required="">
                </div>

                <div class="button-container">
                    <button class="button-cart">Add to Cart</button>
                </div>

                <div class="button-container">
                    <button class="button-order" onclick="return confirm('Are you sure you want to checkout all the products in the cart?');">Checkout</button>
                </div>
            </form>
        </div>
    </div>

    <!-- custom js -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->


</body>
</html>