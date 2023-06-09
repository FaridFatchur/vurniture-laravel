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

<!-- sign up section -->
<body class="sign-up-body">
    <div class="wrapper">
        <div class="sign-up-form">
            <form id="form" action="{{ route('users.store') }}" method="POST" autocomplete="off">
                <h1>Sign Up</h1>
                    @csrf
                    <div class="input-data">
                        <input type="text" id="usn" name="usn">
                        <label for="usn">Username</label>
                    </div>

                    <div class="input-data">
                        <input type="text" id="fullname" name="fullname">
                        <label for="fullname">Full Name</label>
                    </div>

                    <div class="input-data">
                        <input type="date" id="dateOfBirth" name="dateOfBirth">
                        <label for="dateOfBirth">Date Of Birth</label>
                    </div>

                    <div class="input-data">
                        <label for="gender">Gender</label>
                        <select name="gender" id="">
                            <option value="Man">Man</option>
                            <option value="Women">Woman</option>
                        </select>
                    </div>

                    <div class="input-data">
                        <input type="email" id="email" name="email">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-data">
                        <input type="text" id="phoneNum" name="phoneNum">
                        <label for="phoneNum">Phone Number</label>
                    </div>

                    <div class="input-data">
                        <input type="password" id="pass" name="password">
                        <label for="password">Password</label>
                    </div>

                    <div class="input-data">
                        <input type="password" id="pass2" name="pass2">
                        <label for="pass2">Re-input Password</label>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox"> I agree to the terms & conditions</label>
                    </div>
                
                    <button type="submit" class="sign-up-btn">Sign Up</button>
                <div class="to-login">
                    <p>Already have an account? <a href="/login">Login</a>.</p>
                </div>
            </form>
        </div>
    </div>
</body>

{{-- <!-- custom js -->
<script src="{{ asset('js/script.js') }}"></script> --}}