<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\ServiceDetails\CreateServiceDetailRequest;
use App\Http\Requests\Admin\ServiceDetails\UpdateServiceDetailRequest;

class ServiceDetailController extends Controller
{
    use ImageTrait;
    protected $serviceDetailModel;
    protected $serviceModel;
 
    public function __construct(ServiceDetail $serviceDetailModel,Service $serviceModel)
    {
      $this->serviceDetailModel=$serviceDetailModel;
      $this->serviceModel=$serviceModel;
    }

    public function index (){


      $servicedetails= $this->serviceDetailModel::with('service')->get();
      $services= $this->serviceModel::get();
     return view('admin.servicedetails.index',compact('servicedetails','services'));

    }

    public function create(){
        $services= $this->serviceModel::get();
      return view('admin.servicedetails.create',compact('services'));
    }

    public function store(CreateServiceDetailRequest $request){
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'serviceDetail');
        
    }
      $servicedetail = $this->serviceDetailModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'image'         => $image ,
         'service_id'    =>$request->service_id
      ]);
      Alert::success('success', 'ServiceDetail  added  Successfully');
      return redirect(route('Admin.servicedetail.index'));
    }

    public function update(UpdateServiceDetailRequest  $request ,$id){
  
     $servicedetail= $this->serviceDetailModel::findorfail($id);
     
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'servicedetail');
        unlink(public_path('images/servicedetail/'.$servicedetail->image));
    }
 
     $servicedetail->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'image'         => $image  ?? $servicedetail->image,
      'service_id'    =>$request->service_id
     ]);

     Alert::success('success', 'Service detail  updated  Successfully');
     return redirect(route('Admin.servicedetail.index'));
    }

    public function destroy($id){

      $servicedetail = $this->serviceDetailModel::findorfail($id);
      if($servicedetail){
        $servicedetail->delete();
        unlink(public_path('images/servicedetail/'.$servicedetail->image));

      }
      Alert::success('success', 'Service detail deleted  Successfully');
      return redirect(route('Admin.servicedetail.index'));

    }
}
