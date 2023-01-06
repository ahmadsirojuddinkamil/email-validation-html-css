<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">

                <h2 class="my-3">{{ $detail->judulCategory }}</h2>

                <img src="{{ url($detail->imageCategory) }}" alt="" class="img-fluid">

                <br><br>

                <a href="/dashboard/categorie" class="btn btn-success mb-3">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Category
                </a>

            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>

</main>
