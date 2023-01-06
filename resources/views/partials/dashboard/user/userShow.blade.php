<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">

                <h5 class="my-3">Name : {{ $detail->name }}</h5>
                <h5 class="my-3">Username : {{ $detail->username }}</h5>
                <h5 class="my-3">Email : {{ $detail->email }}</h5>

                <br><br>

                <a href="/dashboard/user" class="btn btn-success mb-3">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Profile
                </a>

            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>

</main>
