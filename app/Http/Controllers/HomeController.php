<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Ourteam;
use App\Advantage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function writer()
    {
        return view('writer.dashboard');
    }

    public function index(About $about,Ourteam $ourteam,Advantage $advantage)
    {
        return view('main.index',compact('about','ourteam','advantage'));
    }

}
