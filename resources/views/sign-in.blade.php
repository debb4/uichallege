<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
    <title>Sign In</title>
</head>
<body>
    <div class="background">
        <div class="container-form">
            <div class="aside-left">
                <img src="{{ asset('img/bg_signin_signup2.png') }}" alt="">
            </div>
            <div class="aside-right">
                <form action="">
                    <div class="inside-form">
                        <div class="data-input">
                            <input type="text" placeholder="Username">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="btn-form">
                            <button class="btn-signin">Sign In</button>
                            <button class="btn-signup">Sign Up</button>
                        </div>
                        <a class="forget-password" href="">Forget Password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
