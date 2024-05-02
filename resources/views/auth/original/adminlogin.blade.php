@extends('layouts.base')

@section('contant')
            <div class="mainBody">

                <form name="loginform" class="loginform" action="{{ route('save.admin') }}" method="POST">

                    @csrf
                    <label for="username" >تسجيل دخول الأدمن</label><br>

                    <label for="username">mobile or email</label><br>
                    <input id = "email" type="text" name="email" placeholder="Mobile Or Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus><br>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                         <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="password">{{ __('Password') }}</label><br>
                    <div class="password">
                        <input id="password" type="password" name="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <div id="privacy" class="privacy private" ></div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <p>If you don`t have account yet, <a href="{{ route('register') }}">Sign up</a></p>
                    <input type="submit" value="{{ __('Login') }}"><br><br>
                    <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div><br>
                    <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            </div>


@endsection
@section('end')
    <script type="text/javascript" src="{{URL::asset('./scripts/login.js')}}"></script>
@endsection

@section('style')
    <link rel="stylesheet" href="{{URL::asset('./stylesheets/login.css')}}">
@endsection
