@extends('layouts.master')
@section('title')
    Confirm Password |
@endsection
@section('content')
<div class="container p-t-6rem">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        {{ __('Please confirm your password before continuing.') }}
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrependPassword">
                                        <span class="material-icons">
                                            vpn_key
                                        </span>
                                    </span>
                                </div>

                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" autocomplete="current-password" required autofocus aria-describedby="inputGroupPrependPassword" minlength="8">

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

                        <div class="form-row justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">
                                {{ __('Confirm Password') }}
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
