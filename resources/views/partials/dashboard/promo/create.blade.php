<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New promo</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/promo" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <label for="namePromo" class="form-label">Name Promo</label>

                <input type="namePromo" class="form-control  @error('namePromo') is-invalid @enderror"
                    value="{{ old('namePromo') }}" id="namePromo" aria-describedby="emailHelp" name="namePromo">
                @error('namePromo')
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
                <label for="imagePromo" class="form-label">Image Promo</label>

                <img class="img-preview img-fluid mb-3 col-sm-5">

                <input class="form-control @error('imagePromo') is-invalid @enderror" type="file" id="imagePromo"
                    name="imagePromo" onchange="previewImage()">
                @error('imagePromo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>

                <select class="form-select" name="categorie_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->judulCategory }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">

                <label for="pricePromo" class="form-label">Price Promo</label>

                <input type="number" class="form-control  @error('pricePromo') is-invalid @enderror"
                    value="{{ old('pricePromo') }}" id="pricePromo" aria-describedby="emailHelp" name="pricePromo">
                @error('pricePromo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <a href="/dashboard/promo" class="btn btn-success mb-3 mt-3">
                <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My promo
            </a>

            <button type="submit" class="btn btn-primary">Create promo</button>
        </form>
    </div>

    <script>
        const namePromo = document.querySelector('#namePromo')
        const slug = document.querySelector('#slug')

        namePromo.addEventListener('change', function() {
            fetch('/dashboard/promo/checkSlug?namePromo=' + namePromo.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const imagePromo = document.querySelector('#imagePromo')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(imagePromo.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }

        feather.replace()
    </script>

</main>
