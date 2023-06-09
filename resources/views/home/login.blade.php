<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Vurniture</title>
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- box icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body class="login-body">
    <!-- login section -->
    <div class="wrapper">
        <div class="login-form">
            <form action="{{route('login')}}" method="post">
                @csrf
                <h1>Login</h1>

                <div class="input-data">
                    <input type="text" name="usn" id="usn" placeholder="username" autofocus required>
                    <label for="usn">Username</label>
                </div>

                <div class="input-data">
                    <input type="password" name="password" id="password" placeholder="password" required>
                    <label for="">Password</label>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <button type="submit" class="login-btn">Login</button>
                
                <div class="to-sign-up">
                    <p>Don't have an account? <a href="/signup" class="sign-up-link">Sign Up</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>