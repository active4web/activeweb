<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServiceStep;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\ServiceSteps\CreateServiceStepRequest;
use App\Http\Requests\Admin\ServiceSteps\UpdateServiceStepRequest;

class ServiceStepController extends Controller
{
    use ImageTrait;
    protected $serviceStepModel;
 
    public function __construct(ServiceStep $servicestepModel)
    {
      $this->serviceStepModel=$servicestepModel;
    }

    public function index (){


      $servicesteps= $this->serviceStepModel::get();
     return view('Admin.servicesteps.index',compact('servicesteps'));

    }

    public function create(){
      return view('Admin.servicesteps.create');
    }

    public function store(CreateServiceStepRequest $request){
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'servicestep');
        
    }
      $service = $this->serviceStepModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'image'         => $image ,
      ]);
      Alert::success('success', 'Service  added  Successfully');
      return redirect(route('Admin.servicestep.index'));
    }

    public function update(UpdateServiceStepRequest  $request ,$id){

     $servicestep= $this->serviceStepModel::findorfail($id);
     
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'servicestep');
        unlink('images/servicestep/'.$servicestep->image);
    }

     $servicestep->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'image'         => $image  ?? $servicestep->image,
     ]);

     Alert::success('success', 'Service  updated  Successfully');
     return redirect(route('Admin.servicestep.index'));
    }

    public function destroy($id){

      $servicestep = $this->serviceStepModel::findorfail($id);
      if($servicestep){

        $servicestep->delete();
        unlink('images/servicestep/'.$servicestep->image);
      }
      Alert::success('success', 'Service deleted  Successfully');
      return redirect(route('Admin.servicestep.index'));

    }
}
