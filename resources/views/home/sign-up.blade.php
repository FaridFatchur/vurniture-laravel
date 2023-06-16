<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
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
    <div class="wrapper-su">
        <div class="sign-up-form">
            <form id="form" action="{{ route('users.store') }}" method="POST" autocomplete="off">
                <h1>Sign Up</h1>
                    @csrf
                    <div class="input-data">
                        <input type="text" id="usn" name="usn" value="{{ old('usn')}}">
                        <label for="usn">Username</label>
                    </div>

                    <div class="input-data">
                        <input type="text" id="fullname" name="fullname" value="{{ old('fullname')}}">
                        <label for="fullname">Full Name</label>
                    </div>

                    <div class="input-data">
                        <input type="date" id="dateOfBirth" name="dateOfBirth" max="{{ old('dateOfBirth') ? old('dateOfBirth') : '' }}">
                        <label for="dateOfBirth">Date Of Birth</label>
                    </div>
                    
                    <script>
                        var today = new Date().toISOString().split('T')[0];
                        document.getElementById("dateOfBirth").max = today;
                    </script>                    

                    <div class="input-data">
                        <label class="gender" for="gender">Gender</label>
                        <select name="gender" id="gender">
                            <option value="Man" {{ old('gender') === 'Man' ? 'selected' : '' }}>Man</option>
                            <option value="Woman" {{ old('gender') === 'Woman' ? 'selected' : '' }}>Woman</option>
                        </select>
                    </div>

                    <div class="input-data">
                        <input type="email" id="email" name="email" value="{{ old('email')}}">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-data">
                        <input type="text" id="phoneNum" name="phoneNum" value="{{ old('phoneNum')}}">
                        <label for="phoneNum">Phone Number</label>
                    </div>

                    <div class="input-data">
                        <input type="text" id="address" name="address" value="{{ old('address')}}">
                        <label for="phoneNum">Address</label>
                    </div>

                    <div class="input-data">
                        <input type="password" id="password" name="password" value="{{ old('password')}}">
                        <label for="password">Password</label>
                        <span class="toggle-password" onclick="togglePasswordVisibility()"><i class="bx bx-show"></i></span>
                    </div>

                    <div class="input-data">
                        <input type="password" id="pass2" name="pass2" value="{{ old('pass2')}}">
                        <label for="pass2">Re-input Password</label>
                        <span class="toggle-password2" onclick="togglePasswordVisibility2()"><i class="bx bx-show"></i></span>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox"> I agree to the terms & conditions</label>
                    </div>

                    @if ($errors->any())
                        <div class="error-message">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                
                    <button type="submit" class="sign-up-btn">Sign Up</button>
                <div class="to-login">
                    <p>Already have an account? <a href="/login">Login</a>.</p>
                </div>
            </form>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var toggleButton = document.querySelector(".toggle-password");
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.innerHTML = '<i class="bx bx-hide"></i>';
            } else {
                passwordInput.type = "password";
                toggleButton.innerHTML = '<i class="bx bx-show"></i>';
            }
        }

        function togglePasswordVisibility2() {
            var passwordInput = document.getElementById("pass2");
            var toggleButton = document.querySelector(".toggle-password2");
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.innerHTML = '<i class="bx bx-hide"></i>';
            } else {
                passwordInput.type = "password";
                toggleButton.innerHTML = '<i class="bx bx-show"></i>';
            }
        }


    </script>
</body>

{{-- <!-- custom js -->
<script src="{{ asset('js/script.js') }}"></script> --}}