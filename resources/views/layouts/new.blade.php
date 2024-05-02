<?php
    $info = DB::table('infromation')->get();
    $offers = DB::table('offers')->get();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('style')
    <title>H.A.M | @yield('title')</title>
</head>
<body>
<!--        HEADER            -->
<header class="header">
    <!--        LOGO            -->
    <header class="logo">
        <img src="{{URL::asset('./images/logo.png')}}" alt="Dumbbell">
        <h2>H.A.M @if (auth()->check()) | {{ Auth::user()->name }} @endif</h2><br>


    </header>
    <!--        NAV BAR            -->
    <nav class="navbar">
        <ul>
            <li id="home" class="home"><a href="{{route('home')}}">Home</a></li>
            @if (!auth()->check())
                <li id="login" class="login"><a href="{{route('login')}}">login</a></li>
                <li id="signup" class="signup"><a href="{{route('register')}}">Register</a></li>
            @endif
            @if( !empty(Auth::user()->type) && Auth::user()->type == 1 )
                <!--<li id="signup" class="signup"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>-->
                <div class="dropdownn">
                    <button class="dropbtnn"><a href="{{route('offer.show')}}">Dashboard <i class="fa fa-caret-down"></i></a></button>
                    <div class="dropdown-contentt">
                        <a href="{{route('users.showall')}}">Show All Users<i class="fa fa-caret-down"> </i> </a>
                        <a href="{{route('admin.dashboard')}}">Insert Offer</a>
                        <a href="{{route('offer.show')}}">Show All Offers</a>
                    </div>
                </div>
            @endif
        </ul>
        @if(auth()->check())
            <div class="navbar-profile">
                <div class="dropdown" >
                    <button  class="dropbtn" >Settings <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content" >
                        <img src="/images/Users/{{Auth::user()->image}}" alt="User Avatar">
                        <div>
                            <span >{{Auth::user()->name}}</span>
                            <span>{{Auth::user()->email}}</span>
                        </div><br>
                        <a href="{{route('user.profile',[Auth::user()->id])}}">Profile</a>
                        <a href="#">Account</a>
                        <a href="#">Preferences</a>
                        <a href="{{route('logout')}}">Logout</a>
                    </div>
                </div>
                <!--<span>{{ Auth::user()->name }}</span> -->

            </div>
        @endif
        <!-- END: Dropdown Container -->
    </nav>-->

    <!-- Navbar -->
</header>
<div id="divContent">
@yield('contant')
</div>
<footer>
    <!--        LOGO          -->
    <div class="logoCol">
        <img src="{{URL::asset('./images/logo.png')}}" alt="Dumbbell">
    </div>
    <!--        SOCIAL MEDIA           -->
    <div class="followCol">
        <h2>Follow us</h2>
        @foreach($info as $infromation) @endforeach
        <a href="{{$infromation->facebook}}"><img src="{{URL::asset('/images/Social/facebook.png')}}" alt="Facebook"></a>
        <a href="{{$infromation->instgrame}}"><img src="{{URL::asset('./images/Social/instagram.png')}}" alt="Instagram"></a>
        <a href="#"><img src="{{URL::asset('./images/Social/whatsapp.png')}}" alt="Whatsapp"></a>
        <a href="{{$infromation->twitter}}"><img src="{{URL::asset('./images/Social/twitter.png')}}" alt="twitter"></a>

    </div>
    <!--        ABOUT US           -->
    <div class="aboutCol">
        <h2>About us</h2>
        <p>Phone Number: <span>{{$infromation->phone}}</span> </p>
        <p>Contact us:<span>{{$infromation->mail}}</span></p>
    </div>
</footer>
@yield('end')
</body>
</html>
