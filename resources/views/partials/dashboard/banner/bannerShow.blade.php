<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">

                <h2 class="my-3">{{ $detail->title }}</h2>

                <img src="{{ url($detail->image) }}" alt="" class="img-fluid">

                <br><br>

                <a href="/dashboard/banner" class="btn btn-success mb-3">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Banner
                </a>

            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>

</main>
