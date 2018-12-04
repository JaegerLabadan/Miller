<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetUpController extends Controller
{
    public function index(Request $request){
        $user = $request->session()->get('user');
        $id = $request->session()->get('id');
        $position = $request->session()->get('position');
        return view('setup')->with([
            'user'=> $user,
            'id' => $id,
            'position' => $position
        ]);
    }
}
