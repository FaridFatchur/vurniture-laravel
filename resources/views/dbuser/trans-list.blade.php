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
		<a href="/" class="brand">
			<span class="text">vurniture</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="/">
					<i class='bx bxs-home'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="dashboard">
					<i class='bx bxs-user' ></i>
					<span class="text">My Profile</span>
				</a>
			</li>
			<li class="active">
				<a href="trans-list">
					<i class='bx bxs-receipt' ></i>
					<span class="text">Transaction List</span>
				</a>
			</li>
			<li>
				<a href="inbox">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Inbox</span>
				</a>
			</li>
			<li>
				<a href="wish-list">
					<i class='bx bxs-bookmark-heart' ></i>
					<span class="text">Wish List</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="settings">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="{{ route('logout') }}" class="logout"
					onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
					<i class='bx bx-log-out' ></i>
					<span class="text">Logout</span>
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
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
				<img src="img/ProfilUser.jpeg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Transaction List</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Transaction List</a>
						</li>
					</ul>
                    <div class="card-tl">
                        <h3>Recently Ordered</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
									<th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
								<tr>
									<p class="tf-text">Transfer money to the bank account (BCA) <strong>08821XXXXX</strong> c/o <strong>Annisa I A</strong> according to your total order and send the proof of transfer to <a href="https://wa.me/6288234108675"><strong>here</strong></a>.</p>
								</tr>
								@foreach($orders as $order)
                                <tr>
                                    <th>{{ $order->date }}</th>
                                    <th>Rp{{ number_format($order->total) }}</th>
                                    <th>
										@if($order->status == 1)
										Unpaid
										@else
										Paid
										@endif
									</th>
									<th>
										<div class="form_action--button">
                                		<a href="{{ url('trans-list') }}/{{ $order->id }}">Check</a>
									</th>
                                </tr>
								@endforeach
                                <!-- <tr>
                                    <th>2023/02/12</th>
                                    <th>PDX0 Chair</th>
                                    <th>Rp. 259.000</th>
                                    <th>6</th>
                                    <th>Rp. 1.554.000</th>
                                    <th>Received</th>
                                </tr>
                                <tr>
                                    <th>2023/03/31</th>
                                    <th>O3O Sofa</th>
                                    <th>Rp. 2.900.000</th>
                                    <th>1</th>
                                    <th>Rp. 2.900.000</th>
                                    <th>Received</th>
                                </tr> -->
                            </tbody>
                        </table>                          
                    </div>
                </div>
            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="js/script-db.js"></script>
</body>
</html> 