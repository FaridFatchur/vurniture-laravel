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

<body class="cat-bd">
    <!-- header section -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>

        <ul class="navbar">
            <li><a href="/">Home</a></li>
            <li><a href="/categories">Categories</a></li>
            <li><a href="/about-us">About Us</a></li>
        </ul>
        
        <div class="btn">
            <a href="#"><i class='bx bx-search' id="search-btn"></i></a>
            <a href="{{ url('/vurniture/cart') }}"><i class='bx bx-shopping-bag' id="shop-btn"></i></a>
            <a href="{{ url('/login') }}"><i class='bx bx-user' id="user-btn"></i></a>
            <a href="#"><i class='bx bx-menu' id="menu-btn"></i></a>
        </div>
    </header>
    <!-- categories section -->
    <section class="categories" id="categories">
        <div class="title">
            <h2>
                <div class="category">
                    @yield('category')
                </div>
            </h2>
        </div>

        <!-- content section -->
        <div class="content">
            @yield('content')
        </div>

        <div class="row">
            @foreach($dataProduct as $product)
            <div class="catalog">
                <img src="{{ url('uploads') }}/{{ $product->pic }}">
                <h3>{{ $product->name }}</h3>
                <h4>Rp{{ number_format($product->price) }}</h4>
                <div class="atc-btn">
                    <a href="{{ url('/vurniture/productdetail') }}/{{ $product->id }}" role="button">Check Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
        
</body>
</html>
