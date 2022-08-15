<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(ClientRegisterRequest $request){
     
   
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
            return redirect(route('Front.service.request.details'));
        }
    
        return redirect()->back()->withErrors(['error' => 'You Don\'t Have Access To Login']);;

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('Front.technicalsupport.login'));
    }
}
