@extends('layouts.base')
@section('title')
    DASH
@endsection
@section('contant')
    <div class="mainBody">
        <form name="loginform" class="loginform" action="{{route('offer.store')}}" method="POST">
            @csrf
            <br>
            <label for="username" > Months
                @error('months')
                <span class="invalid-feedback" role="alert" id="alrt" >
                        <strong>       :->{{ $message }}</strong>
                    </span>
                @enderror<br></label>
            <input  type="number" name="months" placeholder="months" class="form-control @error('months') is-invalid @enderror" value="{{ old('months') }}"  autocomplete="months" autofocus><br>


            <label for="username">Days
                @error('days')
                <span class="invalid-feedback" role="alert" id="alrt">
                        <strong>  :->{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <input  type="number" name="days" placeholder="days" class="form-control @error('days') is-invalid @enderror" value="{{ old('days') }}"  autocomplete="days" autofocus><br>

            <label for="username">Classes
                @error('classes')
                <span class="invalid-feedback" role="alert" id="alrt">
                        <strong>:->{{ $message }}</strong>
                    </span>
                @enderror</label>
            <input  type="number" name="classes" placeholder="classes" class="form-control @error('classes') is-invalid @enderror" value="{{ old('classes') }}"  autocomplete="classes" autofocus><br>


            <label for="username">Nutrition
                @error('nutrition')
                <span class="invalid-feedback" role="alert" id="alrt">
                        <strong>:->{{ $message }}</strong>
                    </span>
                @enderror</label>
            <input  type="text" name="nutrition" placeholder="nutrition" class="form-control @error('nutrition') is-invalid @enderror" value="{{ old('nutrition') }}"  autocomplete="nutrition" autofocus><br>


            <label for="username">Price
                @error('price')
                <span class="invalid-feedback" role="alert" id="alrt">
                        <strong>:->{{ $message }}</strong>
                    </span>
                @enderror</label>
            <input  type="number" name="price" placeholder="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"  autocomplete="price" autofocus><br>


            <label for="username">Discount
                @error('discount')
                <span class="invalid-feedback" role="alert" id="alrt">
                        <strong>:->{{ $message }}</strong>
                    </span>
                @enderror</label>
            <input  type="number" name="discount" placeholder="discount" class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount') }}"  autocomplete="discount" autofocus><br>


            <input type="submit" value="{{ __('Submit') }}">

        </form>
    </div>

@endsection
@section('end')
    <script type="text/javascript" src="./scripts/login.js"></script>

@endsection
@section('style')
    <link rel="stylesheet" href="{{URL::asset('./stylesheets/dash.css')}}">

@endsection


