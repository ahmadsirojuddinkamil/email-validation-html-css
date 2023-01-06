<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Banner</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-9">

        <a href="/dashboard/banner/create" class="btn btn-primary mb-3">Create New Banner</a>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $oneBanners)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $oneBanners->title }}</td>
                        <td>
                            <a href="/dashboard/banner/{{ $oneBanners->slug }}" class="badge bg-info">
                                <span data-feather="file" class="align-text-bottom"></span>
                            </a>

                            <a href="/dashboard/banner/{{ $oneBanners->slug }}/edit" class="badge bg-warning">
                                <span data-feather="edit" class="align-text-bottom"></span>
                            </a>

                            <form action="/dashboard/banner/{{ $oneBanners->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    <span data-feather="trash-2" class="align-text-bottom"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script>
        feather.replace()
    </script>

</main>
