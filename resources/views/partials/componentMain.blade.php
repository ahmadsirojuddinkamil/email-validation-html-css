<!-- Categories Section Begin -->
<section class="categories">

    <div class="container">

        <div class="section-title">
            <h2>Category</h2>
        </div>

        <div class="row">

            <div class="categories__slider owl-carousel">

                @foreach ($daftarCategory as $listCategory)
                    <div class="col-lg-3">

                        <div class="categories__item set-bg" data-setbg="{{ $listCategory['imageCategory'] }}">

                            <h5>
                                <a href="/category/{{ $listCategory->slug }}" target="_blank">
                                    {{ $listCategory['judulCategory'] }}
                                </a>
                            </h5>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </div>

</section>
<!-- Categories Section End -->



<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>All Product</h2>
                </div>

                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul>
                </div>

            </div>
        </div>


        <div class="row featured__filter">
            @foreach ($featuredProduct as $bestProduk)
                <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $bestProduk['produkBox'] }}">
                    <div class="featured__item">

                        <div class="featured__item__pic set-bg" data-setbg="{{ $bestProduk['imageProduct'] }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>

                                <li><a href="/product/{{ $bestProduk->slug }}" target="_blank"><i
                                            class="fa fa-info"></i></a></li>

                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>

                        <div class="featured__item__text">
                            <h6>{{ $bestProduk['judulProduct'] }}</h6>
                            <h5>${{ $bestProduk['price'] }}</h5>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
<!-- Featured Section End -->



<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">

            @foreach ($bannerBegin as $newBanner)
                <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                    <div class="banner__pic">
                        <img src="{{ $newBanner['image'] }}" alt="">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Banner End -->



<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($FromTheBlog as $blog)
                <div class="col-lg-4 col-md-4 col-sm-6">

                    <div class="blog__item">

                        <div class="blog__item__pic">
                            <img src="{{ $blog['imageBlog'] }}" alt="">
                        </div>

                        <div class="blog__item__text">

                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{ $blog['date'] }}</li>
                                <li><i class="fa fa-comment-o"></i> {{ $blog['comment'] }}</li>
                            </ul>

                            <h5>
                                <a href="/blog/{{ $blog->slug }}" target="_blank">
                                    {{ $blog['nameBlog'] }}
                                </a>
                            </h5>

                            <p style="overflow:hidden; height:50px;">
                                {{ $blog['deskripsi'] }}
                            </p>
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- Blog Section End -->
