<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Banner</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/banner/{{ $bannerEdit->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>

                <input type="text" class="form-control  @error('title') is-invalid @enderror"
                    value="{{ old('title', $bannerEdit->title) }}" id="title" aria-describedby="emailHelp"
                    name="title">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>

                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    aria-describedby="emailHelp" name="slug" value="{{ old('slug', $bannerEdit->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $bannerEdit->image }}">

                @if ($bannerEdit->image)
                    <img src="{{ asset('storage/' . $bannerEdit->image) }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif

                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- <div class="mb-3">
                <label for="bannerNews" class="form-label">Banner News</label>

                <input type="text" class="form-control  @error('bannerNews') is-invalid @enderror"
                    value="{{ old('bannerNews', $bannerEdit->bannerNews) }}" id="bannerNews"
                    aria-describedby="emailHelp" name="bannerNews">
                @error('bannerNews')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div> --}}

            <a href="/dashboard/banner" class="btn btn-success mb-3 mt-3">
                <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Banner
            </a>

            <button type="submit" class="btn btn-primary">Update Banner</button>
        </form>
    </div>



    <script>
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')

        title.addEventListener('change', function() {
            fetch('/dashboard/banner/checkSlug?title=' + title.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }

        feather.replace()
    </script>

</main>
