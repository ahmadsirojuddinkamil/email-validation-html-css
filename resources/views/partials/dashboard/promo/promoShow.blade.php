<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">

                <h2 class="my-3">{{ $detail->namePromo }}</h2>

                <h4 class="my-3">$ {{ $detail->pricePromo }}</h4>

                <img src="{{ url($detail->imagePromo) }}" alt="" class="img-fluid">

                <br><br>

                <a href="/dashboard/promo" class="btn btn-success mb-3">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Promo
                </a>

            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>

</main>
