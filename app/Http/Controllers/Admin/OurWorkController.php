<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurWork;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\OurWork\CreateOurWorkRequest;
use App\Http\Requests\Admin\OurWork\UpdateOurWorkRequest;

class OurWorkController extends Controller
{
    use ImageTrait;
    protected $ourWorkModel;
 
    public function __construct(OurWork $ourWorkModel)
    {
      $this->ourWorkModel=$ourWorkModel;
    }

    public function index (){


      $ourworks= $this->ourWorkModel::get();
     return view('Admin.ourworks.index',compact('ourworks'));

    }

    public function create(){
      return view('Admin.ourworks.create');
    }

    public function store(CreateOurWorkRequest $request){
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'ourwork');
        
    }
      $ourwork = $this->ourWorkModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'image'         => $image ,
      ]);
      Alert::success('success', ' added  Successfully');
      return redirect(route('Admin.ourwork.index'));
    }

    public function update(UpdateOurWorkRequest  $request ,$id){

     $ourwork= $this->ourWorkModel::findorfail($id);
     
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'ourwork');
        unlink('images/ourwork/'.$ourwork->image);
    }

     $ourwork->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'image'         => $image  ?? $request->image,
     ]);

     Alert::success('success', '  updated  Successfully');
     return redirect(route('Admin.ourwork.index'));
    }

    public function destroy($id){

      $ourwork = $this->ourWorkModel::findorfail($id);
      if($ourwork){

        $ourwork->delete();
        unlink(public_path('images/ourwork/'.$ourwork->image));
      }
      Alert::success('success', ' deleted  Successfully');
      return redirect(route('Admin.ourwork.index'));

    }
}
