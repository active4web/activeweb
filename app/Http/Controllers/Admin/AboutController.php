<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\About\CreateAboutRequest;
use App\Http\Requests\Admin\About\UpdateAboutRequest;

class AboutController extends Controller
{
    use ImageTrait;
    protected $aboutModel;
 
    public function __construct(About $aboutModel)
    {
      $this->aboutModel=$aboutModel;
    }

    public function index (){


      $abouts= $this->aboutModel::get();
     return view('admin.about.index',compact('abouts'));

    }

    public function create(){
      return view('admin.about.create');
    }

    public function store(CreateAboutRequest $request){
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'about');
        
    }
      $about = $this->aboutModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'image'         => $image ,
      ]);
      Alert::success('success', 'About  added  Successfully');
      return redirect(route('Admin.about.index'));
    }

    public function update(UpdateAboutRequest  $request ,$id){

     $about= $this->aboutModel::findorfail($id);
     
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'about');
        unlink(public_path('images/about/'.$about->image));
    }

     $about->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'image'         => $image  ?? $about->image,
     ]);

     Alert::success('success', 'About  updated  Successfully');
     return redirect(route('Admin.about.index'));
    }

    public function destroy($id){

      $about = $this->aboutModel::findorfail($id);
      if($about){

        $about->delete();
        unlink(public_path('images/about/'.$about->image));
      }
      Alert::success('success', 'About deleted  Successfully');
      return redirect(route('Admin.about.index'));

    }
}
