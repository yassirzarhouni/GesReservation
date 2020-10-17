<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicule;
use Auth;
use App\Assur;
use App\Profile;
use App\Hotel;
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
        /*$vehcount= Vehicule::where('user_id',Auth::user()->id)->count();
        $procount= 1;
        $assurcount= Assur::where('user_id',Auth::user()->id)->count();*/
        $listhotel = Hotel::all();
        return view('home',['listhotel'=> $listhotel]);
        
    
    }
    public function hotel(){
        return view('hotel');
    }
    public function userh(){
        return view('userh');
    }
    
    public function newuserh(){
        return view('usernew');
    }
}
