@extends('layouts.master')
@section('title')
    Sign in |
@endsection
@section('content')
<div class="container p-t-6rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="material-icons">email</span>
                                    </span>
                                </div>

                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" id="email" name="email" value="{{ old('email') }}" minlength="1" maxlength="255"  autocomplete="email" autofocus required>
                            </div>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="material-icons">
                                            vpn_key
                                        </span>
                                    </span>
                                </div>

                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" minlength="8" autocomplete="current-password"  autofocus required>

                                <div class="input-group-prepend cur-point" onclick="togglePassword(document.getElementById('password-visibility'), document.getElementById('password'))">
                                    <span class="input-group-text" id="inputGroupPrependEmail">
                                        <span class="material-icons" id="password-visibility">visibility_off</span>
                                    </span>
                                </div>
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check cur-point">
                                <input type="checkbox" class="form-check-input cur-point" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label cur-point" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('internal-js')
    <script src="{{ asset('assets/js/form-validation.js') }}" type='text/javascript'></script>
@endsection
