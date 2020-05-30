@extends('layouts.master')
@section('title')
    Reset Password |
@endsection
@section('content')
    <div class="container p-t-6rem">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrependEmail">
                                            <span class="material-icons">email</span>
                                        </span>
                                    </div>

                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" id="email" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" required autofocus aria-describedby="emailHelp">
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="password">{{ __('Password') }}</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrependPassword">
                                                    <span class="material-icons">
                                                        vpn_key
                                                    </span>
                                                </span>
                                            </div>

                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" autocomplete="new-password" required autofocus aria-describedby="passwordHelp" minlength="8">

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

                                    <div class="col">
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupPrependPassword">
                                                    <span class="material-icons">
                                                        vpn_key
                                                    </span>
                                                </span>
                                            </div>

                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Confirm Password" id="password-confirm" name="password_confirmation" autocomplete="new-password" required autofocus aria-describedby="passwordHelp" minlength="8">

                                            <div class="input-group-prepend cur-point" onclick="togglePassword(document.getElementById('password-confirm-visibility'), document.getElementById('password-confirm'))">
                                                <span class="input-group-text" id="inputGroupPrependEmail">
                                                    <span class="material-icons" id="password-confirm-visibility">visibility_off</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <small id="passwordHelp" class="form-text text-muted pl-3 pr-3">
                                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                    </small>
                                </div>
                            </div>

                            <div class="form-row justify-content-center">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('Reset Password') }}
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
    <script type='text/javascript'>
        function togglePassword(thisObj, inputObj) {
            if (inputObj.value !== '') {
                if (inputObj.type === 'password') {
                    inputObj.type = 'text';
                    thisObj.innerText = 'visibility';
                } else {
                    inputObj.type = 'password';
                    thisObj.innerText = 'visibility_off';
                }
            }
        }
    </script>
@endsection
