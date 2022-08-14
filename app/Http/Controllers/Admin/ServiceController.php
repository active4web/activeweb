<?php

namespace App\Http\Controllers\Admin;

use services;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\Services\CreateServiceRequest;
use App\Http\Requests\Admin\Services\UpdateServiceRequest;


class ServiceController extends Controller
{
    use ImageTrait;
    protected $serviceModel;
 
    public function __construct(Service $serviceModel)
    {
      $this->serviceModel=$serviceModel;
    }

    public function index (){


      $services= $this->serviceModel::get();
     return view('Admin.services.index',compact('services'));

    }

    public function create(){
      return view('Admin.services.create');
    }

    public function store(CreateServiceRequest $request){
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'service');
        
    }
      $service = $this->serviceModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'image'         => $image ,
      ]);
      Alert::success('success', 'Service  added  Successfully');
      return redirect(route('Admin.service.index'));
    }

    public function update(UpdateServiceRequest  $request ,$id){

     $service= $this->serviceModel::findorfail($id);
     
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'service');
        unlink('images/service/'.$service->image);
    }

     $service->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'image'         => $image  ?? $service->image,
     ]);

     Alert::success('success', 'Service  updated  Successfully');
     return redirect(route('Admin.service.index'));
    }

    public function destroy($id){

      $service = $this->serviceModel::findorfail($id);
      if($service){

        $service->delete();
        unlink('images/service/'.$service->image);
      }
      Alert::success('success', 'Service deleted  Successfully');
      return redirect(route('Admin.service.index'));

    }
}
