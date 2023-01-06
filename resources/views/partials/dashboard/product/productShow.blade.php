<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">

                <h2 class="my-3">{{ $detail->judulProduct }}</h2>

                <img src="{{ url($detail->imageProduct) }}" alt="" class="img-fluid">

                <article class="my-3 fs-5" style="text-align: justify;">
                    {!! $detail->detail !!}
                </article>

                <br><br>

                <a href="/dashboard/product" class="btn btn-success mb-3">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Product
                </a>

            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>

</main>
