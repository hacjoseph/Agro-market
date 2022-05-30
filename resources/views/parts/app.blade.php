<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from templates.hibootstrap.com/hilo/default/{{asset('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 22:04:24 GMT -->

<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-37ZEQPW08P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-37ZEQPW08P');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTZVXLZ');</script>
<!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <title>Agro market pour l'achat de produits agricoles bio naturels à lomé</title>

    <meta name="description" content="Agro market est un site de e-commerce pour les achats de produits agricoles naturels et bio à Lomé" />
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTZVXLZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <img src="assets/images/preloder-img.png" alt="Images">
            <h2>Hilo</h2>
        </div>
    </div>
</div>


<header class="top-header top-header-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="top-header-social">
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="top-header-right">
                    <div class="top-header-right-item">
                        <div class="language-list">
                            <select class="language-list-item">
                                <option>English</option>
                                <option>العربيّة</option>
                                <option>Deutsch</option>
                                <option>Português</option>
                                <option>简体中文</option>
                            </select>
                        </div>
                    </div>
                    <div class="top-header-right-item">
                        <ul class="top-header-list">
                            <li><a href="{{asset('my-account')}}">My Account</a></li>
                            <li><a href="{{asset('login')}}">Log In</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="navbar-area">

    <div class="mobile-nav">
        <a href="{{asset('/')}}" class="logo">
            <img src="assets/images/logos/logo-1.png" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{asset('/')}}">
                    <img src="assets/images/logos/logo-1.png" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{asset('/')}}" class="nav-link active">
                                Home
                                <i class='bx bx-chevron-down'></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{asset('about')}}" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Shop
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{asset('shop-detail')}}" class="nav-link">
                                                Shop Details
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{asset('customer-services')}}" class="nav-link">
                                                Customer Services
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{asset('cart')}}" class="nav-link">
                                                Cart
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{asset('checkout')}}" class="nav-link">
                                                Checkout
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="{{asset('my-account')}}" class="nav-link">
                                                My Account
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{asset('team')}}" class="nav-link">
                                        Team
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        User
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{asset('login')}}" class="nav-link">
                                                Log In
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{asset('register')}}" class="nav-link">
                                                Registration
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{asset('forget-password')}}" class="nav-link">
                                                Forget Password
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-condition.html" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="404.html" class="nav-link">
                                        404 page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Shop
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{asset('shop-grid')}}" class="nav-link">
                                        Shop Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{asset('shop-sidebar')}}" class="nav-link">
                                        Shop Full Width Sidebar
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('blog')}}" class="nav-link">
                                Blog
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{asset('blog')}}" class="nav-link">
                                        Blog Style Two
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('contact')}}" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="nav-right-side">
                        <ul class="nav-right-list">
                            <li><a href="#"><i class='bx bx-repost'></i></a></li>
                            <li><a href="#"><i class='bx bx-heart'></i></a></li>
                            <li class="cart-span">
                                <a href="{{asset('cart')}}"><i class='bx bx-cart'></i></a>
                                <span>1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="side-nav-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="circle-inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="side-nav-inner">
                    <div class="side-nav justify-content-center align-items-center">
                        <div class="side-nav-item">
                            <ul class="nav-right-list">
                                <li><a href="#"><i class='bx bx-repost'></i></a></li>
                                <li><a href="#"><i class='bx bx-heart'></i></a></li>
                                <li class="cart-span">
                                    <a href="#"><i class='bx bx-cart'></i></a>
                                    <span>1</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @extends('parts.header')
        @yield("contain")

    @extends("parts.footer")

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/jquery-ui.min.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/mixitup.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>
</html>