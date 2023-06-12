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

<body class="login-body">
    <!-- login section -->
    <div class="wrapper">
        <div class="login-form">
            <!-- <h1>Login</h1> -->
            <form action="/vurniture/dashboard" method="POST">
            <h1>Login</h1>
                @csrf
                <div class="input-data">
                    <input type="email" name="email" value="{{ Session::get('email') }}">
                    <label for="email">Email</label>
                </div>

                <div class="input-data">
                    <input type="password" name="password">
                    <label for="password">Password</label>
                </div>

                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>

                <button type="submit" class="login-btn" name="submit">Login</button>
                
                <div class="to-sign-up">
                    <p>Don't have an account? <a href="/vurniture/signup" class="sign-up-link">Sign Up</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
