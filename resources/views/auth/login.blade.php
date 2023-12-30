@extends('partials.loginPages.app')

@section('content')
    <div class="col-12 col-md-6">
        <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="mt-3 mb-5">
                        <h3>{{ __('Login') }}</h3>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row gy-3 gy-md-4 overflow-hidden">
                    <div class="col-12">
                        <label for="email" class="form-label">{{ __('Email Address') }}<span
                                class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="name@example.com" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">{{ __('Password') }} <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            id="password" value="" required>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-3">
                        <div class="d-grid">
                            <button class="btn bsb-btn-l btn-warning" type="submit">{{ __('Login') }}</button>
                        </div>

                    </div>
                    <div class="col-9">
                        <div class="text-end">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="link-secondary text-decoration-none text-primary">{{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <p class="">Belum Memiliki Akun? 
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-danger text-decoration-none">{{ __('Register!') }}</a>
                                @endif
                            </p>
                           
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
