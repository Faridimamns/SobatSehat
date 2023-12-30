{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('partials.loginPages.app')

@section('content')
    <div class="col-12 col-md-6">
        <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="mt-1 mb-1">
                        <h3>{{ __('Register') }}</h3>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row gy-3 gy-md-4 overflow-hidden">
                    <div class="col-12">
                        <label for="name" class="form-label">{{ __('Nama Lengkap') }}<span
                                class="text-danger">*</span></label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" name="name"
                            id="name" placeholder="name@example.com" required>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
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

                    <div class="col-12">
                        <label for="password-confirm" class="form-label">{{ __('Ulangi Password') }} <span
                                class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password-confirm" value="" required autocomplete="new-password">
                    </div>

                    <div class="col-3">
                        <div class="d-grid">
                            <button class="btn bsb-btn-l btn-warning" type="submit">{{ __('Register') }}</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
