@extends('layouts.base')

@section('contant')
    @if ($errors->any())
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

            @foreach ($errors->all() as $error)
                <span class="dot"></span>{{ $error }}<br>
            @endforeach
        </div>

    @endif



    <div class="mainBody">
        <form  class="register" method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
            @csrf
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" required value="{{ old('name')}}" >

                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" required value="{{ old('email')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end" >Mobile</label>

                <div class="col-md-6">
                    <input id="mobile" type="mobile" class="form-control" name="mobile" required value="{{ old('mobile')}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                <div class="password">
                    <input id="password1" type="password" class="form-control" name="password" required>
                    <div id="privacy1" class="privacy private" ></div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="password">
                    <input id="password2" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <div id="privacy2" class="privacy private" ></div>

                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Upload Image') }}</label>

                <div class="col-md-6">
                    <input  type="file" class="form-control" name="image"  autocomplete="image" required value="{{ old('image')}}">
                </div>
                <div >
                    <label for="" class="col-md-4 col-form-label text-md-end">{{ __('Choose Gender') }}</label>
                    <div class="row mb-3">
                        <select name="gender" required>
                            <option value="{{ old('gender')}}">Please select one…</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                    </div>

                </div>
            </div>
            <p>If you already have account, <a href="{{route('login')}}">Login</a></p>
            <input type="submit" value="{{ __('Register') }}">
        </form>
    </div>

@endsection
@section('end')
    <script type="text/javascript" src="./scripts/register.js"></script>

@endsection

@section('style')
    <link rel="stylesheet" href="./stylesheets/register.css">
@endsection
