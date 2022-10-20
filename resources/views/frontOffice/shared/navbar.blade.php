
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                        @if(Auth::user())
                        <p  style="display:inline-block;">Hello, {{ Auth::user()->getName() }}</p>


                        @else
                        <p>Welcome</p>
                        @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__links">
                            @if(!Auth::user())

                                <a href="{{ url('/login') }}">Sign in</a>
                                <a href="{{ url('/register') }}">Sign up</a>
                                @else


                        <!-- Authentication -->
                        <div style="display:inline-block;">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>

                        <img class="profile-image img-circle" style="border-radius: 50%; display:inline-block;"
                        src="{{url(Auth::user()->picture)}}" height="30",width="30"  alt="User picture" />

                        @endif

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <h4  class="text-capitalize" > HuntKingdom </h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li ><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/shop') }}">Shop</a></li>
                            <li><a href="{{ url('/events') }}">Events</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                                    <li><a href="{{ url('/shopping-cart') }}">Shopping Cart</a></li>
                                    <li><a href="{{ url('/checkout') }}">Check Out</a></li>
                                    <li><a href="{{ url('/blog-details') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/posts') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{url('frontOffice/img/icon/search.png')}}" alt=""></a>
                        <a href="#"><img src="{{url('frontOffice/img/icon/heart.png')}}" alt=""></a>
                        <a href="{{ url('show_cart') }}"><img src="{{url('frontOffice/img/icon/cart.png')}}" alt=""> <span>0</span></a>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
