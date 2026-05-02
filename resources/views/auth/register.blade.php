<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Form</title>
    <link rel="stylesheet" href="style/login-register.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <i class="fa-solid fa-laptop text-3xl text-blue-600"></i>
        </div>
        <h2>Register Now</h2>

        <form method="POST" action="/register">
            @csrf
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="txtname" name="name" placeholder="Enter your name" required />
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="txtemail" name="email" placeholder="Enter your email" required />
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="txtpass" name="password" placeholder="Enter your password" required />
            </div>

            <div class="input-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm password" required />
            </div>

            <div class="options">
                <label class="remember-me">
                    <input type="checkbox" /> I accept all policy and privacy.
                </label>
            </div>

            <button type="submit">Sign Up</button>
        </form>

        <div class="signup-link">
            I have already an account. <a href="{{Route('login')}}">Sign In</a>
        </div>
    </div>
</body>

</html>