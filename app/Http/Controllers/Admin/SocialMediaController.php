<?php

namespace App\Http\Controllers\Admin;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SocialMediaController extends Controller
{ 
  
    protected $socialmediaModel;
    public function __construct( SocialMedia $social)
{
        $this->socialmediaModel=$social;
    }

    public function index(){
        $socials=$this->socialmediaModel::get();
       return view('Admin.socialmedia.index',compact('socials'));

    }

    public function update(Request $request,$id){
      
       $social= $this->socialmediaModel::findorfail($id);
       $social->update([
        'link'=> $request->link
       ]);
       Alert::success('success', ' updated Successfully');
        return redirect(route('Admin.socialmedia.index'));


    }
    

}
