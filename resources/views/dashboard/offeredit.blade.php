@extends('layouts.base')
@section('title')
    DASH
@endsection
@section('contant')
    <div class="continer mt-4"  >
        <div class="text-center">
            <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Create Offer</a>
        </div>
        <div class="container mt-4">
            <table class="table table-striped table-hover" >
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Months</th>
                    <th scope="col">Days</th>
                    <th scope="col">Classes</th>
                    <th scope="col">Nutrition</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                </tr>
                </thead>
                <tbody>
                @foreach($offers as $offer)
                    <tr>
                        <th scope="row">{{$offer->id}}</th>
                        <td>{{$offer->days}}</td>
                        <td>{{$offer->classes}}</td>
                        <td>{{$offer->nutrition}}</td>
                        <td>{{$offer->price}}</td>
                        <td>{{$offer->discount}}</td>
                        <td>

                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="{{route('offer.destroy',$offer->id)}}" class="btn btn-success">Delete</a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('end')
    <script type="text/javascript" src="./scripts/login.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
@section('style')
    <link rel="stylesheet" href="{{URL::asset('./stylesheets/dash.css')}}">

@endsection


