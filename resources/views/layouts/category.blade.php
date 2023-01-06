<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | {{ $title }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    @include('partials.linkCss')

</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    @include('partials.navbar')



    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">

                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                <li><a href="#">Fresh Berries</a></li>
                                <li><a href="#">Ocean Foods</a></li>
                                <li><a href="#">Butter & Eggs</a></li>
                                <li><a href="#">Fastfood</a></li>
                                <li><a href="#">Fresh Onion</a></li>
                                <li><a href="#">Papayaya & Crisps</a></li>
                                <li><a href="#">Oatmeal</a></li>
                            </ul>
                        </div>

                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Promo Products</h4>
                                <div class="latest-product__slider owl-carousel">

                                    {{-- slide depan --}}
                                    <div class="latest-prdouct__slider__item">

                                        @foreach ($onePromo as $promoProducts)
                                            <a href="#" class="latest-product__item">

                                                <div class="latest-product__item__pic">
                                                    <img src="{{ url($promoProducts['imagePromo']) }}" alt="">
                                                </div>

                                                <div class="latest-product__item__text">
                                                    <h6>{{ $promoProducts['namePromo'] }}</h6>
                                                    <span>{{ $promoProducts['pricePromo'] }}</span>
                                                </div>

                                            </a>
                                        @endforeach

                                    </div>



                                    {{-- slide belakang --}}
                                    <div class="latest-prdouct__slider__item">

                                        @foreach ($onePromo as $promoProducts)
                                            <a href="#" class="latest-product__item">

                                                <div class="latest-product__item__pic">
                                                    <img src="{{ url($promoProducts['imagePromo']) }}" alt="">
                                                </div>

                                                <div class="latest-product__item__text">
                                                    <h6>{{ $promoProducts['namePromo'] }}</h6>
                                                    <span>{{ $promoProducts['pricePromo'] }}</span>
                                                </div>

                                            </a>
                                        @endforeach

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-7">

                    <div class="section-title product__discount__title">
                        <h2>{{ $title }}</h2>
                    </div>

                    {{-- LIST PRODUCT  --}}
                    <div class="row">

                        @foreach ($oneCategory as $categoryOne)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">

                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ url($categoryOne['imageProduct']) }}">
                                    </div>

                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                        <li>
                                            <a href="/product/{{ $categoryOne->slug }}" target="_blank">
                                                <i class="fa fa-info"></i>
                                            </a>
                                        </li>

                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>

                                </div>

                                <div class="product__item__text">

                                    <h6>
                                        <a href="#">
                                            {{ $categoryOne['judulProduct'] }}
                                        </a>
                                    </h6>

                                    <h5>${{ $categoryOne['price'] }}</h5>

                                </div>

                            </div>
                        @endforeach

                    </div>
                    {{-- END LIST PRODUCT  --}}

                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->



    @include('partials.footer')

    <!-- Js Plugins -->
    @include('partials.linkJs')

</body>

</html>
