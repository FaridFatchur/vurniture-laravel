<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('css/style-db.css')}}">

	<title>Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">vurniture</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="home-db.html">
					<i class='bx bxs-home'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li class="active">
				<a href="{{route('products.index')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="analiytics.html">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="message.html">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="team.html">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="settings.html">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="home.html" class="logout">
					<i class='bx bx-log-out' ></i></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/admin-profile.jpeg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>My Store</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">My Store</a>
						</li>
					</ul>
				</div>

				<div class="table-data">
					<div class="order">
                        <div class="head">
							<h3>Add Product</h3>
						</div>
						<form action="{{ route('products.store') }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="product-form">
                                <label for="product">Name</label>
                                <input type="text" name="name" id="name">
                            </div>
                            <!-- <div class="product-form">
                                <label for="img">Image</label>
                                <input type="url" name="img" id="img">
                            </div> -->
                            <div class="product-form">
                                <label for="qty">Quantity</label>
                                <input type="number" name="qty" id="qty">
                            </div>
                            <div class="product-form">
                                <label for="perPrice">Price</label>
                                <input type="number" name="price" id="price">
                            </div>
                            <div class="product-form">
                                <label for="cat">Category</label>
                                <input type="text" name="cat" id="cat">
                            </div>
                            <div class="product-form">
                                <label for="pic">Picture Link</label>
                                <input type="text" name="pic" id="pic">
                            </div>
                    
                            <div class="form_action--button">
                                <input type="submit" class="submit" value="Submit">
                                <input type="button" class="back" value="Back" onclick="window.location.href='{{ route('products.index') }}'">
                            </div>
                        </form>
					</div>
				</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script-admin.js"></script>
</body>
</html>



