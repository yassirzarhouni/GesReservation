<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function index() {
        $listhotel = Hotel::all();
        return view('agence',['listhotel'=> $listhotel]);
    }
    public function create() {
        return view('hotel.create');
    }
    public function store(Request $request) {
       $hotel= new Hotel();
       $hotel->titre=$request->input('titre');
       $hotel->presentation=$request->input('presentation');
       $hotel->ville=$request->input('ville');
       $hotel->price=$request->input('prix');
       $hotel->hotPrice=$request->input('max');
       $hotel->image1=$request->input('image1');
       $hotel->image2=$request->input('image2');
       $hotel->save();
       return redirect('agence');
    }
    public function edit($id) {
       $hotel=Hotel::find($id);
       return view('hotel.edit',['hotel'=> $hotel]);
    }
    public function update(Request $request,$id) {
       $hotel=Hotel::find($id);
       $hotel->titre=$request->input('titre');
       $hotel->presentation=$request->input('presentation');
       $hotel->ville=$request->input('ville');
       $hotel->price=$request->input('prix');
       $hotel->hotPrice=$request->input('max');
       $hotel->save();
       return redirect('agence');
    }
    public function destroy(Request $request,$id) {
        $hotel=Hotel::find($id);
        $hotel->delete();
        return redirect('agence');
    }
    public function affiche($id) {
        $hotel=Hotel::find($id);
        return view('hotel',['hotel'=> $hotel]);
    }
}
