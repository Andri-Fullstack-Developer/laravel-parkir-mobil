<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Linl Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('back/login.css') }}" />

    <title>Login Admin Panel</title>
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="{{ asset('back/iconfoto.png') }}" alt="" />
        </div>
        <div class="text-center mt-4 name">ADMIN PANEL</div>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('admin.login') }}" novalidate class="p-3 mt-3">
            @csrf
            <div>
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input class="@error('email') is-invalid @enderror" type="email" name="email" id="email"
                        placeholder="Your Email" value="{{ old('email') }}" />
                    @error('email')
                        <span class="invalid-feedback text-info"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Your Password" />
                <div class="@error('password') is-invalid @enderror"></div>
                @error('password')
                    <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button title="submit" class="btn mt-3">{{ __('Login') }}</button>
        </form>
    </div>
</body>

</html>
