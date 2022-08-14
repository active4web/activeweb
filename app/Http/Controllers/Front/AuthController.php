<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(Request $request){
        $validation = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=> 'required|min:6' ,
            
          ]) ;
   
              User::create([
               'name'         => $request->name,
               'email'        => $request->email,
               'password'     => Hash::make($request->password),
               'phone'        => $request->phone,
               'role'         => 0,
           ]);
   
           return  $this->login($request);
    }
    

    public function login( Request $request){

        $credintials= $request->only('phone','password');
        if(Auth::attempt($credintials)){
            return view('front.pages.service-request-details');
        }
    
        return redirect()->back();

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('Front.technicalsupport.login'));
    }
}
