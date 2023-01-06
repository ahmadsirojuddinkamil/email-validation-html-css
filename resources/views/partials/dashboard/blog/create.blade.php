<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New blog</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/blog" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <label for="nameBlog" class="form-label">Judul Blog</label>

                <input type="nameBlog" class="form-control  @error('nameBlog') is-invalid @enderror"
                    value="{{ old('nameBlog') }}" id="nameBlog" aria-describedby="emailHelp" name="nameBlog">
                @error('nameBlog')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>

                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    aria-describedby="emailHelp" name="slug" value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="imageBlog" class="form-label">Image Blog</label>

                <img class="img-preview img-fluid mb-3 col-sm-5">

                <input class="form-control @error('imageBlog') is-invalid @enderror" type="file" id="imageBlog"
                    name="imageBlog" onchange="previewImage()">
                @error('imageBlog')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="comment" class="form-label">Comment</label>

                <input type="number" class="form-control  @error('comment') is-invalid @enderror"
                    value="{{ old('comment') }}" id="comment" aria-describedby="emailHelp" name="comment">
                @error('comment')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi max : 2500 kata</label>

                <input id="deskripsi" type="hidden" name="deskripsi">
                <trix-editor input="deskripsi"></trix-editor>
            </div>

            <div class="mb-3">

                <label for="date" class="form-label">Tanggal</label>

                <input type="text" class="form-control  @error('date') is-invalid @enderror"
                    value="{{ old('date') }}" id="date" aria-describedby="emailHelp" name="date">
                @error('date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <a href="/dashboard/blog" class="btn btn-success mb-3 mt-3">
                <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My blog
            </a>

            <button type="submit" class="btn btn-primary">Create blog</button>
        </form>
    </div>

    <script>
        const nameBlog = document.querySelector('#nameBlog')
        const slug = document.querySelector('#slug')

        nameBlog.addEventListener('change', function() {
            fetch('/dashboard/blog/checkSlug?nameBlog=' + nameBlog.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const imageBlog = document.querySelector('#imageBlog')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(imageBlog.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }

        feather.replace()
    </script>

</main>
