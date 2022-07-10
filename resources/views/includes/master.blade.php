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
    <nav class="navbar_header">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{url('')}}"><img src="{{ asset('img/logo.b1a090f.png') }}" alt="" width="156px" height="64px"></a>
        </div>
    </nav>
    @if (session('status'))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{session('status')}}
    </div>
    @endif



    <div class="content">
        @yield('content')
    </div>
    <footer>
        <div class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col"><a class="text-decoration-none" href="">Privacy Notice</a></div>
                    <div class="col"><a class="text-decoration-none" href="">Cookies Notice</a></div>
                    <div class="col"><a class="text-decoration-none" href="">Cookies Settings</a></div>
                </div>
            </div>
        </div>
        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6>Products</h6>
                        <p><a href="">Blockchain Explorer</a></p>
                        <p><a href="">Crypto API</a></p>
                        <p><a href="">Crypto Indices</a></p>
                        <p><a href="">Interest</a></p>
                        <p><a href="">Jobs Board</a></p>
                        <p><a href="">Sitemap</a></p>
                    </div>
                    <div class="col">
                        <h6>Company</h6>
                        <p><a href="">About us</a></p>
                        <p><a href="">Terms of use</a></p>
                        <p><a href="">Privacy Policy</a></p>
                        <p><a href="">Disclaimer</a></p>
                        <p><a href="">Methodology</a></p>
                        <p><a href="">CareersWe’re hiring!</a></p>
                    </div>
                    <div class="col">
                        <h6>Support</h6>
                        <p><a href="">Request Form</a></p>
                        <p><a href="">Contact Support</a></p>
                        <p><a href="">FAQ</a></p>
                        <p><a href="">Glossary</a></p>
                    </div>
                    <div class="col">
                        <h5>Socials</h5>
                        <p><a href="">Facebook</a></p>
                        <p><a href="">Twitter</a></p>
                        <p><a href="">Telegram</a></p>
                        <p><a href="">Instagram</a></p>
                        <p><a href="">Interactive Chat</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer3">
            Copyright © 2022 <span><a href="">Shopcoin.com</a></span>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
    <link type="text/css" rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}" />
</body>

</html>