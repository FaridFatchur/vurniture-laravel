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
			<li class="active">
				<a href="dashboardUser">
					<i class='bx bxs-user' ></i>
					<span class="text">My Profile</span>
				</a>
			</li>
			<li>
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
				<a href="settings.html">
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
					<h1>My Profile</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">My Profile</a>
						</li>
					</ul>
                    <div class="card-con">
                        <div class="card">
                            <div class="con-in">
                                <div class="container-img">
                                    <img src="img/ProfilUser.jpeg">
                                </div>
                                <div class="but-desc">
                                    <button id="btn" onclick="editPhoto()">Change Profile</button>
                                    <p>Maximum size: 10 mb.</p>
                                    <p>Allowed type of file: .JPG .JPEG .PNG</p>
                                </div>
                            </div>
                        </div>
                        <div class="pers-inf">
                            <h3>Personal Information</h3>
                            <div class="pers-desc">
                                <div class="full-sym">
                                    <span class="sym">Name</span>
                                    <span class="sym-desc" id="name">{{$dataUser['fullname']}}</span>
                                </div>
                                <div class="full-sym">
                                    <span class="sym">Date of Birth</span>
                                    <span class="sym-desc" id="dob">{{$dataUser['dateOfBirth']}}</span>
                                </div>
                                <div class="full-sym">
									<span class="sym">Gender</span>
									<span class="sym-desc" id="gender">{{$dataUser['gender']}}</span>
								  </div>
								  <div class="full-sym">
									<span class="sym">Email</span>
									<span class="sym-desc" id="email">{{$dataUser['email']}}</span>
								  </div>
								  <div class="full-sym">
									<span class="sym">Phone Number</span>
									<span class="sym-desc" id="phone">{{$dataUser['phoneNum']}}</span>
								  </div>
								  <div class="full-sym">
									<span class="sym">Address</span>
									<span class="sym-desc" id="address">{{$dataUser['address']}}</span>
								  </div>
								  <div class="full-sym">
									<span class="sym">Password</span>
									<span class="sym-desc" id="pass">********</span>
								  </div>
                            </div>
                        </div>
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