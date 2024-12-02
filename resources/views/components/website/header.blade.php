@props([

    'image1',
])
<style>
    .login {
        color:white;
        margin-top: 10px;
        margin-right: 90px;
    }

    .register{
        color:white;
        padding-right: 80px;
        margin-top: 20px;
    }
</style>



    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{ route('acceuil') }}"><h1 style="color: black">LORYANA</h1></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Boutique</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Collection fille</li>
                                        <li><a href="#">Collection de 0-5</a></li>
                                        <li><a href="#">Collection de 5-10</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Collection garcon</li>
                                        <li><a href="#">Collection de 0-5</a></li>
                                        <li><a href="#">Collection de 5-10</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Collection jouets</li>
                                        <li><a href="#">Collection de 0-5</a></li>
                                        <li><a href="#">Collection de 5-10</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="{{asset('img/product-img/'.$image1)}}" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('apropos') }}">A propos</a></li>
                            <li><a href="{{url('/login')}}">Login</a></li>
                            <li><a href="{{url('/register')}}">Register</a></li>

                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- User Login Info -->
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt="">
                        <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->
