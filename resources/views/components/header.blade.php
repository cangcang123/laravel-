 <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> ngothanhcang966@gmail.com</li>
                                <li>shop ban hang</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('site/img/language.png') }}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            @if(Auth::check())
                            <div class="header__top__right__auth">
                                <a href="{{route('home.logout')}}"></i>Thoát</a>
                            </div>
                            @else
                            <div class="header__top__right__auth">
                                <a href="{{route('home.login')}}"><i class="fa fa-user"></i>register</a>
                            </div>&emsp;
                            <div class="header__top__right__auth">
                                <a href="{{route('home.relogin')}}"></i>Login</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{route('home.index')}}"><img src="{{ asset('site/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                            <li><a href="">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="">Shop Details</a></li>
                                    <li><a href="{{route('cart.show')}}">Shoping Cart</a></li>
                                    <li><a href="{{route('cart.show')}}">Check Out</a></li>
                                    <li><a href="">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                           
                            <li><a href="{{route('cart.show')}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price"> @if(Auth::check()) Hello: <span>
                           
                            {{Auth::user()->name}}&ensp;&ensp;
                          
                            @endif
                        </span>
                       
                    </div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    