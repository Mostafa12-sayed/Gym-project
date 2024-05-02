@extends('layouts.base')

@section('title')
    My account
@endsection

@section('contant')

    <!--        HEADER            -->
    <!--        MAIN BODY           -->

    <div class="mainBody">
        <div id="list" class="list">
            <div class="list">
                <img src= "/images/Users/{{Auth::user()->image}}" alt="User Avatar">
            </div>
            <h2 id="info" class="selected">Personal Information</h2>
            <h2 id="plan" >Courses</h2>
        </div>

        <div class="data display" data-page="info">

            <div id="id">
                <div>
                    <h2>ID</h2>
                </div>
                <p>{{Auth::user()->id}}</p>
            </div>
            <div id="name">
                <div>
                    <h2>Name</h2>
                </div>
                <p>{{Auth::user()->name}}</p>
            </div>
            <div id="birthday">
                <div>
                    <h2>Birthday</h2>
                </div>
                <p>1/10/2000</p>
            </div>
            <div id="height">
                <div>
                    <h2>Height</h2>
                </div>
                <p>165</p>
            </div>
            <div id="weight">
                <div>
                    <h2>Weight</h2>
                </div>
                <p>55</p>
            </div>
            <div id="gender">
                <div>
                    <h2>Gender</h2>
                </div>
                <p>male</p>
            </div>
            <div id="username">
                <div>
                    <h2>Email</h2>
                </div>
                <p>{{Auth::user()->email}}</p>
            </div>
            <div id="name">
                <div>
                    <h2>Mobile</h2>
                </div>
                <p>{{Auth::user()->mobile}}</p>
            </div>
            <div></div>
             <a href="{{route('user.edit.information')}}"><input type="submit" value="Edit Information"></a>
            <!--<input type="button" value="Cancel"> -->
        </div>
        <div class="data" data-page="plan">
            <!--    IF He ALREADY HAS Plan   -->
            <!--
            <h1>You have not chose plan yet.</h1>
            <a href="/plan.blade.php"><button>Choose Plan</button></a>-->

            <!--                             -->

            <!--    IF There is no Plan   -->

            <div class="plan">
                <div class="courses">
                    <div>
                        <img src="/images/Courses/Sauna.png" alt="Sauna">
                        <p>Sauna</p>
                    </div>
                    <div>
                        <img src="/images/Courses/Bodybuilding.png" alt="Bodybuilding">
                        <p>Bodybuilding</p>
                    </div>

                </div>
                <div class="card">
                    <section>
                        <article>
                            <header>Fitness</header>
                            <div>
                                <P>3 Months</p>
                                <p>2 days aweek</p>
                            </div>
                        </article>



                    </section>
                    <p>100</p>
                </div>
            </div>

            <!--                          -->
        </div>
    </div>

@endsection

@section('end')
    <script type="text/javascript" src="./scripts/myaccount.js"></script>
@endsection

@section('style')
    <link rel="stylesheet" href="{{URL::asset('/stylesheets/myaccount.css')}}">
@endsection
