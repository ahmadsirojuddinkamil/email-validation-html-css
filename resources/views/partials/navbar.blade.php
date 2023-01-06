<!-- Header Section Begin -->
<header class="header">

    <div class="header__top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>

                            <li>Free Shipping for all Order of $150</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">

                        <div class="header__top__right__social">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://id.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                        </div>

                        <div class="header__top__right__language">
                            <img src="{{ url('img/language.png') }}" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>

                            <ul>
                                <li><a href="#">English</a></li>
                            </ul>

                        </div>


                        @auth
                            <ul class="navbar-nav ms-auto header__top__right__auth">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Welcome back, {{ auth()->user()->name }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/dashboard"><i
                                                    class="bi bi-layout-text-window"></i> My
                                                Dashboard</a>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">
                                                <i class="bi bi-box-arrow-right"></i> Logout
                                            </button>
                                        </form>
                                    </ul>
                                </li>
                            @else
                                <div class="header__top__right__auth">
                                    <a href="/login">
                                        <i class="fa fa-user"></i>
                                        Login
                                    </a>
                                </div>

                            </ul>
                        @endauth




                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="{{ url('img/logo.png') }}" alt=""></a>
                </div>
            </div>

            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>

                        <li class="{{ $title === 'Home' ? 'active' : '' }}">
                            <a href="/">Home</a>
                        </li>

                        <li class="{{ $title === 'Contact' ? 'active' : '' }}">
                            <a href="/contact" target="_blank">Contact</a>
                        </li>

                    </ul>
                </nav>
            </div>

            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>

                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>

        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>

    </div>

</header>
<!-- Header Section End -->
