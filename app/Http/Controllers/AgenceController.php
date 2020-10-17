<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Hotel;
use Auth;
use Guest;
class AgenceController extends Controller
{
    public function index(){
        
        $listhotel = Hotel::all();
        return view('agence',['listhotel'=> $listhotel]);
    }
    
}
