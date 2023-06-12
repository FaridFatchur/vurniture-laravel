<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Vurniture</title>
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
            <img src="img/logo.png">
        </div>

        <ul class="navbar">
            <li><a href="home.html">Home</a></li>
            <li><a href="categories.html">Categories</a></li>
            <li><a href="about-us.html">About Us</a></li>
        </ul>
        
        <div class="btn">
            <a href="#"><i class='bx bx-search' id="search-btn"></i></a>
            <a href="#"><i class='bx bx-shopping-bag' id="shop-btn"></i></a>
            <a href="login.html"><i class='bx bx-user' id="user-btn"></i></a>
            <a href="#"><i class='bx bx-menu' id="menu-btn"></i></a>
        </div>
    </header>

    <!-- categories section -->
    <section class="categories" id="categories">
        <div class="title">
            <h2>Categories</h2>
        </div>

        <div class="box-container">
            <a href="#">
                <div class="box">
                    <img src="img/icon-bed.png">
                    <h3>Bed</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <img src="img/icon-bookcase.png">
                    <h3>Bookcase</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <img src="img/icon-cabinet.png">
                    <h3>Cabinet</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <img src="img/icon-chair.png">
                    <h3>Chair</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <img src="img/icon-desk.png">
                    <h3>Desk</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <img src="img/icon-sofa.png">
                    <h3>Sofa</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <img src="img/icon-table.png">
                    <h3>Table</h3>
                </div>
            </a>

            <a href="#">
                <div class="box">
                    <img src="img/icon-wardrobe.png">
                    <h3>Wardrobe</h3>
                </div>
            </a>
        </div>
    </section>
</body>
</html>