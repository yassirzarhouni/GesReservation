<?php

namespace App\Http\Controllers;
use App\Reservation;
use Illuminate\Http\Request;
use App\Hotel;
use Auth;

class ReservationController extends Controller
{
    public function index() {
        $listReservation = Reservation::all();
        return view('reservation.index',['listReservation'=> $listReservation]);
    }
    public function create() {
        return view('hotel.create');
    }
    public function store(Request $request,$id) {
        $reservation= new Reservation();
        $reservation->datedebut=$request->input('datedebut');
        $reservation->datefin=$request->input('datefin');
        $reservation->nbrpersonne=$request->input('nbrpersonne');
        $reservation->user_id=Auth::user()->id;
        $reservation->hotel_id=$id;
        
        $reservation->staut="An attent";
        $reservation->save();
        return redirect('home');
     }
     public function destroy(Request $request,$id) {
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservation');
    }
    public function update(Request $request,$id) {
        $reservation=Reservation::find($id);
        $reservation->staut="Confirmé";
        
        $reservation->save();
        return redirect('/admin/reservation');
     }
     public function annuler(Request $request,$id) {
        $reservation=Reservation::find($id);
        $reservation->staut="Annulé";
        
        $reservation->save();
        return redirect('/admin/reservation');
     }
     
     public function indexclient() {
        $listReservation = Reservation::where('user_id',Auth::user()->id)->get();
        $listhotel = Hotel::all();
        return view('reservation.indexclients',['listReservation'=> $listReservation,'listhotel'=>$listhotel]);
    }
    public function destroyy(Request $request,$id) {
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect('/home/Mesreservations');
    }
}
