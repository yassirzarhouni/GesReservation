<?php

namespace App\Http\Controllers;
use App\User;


use Illuminate\Http\Request;

class usershController extends Controller
{
    public function index() {
        $listuser = User::all();
        return view('user.index',['listuser'=> $listuser]);
    }
    public function create() {
        return view('hotel.create');
    }
    public function store(Request $request) {
       
    }
    public function edit($id) {
        $user=USer::find($id);
       return view('user.edit',['user'=> $user]);
    }
    public function update(Request $request,$id) {
        $user=User::find($id);
        $user->situation=$request->input('situation');
        $user->nbrenfant=$request->input('nbrenfant');
        $user->lastreservation=$request->input('lastreservation');
        
        $user->save();
        return redirect('admin/user');
    }
    public function destroy(Request $request,$id) {
        $user=User::find($id);
        $user->delete();
        return redirect('admin/user');
    }
}
