<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Categorie</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/categorie/{{ $categorieEdit->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="judulCategory" class="form-label">Judul Category</label>

                <input type="text" class="form-control  @error('judulCategory') is-invalid @enderror"
                    value="{{ old('judulCategory', $categorieEdit->judulCategory) }}" id="judulCategory"
                    aria-describedby="emailHelp" name="judulCategory">
                @error('judulCategory')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>

                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    aria-describedby="emailHelp" name="slug" value="{{ old('slug', $categorieEdit->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image Category</label>
                <input type="hidden" name="oldImage" value="{{ $categorieEdit->imageCategory }}">

                @if ($categorieEdit->imageCategory)
                    <img src="{{ asset('storage/' . $categorieEdit->imageCategory) }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif

                <input class="form-control @error('imageCategory') is-invalid @enderror" type="file"
                    id="imageCategory" name="imageCategory" onchange="previewImage()">
                @error('imageCategory')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <a href="/dashboard/categorie" class="btn btn-success mb-3 mt-3">
                <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Categorie
            </a>

            <button type="submit" class="btn btn-primary">Update Categorie</button>
        </form>
    </div>



    <script>
        const judulCategory = document.querySelector('#judulCategory')
        const slug = document.querySelector('#slug')

        judulCategory.addEventListener('change', function() {
            fetch('/dashboard/categorie/checkSlug?judulCategory=' + judulCategory.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const imageCategory = document.querySelector('#imageCategory')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(imageCategory.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }

        feather.replace()
    </script>

</main>
