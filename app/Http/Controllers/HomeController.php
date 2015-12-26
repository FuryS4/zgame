<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return Response
     */
    public function index()
    {
        return view('home');
    }
    /*
    public function charakter() 
    {
        return view('home.charakter');
    }
    
    public function inventar() 
    {
        return view('home.inventar');
    }
    
    public function marktplatz() 
    {
        return view('home.marktplatz');
    }
    
    public function training() 
    {
        return view('home.training');
    }
    
    public function reisen() 
    {
        return view('home.reisen');
    }
    
    public function crew() 
    {
        return view('home.crew');
    }
    
    public function einstellungen() 
    {
        return view('home.einstellungen');
    }
    */
}
