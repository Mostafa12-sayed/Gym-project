<?php
$i=1;
$j=1;
?>
@extends('layouts.dash')
@section('title')
    DASH
@endsection
@section('contant')
    <div class="container">
        <h2>All Offers</h2>
        <div class="center-div" >
            <a href="{{route('admin.dashboard')}}" class="button3">Create Offer</a>
        </div>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">#</div>
                <div class="col col-2">Months</div>
                <div class="col col-3">Days</div>
                <div class="col col-4">Classes</div>
                <div class="col col-5">Nutrition</div>
                <div class="col col-6">Price</div>
                <div class="col col-7">Discount</div>
                <div class="col col-8"></div>
            </li>
            @foreach($offers as $offer)
            <li class="table-show">
                <div class="col col-1">{{$j++}}</div>
                <div class="col col-2">{{$offer->months}}</div>
                <div class="col col-3">{{$offer->days}}</div>
                <div class="col col-4">{{$offer->classes}}</div>
                <div class="col col-5">{{$offer->nutrition}}</div>
                <div class="col col-6">{{$offer->price}}</div>
                <div class="col col-7">{{$offer->discount}}</div>
                <div class="col col-8">
                    <a href="{{route('offer.update',$offer->id)}}" class="button1">Edit</a>
                    <a href="{{route('offer.destroy',$offer->id)}}" class="button2">Delete</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <hr >
    <div class="container">
        <h2>All Users ({{count($users)}})</h2>
        @if(count($users) > 2 )
            <div class="center-div">
                <a href="" class="button3">Show All </a>
            </div>
        @endif
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">#</div>
                <div class="col col-5">Name</div>
                <div class="col col-9">Email</div>
                <div class="col col-5">Mobile</div>
                <div class="col col-2">Image</div>

                <div class="col col-8"></div>
            </li>
            @foreach($users as $user)
                <li class="table-show">
                    <div class="col col-1">{{$i++}}</div>
                    <div class="col col-5">{{$user->name}}</div>
                    <div class="col col-9">{{$user->email}}</div>
                    <div class="col col-5">{{$user->mobile}}</div>
                        <img class="col col-2" src="{{url('/images/Users/'.$user->image) }}" alt=""  title="" >
                    <div class="col col-8">
                        <a href="{{route('user.remove',$user->id)}}" class="button1">Remove</a>
                    </div>
                </li>
                @if($i>3)
                    @break;
                @endif

            @endforeach


        </ul>
    </div>
@endsection
@section('end')
    <script type="text/javascript" src="./scripts/login.js"></script>
@endsection
@section('style')
    <link rel="stylesheet" href="{{URL::asset('./stylesheets/dash.css')}}">

@endsection


