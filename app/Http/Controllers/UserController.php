<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infromation = DB::table('infromation')->get();
        $offer = DB::table('offers')->get();

        return view('index',['info' => $infromation ,'offers' => $offer]);
        #return $infromation;
    }
    public function show()
    {
        $infromation = DB::table('user')->get();
        $offer = DB::table('offers')->get();

        return view('index',['info' => $infromation ,'offers' => $offer]);
        #return $infromation;
    }
}
