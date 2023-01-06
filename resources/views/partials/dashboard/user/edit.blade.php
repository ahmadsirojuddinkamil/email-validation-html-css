<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profile</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/user/{{ $userEdit->id }}">
            @method('put')
            @csrf

            <div class="mb-3">

                <label for="name" class="form-label">Name</label>

                <input type="name" class="form-control  @error('name') is-invalid @enderror"
                    value="{{ old('name', $userEdit->name) }}" id="name" aria-describedby="emailHelp"
                    name="name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="username" class="form-label">Username</label>

                <input type="username" class="form-control  @error('username') is-invalid @enderror"
                    value="{{ old('username', $userEdit->username) }}" id="username" aria-describedby="emailHelp"
                    name="username">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="slug" class="form-label">slug</label>

                <input type="slug" class="form-control  @error('slug') is-invalid @enderror"
                    value="{{ old('slug', $userEdit->slug) }}" id="slug" aria-describedby="emailHelp"
                    name="slug">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="email" class="form-label">email</label>

                <input type="text" class="form-control  @error('email') is-invalid @enderror"
                    value="{{ old('email', $userEdit->email) }}" id="email" aria-describedby="emailHelp"
                    name="email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label for="password" class="form-label">password</label>

                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                    value="{{ old('password', $userEdit->password) }}" id="password" aria-describedby="emailHelp"
                    name="password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <a href="/dashboard/user" class="btn btn-success mb-3 mt-3">
                <span data-feather="arrow-left" class="align-text-bottom"></span> Back to My user
            </a>

            <button type="submit" class="btn btn-primary">Update user</button>
        </form>
    </div>

</main>
