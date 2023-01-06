<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">

                <h2 class="my-3">{{ $detail->judulJumbotron }}</h2>

                <img src="{{ url($detail->imageJumbotron) }}" alt="" class="img-fluid">

                <h4 class="my-3">Kontent</h4>
                <div style="border: 1px solid black; border-radius: 5px; padding: 10px">

                    <h6 class="my-3">{{ $detail->judulUtama }}</h6>
                    <h6 class="my-3">{{ $detail->organic }}</h6>
                    <h6 class="my-3">{{ $detail->deskripsi }}</h6>
                    <h6 class="my-3">{{ $detail->action }}</h6>

                </div>

                <br><br>

                <a href="/dashboard/jumbotron" class="btn btn-success mb-3">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Jumbotron
                </a>

            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>

</main>
