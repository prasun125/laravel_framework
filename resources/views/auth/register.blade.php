@extends('layouts.master')
@section('title')
    Sign up |
@endsection
@section('content')
<div class="container p-t-6rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">{{ __('Username') }}</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="material-icons">
                                            alternate_email
                                        </span>
                                    </span>
                                </div>

                                <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" id="username" name="username" value="{{ old('username') }}" minlength="1" maxlength="255" autocomplete="username" autofocus required>
                            </div>

                            @error('username')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="forename">{{ __('Forename') }}</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="material-icons">
                                                    person
                                                </span>
                                            </span>
                                        </div>

                                        <input type="text" class="form-control @error('forename') is-invalid @enderror" placeholder="Forename" id="forename" name="forename" value="{{ old('forename') }}" minlength="1" maxlength="255" autocomplete="forename" autofocus required>
                                    </div>

                                    @error('forename')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="surname">{{ __('Surname') }}</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="material-icons">
                                                    person
                                                </span>
                                            </span>
                                        </div>

                                        <input type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="Surname" id="surname" name="surname" value="{{ old('surname') }}" minlength="1" maxlength="255" autocomplete="surname" autofocus>
                                    </div>

                                    @error('surname')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="material-icons">email</span>
                                    </span>
                                </div>

                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" id="email" name="email" value="{{ old('email') }}" minlength="1" maxlength="255" autocomplete="email" autofocus required aria-describedby="emailHelp">
                            </div>

                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

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

                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" minlength="8" autocomplete="new-password" autofocus required aria-describedby="passwordHelp">

                                <div class="input-group-prepend cur-point" onclick="togglePassword(document.getElementById('password-visibility'), document.getElementById('password'))">
                                    <span class="input-group-text">
                                        <span class="material-icons" id="password-visibility">visibility_off</span>
                                    </span>
                                </div>
                            </div>

                            <small id="passwordHelp" class="form-text text-muted">
                                Your password must be 8-20 characters long, contain letters, numbers, special characters and must not contain spaces or emoji.
                            </small>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{--<div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>--}}

                        <div class="form-group">
                            <div class="form-check cur-point">
                                <input type="checkbox" class="form-check-input cur-point @error('confirm') is-invalid @enderror" id="confirm" name="confirm" {{ old('confirm') ? 'checked' : '' }} autofocus required>

                                <label class="form-check-label cur-point" for="confirm">
                                    {{ __('Agree to terms and conditions') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-row justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">
                                {{ __('Register') }}
                            </button>
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
