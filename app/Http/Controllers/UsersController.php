<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DashboardController;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;


//Models
use App\UsersModel;

class UsersController extends Controller
{
    public function login(Request $request){
        $username = 'admin';
        $password = 'admin';
        $position = 'admin';
        $error = 'Oops something went wrong';

        $checkforName = UsersModel::where('username', $request->get('username'))->first();
        //$checkforPass = UsersModel::where('password', $request->get('password'))->get();

        if($request->get('username') == $username && $request->get('password') == $password){
            $request->session()->put('user', $request->get('username'));
            $request->session()->put('position', $position);
            return redirect()->route('dashboard');
        }
        elseif($checkforName){
            if($request->get('password') == $checkforName->password);
                $request->session()->put('user', $request->get('username'));
                $request->session()->put('id', $checkforName->user_id);
                $request->session()->put('position', $checkforName->position);
                return redirect()->route('dashboard');
                // return $checkforName->user_id;
        }
        else{
            // return view('login')->with('errors', $error);
            return redirect()->back()->with('errors', $error);

        }

    }

    public function logout(Request $request){

        $user = $request->session()->flush();
        $nature = $request->session()->flush();
        $message = 'Logged Out!';
        return redirect()->route('miller_home')->with([
            'errors'=> $message,
            'user' => $user,
            'nature' => $nature
        ]);

    }

    public function register(Request $request){
        $user = $request->session()->get('user');
        return view('register')->with('user', $user);
    }

    public function createAccount(Request $request){

        $user = new UsersModel;
        $user->username = $request->get('username');
        $user->password = $request->get('password');
        $user->company_name = $request->get('companyname');
        $user->title = $request->get('title');
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->address_one = $request->get('addressone');
        $user->address_two = $request->get('addresstwo');
        $user->city = $request->get('city');
        $user->province = $request->get('province');
        $user->zip = $request->get('zip');
        $user->phone = $request->get('phone');
        $user->fax = $request->get('fax');
        $user->company_industry = $request->input('companyindustry');
        $user->product_specification = $request->input('productspect');
        if($request->get('title') == 'Owner'){
            $user->nature = "Vendor";
        }
        else{
            $user->nature = "Commercial";
        }
        $user->save();

        // return "SUCCESS";
        return redirect()->route('login');

    }
}
