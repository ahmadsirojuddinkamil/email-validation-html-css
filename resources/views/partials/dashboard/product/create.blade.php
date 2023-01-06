<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Product</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/product" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">

                <label for="judulProduct" class="form-label">Judul Product</label>

                <input type="judulProduct" class="form-control  @error('judulProduct') is-invalid @enderror"
                    value="{{ old('judulProduct') }}" id="judulProduct" aria-describedby="emailHelp"
                    name="judulProduct">
                @error('judulProduct')
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
                <label for="imageProduct" class="form-label">Image Product</label>

                <img class="img-preview img-fluid mb-3 col-sm-5">

                <input class="form-control @error('imageProduct') is-invalid @enderror" type="file" id="imageProduct"
                    name="imageProduct" onchange="previewImage()">
                @error('imageProduct')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="price" class="form-label">Price</label>

                <input type="number" class="form-control  @error('price') is-invalid @enderror"
                    value="{{ old('price') }}" id="price" aria-describedby="emailHelp" name="price">
                @error('price')
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
                <label for="produkBox" class="form-label">Produk Box</label>

                <select class="form-select" name="produkBox">
                    {{-- <option value="Oranges">Oranges</option>
                    <option value="Fresh Meat">Fresh Meat</option>
                    <option value="Vegetables">Vegetables</option>
                    <option value="Fastfood">Fastfood</option> --}}

                    @foreach ($boxList as $list)
                        <option value="{{ $list->id }}">{{ $list->produkBox }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi max : 255 kata</label>

                <input id="deskripsi" type="hidden" name="deskripsi">
                <trix-editor input="deskripsi"></trix-editor>
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Detail max : 2500 kata</label>

                <input id="detail" type="hidden" name="detail">
                <trix-editor input="detail"></trix-editor>
            </div>

            <a href="/dashboard/product" class="btn btn-success mb-3 mt-3">
                <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My Product
            </a>

            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>

    <script>
        const judulProduct = document.querySelector('#judulProduct')
        const slug = document.querySelector('#slug')

        judulProduct.addEventListener('change', function() {
            fetch('/dashboard/product/checkSlug?judulProduct=' + judulProduct.value)
                .then((response) => response.json())
                .then((data) => slug.value = data.slug);
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const imageProduct = document.querySelector('#imageProduct')
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.style.display = 'block'

            const oFReader = new FileReader()
            oFReader.readAsDataURL(imageProduct.files[0])

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }

        feather.replace()
    </script>

</main>
