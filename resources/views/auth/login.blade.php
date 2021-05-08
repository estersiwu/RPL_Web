@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="logo text-center"><img src="{{asset('img/SI(3).png')}}" alt="Logo SIKP UKDW"></div>
                    <h3 class="text-center">Login</h3>
            </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingat Saya') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password?') }}
                                    </a>
                                    <head>
                                        <p>
                                            
                                            <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
                                            </head>
                                            <body>
                                            <div id="my-signin2"></div>
                                            <script>
                                                function onSuccess(googleUser) {
                                                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
                                                }
                                                function onFailure(error) {
                                                console.log(error);
                                                }
                                                function renderButton() {
                                                gapi.signin2.render('my-signin2', {
                                                    'scope': 'profile email',
                                                    'width': 330,
                                                    'height': 40,
                                                    'longtitle': true,
                                                    'theme': 'dark',
                                                    'onsuccess': onSuccess,
                                                    'onfailure': onFailure
                                                });
                                                }
                                            </script>
                                            <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
                                            </p>
                                        </body>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
