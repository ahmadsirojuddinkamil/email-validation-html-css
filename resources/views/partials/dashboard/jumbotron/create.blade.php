<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Jumbotron</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/jumbotron" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <label for="judulJumbotron" class="form-label">judul Jumbotron</label>

                <input type="judulJumbotron" class="form-control  @error('judulJumbotron') is-invalid @enderror"
                    value="{{ old('judulJumbotron') }}" id="judulJumbotron" aria-describedby="emailHelp"
                    name="judulJumbotron">
                @error('judulJumbotron')
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
                <label for="imageJumbotron" class="form-label">Image Jumbotron</label>

                <img class="img-preview img-fluid mb-3 col-sm-5">

                <input class="form-control @error('imageJumbotron') is-invalid @enderror" type="file"
                    id="imageJumbotron" name="imageJumbotron" onchange="previewImage()">
                @error('imageJumbotron')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="judulUtama" class="form-label">judul Utama</label>

                <input type="judulUtama" class="form-control  @error('judulUtama') is-invalid @enderror"
                    value="{{ old('judulUtama') }}" id="judulUtama" aria-describedby="emailHelp" name="judulUtama">
                @error('judulUtama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="organic" class="form-label">organic</label>

                <input type="organic" class="form-control  @error('organic') is-invalid @enderror"
                    value="{{ old('organic') }}" id="organic" aria-describedby="emailHelp" name="organic">
                @error('organic')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi max : 40 kata</label>

                <input id="deskripsi" type="hidden" name="deskripsi">
                <trix-editor input="deskripsi"></trix-editor>
            </div>

            <div class="mb-3">

                <label for="action" class="form-label">action</label>

                <input type="action" class="form-control  @error('action') is-invalid @enderror"
                    value="{{ old('action') }}" id="action" aria-describedby="emailHelp" name="action">
                @error('action')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <a href="/dashboard/jumbotron" class="btn btn-success mb-3 mt-3">
                <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My jumbotron
            </a>

            <button type="submit" class="btn btn-primary">Create jumbotron</button>
        </form>
    </div>

    <script>
        const judulJumbotron = document.querySelector('#judulJumbotron')
        const slug = document.querySelector('#slug')

        judulJumbotron.addEventListener('change', function() {
            fetch('/dashboard/jumbotron/checkSlug?judulJumbotron=' + judulJumbotron.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const imageJumbotron = document.querySelector('#imageJumbotron')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(imageJumbotron.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }

        feather.replace()
    </script>

</main>
