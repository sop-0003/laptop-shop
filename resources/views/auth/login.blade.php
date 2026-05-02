<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('style/login-register.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <div class="login-container">
        <div class="logo"><i class="fa-solid fa-laptop text-3xl text-blue-600"></i></div>
        <h2>Welcome Back</h2>

        <form method="POST" action="/login">
          @csrf
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="options">
                <label class="remember-me">
                    <input type="checkbox"> Remember me
                </label>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>

            <button type="submit">Sign In</button>
        </form>

        <div class="signup-link">
            Don't have an account? <a href="{{Route('register')}}">Sign Up</a>
        </div>
    </div>

</body>

</html>