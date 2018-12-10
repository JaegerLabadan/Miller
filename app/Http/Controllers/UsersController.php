<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DashboardController;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


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
                // $credentials = UsersModel::where('user_id', $checkforName->user_id)->get();
                $request->session()->put('user', $request->get('username'));
                $request->session()->put('id', $checkforName->user_id);
                $request->session()->put('position', $checkforName->position);
                return redirect()->route('dashboard');
                // return view('dashboard')->with($checkforName);
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

        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'companyname' => 'required',
            'vendorname' => 'required',
            'title' => 'required',
            'companyindustry' => 'required',
            'productspect' => 'required',
            'addressone' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'companylogo' => 'required',
        ]);

        $user = new UsersModel;
        $user->username = $request->get('username');
        $user->password = $request->get('password');
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->company_name = $request->get('companyname');
        $user->vendor_name = $request->get('vendorname');
        $user->title = $request->get('title');
        $user->company_industry = $request->get('companyindustry');
        $user->product_specification = $request->input('productspect');
        $user->address_one = $request->get('addressone');
        $user->city = $request->get('city');
        $user->province = $request->get('province');
        $user->zip = $request->get('zip');
        $user->phone = $request->get('phone');
        $user->fax = $request->get('fax');
        $user->email = $request->get('email');
        if($request->hasFile('companylogo')){
            $filenameWithExt = $request->file('companylogo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('companylogo')->getClientOriginalExtension();

            $filenameToStore = $filename.'_'.time().'_'.'.'.$extension;
            
            $path = $request->file('companylogo')->storeAs('public/logos', $filenameToStore); 
            $user->company_logo = $filenameToStore;
        }
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
