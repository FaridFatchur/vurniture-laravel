<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	
    <!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">

	<title>Dashboard</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">vurniture</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-home'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="{{ asset('dashboard/admin/products') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Products</span>
				</a>
			</li>
			<li>
				<a href="{{ asset('dashboard/admin/analitycs') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="{{ asset('dashboard/admin/message') }}">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Messages</span>
				</a>
			</li>
			<li>
				<a href="{{ asset('dashboard/admin/team') }}">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="{{ asset('dashboard/admin/settings') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="{{ asset('home') }}" class="logout">
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
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label> -->
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">4</span>
			</a>
			<a href="{{ asset('dashboard/admin/settings') }}" class="profile">
				<img src="{{ asset('img/profile-admin.jpeg') }}">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Products</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Products</a>
						</li>
					</ul>
				</div>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Product Form</h3>
							<i class='bx bx-search' ></i>
							<i class='bx bx-filter' ></i>
						</div>
						<table>
							<tr>
								<td>
									<form autocomplete="off" onsubmit="onFormSubmit()">
										<div class="product-form">
											<label for="productCode">Code</label>
											<input type="text" name="productCode" id="productCode">
										</div>
										<div class="product-form">
											<label for="productName">Name</label>
											<input type="text" name="productName" id="productName">
										</div>
										<div class="product-form">
											<label for="productQty">Quantity</label>
											<input type="number" name="productQty" id="productQty">
										</div>
										<div class="product-form">
											<label for="productPrice">Price</label>
											<input type="number" name="productPrice" id="productPrice">
										</div>
                                        <div class="product-form">
											<label for="productDesc">Description</label>
											<input type="text" name="productDesc" id="productDesc">
										</div>
										<div class="form_action--button">
											<input type="submit" class="submit" value="Save">
											<input type="reset" class="reset" value="Reset">
										</div>
									</form>
								</td>
							</tr>
						</table>
					</div>
				</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="{{ asset('js/dashboard/admin/script.js') }}"></script>
</body>
</html>