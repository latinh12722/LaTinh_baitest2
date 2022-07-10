<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Coin - Buy & sell Crypto</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <nav class="nav-welcome navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-e1640592718566.png') }}" width="200px" height="64px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="ulnav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DEPOSIT-WITHDRAW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a id="btn-login" class="nav-link text-uppercase" href="{{route('login')}}">login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <div class="content">
            <h1>Download Shop Coin USA App</h1>
            <h5>Manage crypto assets at your fingertips</h5>
            <a href=""><img src="{{asset('img/nut.png')}}" width="278px" height="71px" alt=""></a>
            <p>For Androi</p>
        </div>
    </div>
    <footer class="footer_welcome">
        <p>Copyright 2022 © <span>Shop Coin USA</span></p>
    </footer>



    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>