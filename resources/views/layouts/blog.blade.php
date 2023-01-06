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



    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">

            <div class="col-lg-8 col-md-7 order-md-1 order-1" style="margin-top: -50px">
                <div class="blog__details__text">

                    <h3>{{ $title }}</h3>

                    <img src="{{ url($oneBlog['imageBlog']) }}" class="img-fluid" width="750">

                    <p>{{ $oneBlog->deskripsi }}</p>

                </div>

                <div class="blog__details__content">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="blog__details__author">

                                <div class="blog__details__author__pic">
                                    <img src="{{ url($oneBlog['imageBlog']) }}" alt="">
                                </div>

                                <div class="blog__details__author__text">
                                    <h6>{{ $oneBlog->Penjual->name }}</h6>

                                    <span>{{ $oneBlog['created_at'] }}</span>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog__details__widget">

                                <ul class="mt-4">
                                    <li><span>Social Media:</span></li>
                                </ul>

                                <div class="blog__details__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Blog Details Section End -->



    @include('partials.footer')

    <!-- Js Plugins -->
    @include('partials.linkJs')



</body>

</html>
