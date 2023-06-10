<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style-db.css">

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
				<a href="my-store.html">
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
							<h3>Product Lists</h3>
							<i class='bx bx-search' ></i>
							<i class='bx bx-filter' ></i>
						</div>
						@if (session('success'))
    						<div class="alert alert-success">{{ session('success') }}</div>
							@endif
						<div class="tambah-but">
							<button><a href="{{route('products.create')}}">tambah</a></button>
						</div>
						<table>
							<tr>
								<td>
									<td>
										<table class="list" id="storeList">
											<thead>
												<tr>
													<th>Code</th>
													<th>Name</th>
													<!-- <th>Image</th> -->
													<th>Quantity</th>
													<th>Price</th>
													<th>Category</th>
													<th>Picture</th>
													<th>Act</th>
												</tr>
												@foreach($dataProduct as $item)
												<tr>
													<td>{{$item['id']}}</td>
													<td>{{$item['name']}}</td>
													<td>{{$item['qty']}}</td>
													<td>{{$item['price']}}</td>
													<td>{{$item['cat']}}</td>
													<td>{{$item['pic']}}</td>
													<td><button><a href="{{route('products.edit', $item['id'])}}">edit</a></button>
													<form method="POST" action="{{route('products.destroy', $item['id'])}}">
														@csrf
														@method('delete')
														<button>Del</button></form>
													</td>
												</tr>
												@endforeach
											</thead>
											<tbody>
											</tbody>
										</table>
									</td>
								</td>
							</tr>
						</table>
					</div>
				</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script-admin.js"></script>
</body>
</html>