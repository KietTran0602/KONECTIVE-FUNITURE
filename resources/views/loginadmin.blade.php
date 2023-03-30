<?php $stylesheet_url = "../css/style.css";?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('CSS/loginadmin.css') }}">
        <script type="text/javascript" href="{{ asset('JS/loginadmin.js') }}" defer></script>

    </head>
    <body>
        <section>
            <form>
                <h2>Login</h2>
                <div>
                    <input type="text" name="" required="">
                    <i class="fa fa-user"></i>
                    <label>Username</label>
                </div>
                <div>
                    <input type="password" name="" required="">
                    <i class="fa fa-key"></i>
                    <label>Password</label>
                </div>
                <a href="#">Submit</a>
            </form>
        </section>
    </body>
</html>
