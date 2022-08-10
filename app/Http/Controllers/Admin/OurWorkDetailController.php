<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurWork;
use Illuminate\Http\Request;
use App\Models\OurWorkDetail;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\OurWorkDetails\CreateOurWorkDetailRequest;
use App\Http\Requests\Admin\OurWorkDetails\UpdateOurWorkDetailRequest;

class OurWorkDetailController extends Controller
{
    use ImageTrait;

    protected $ourWorkDetailModel;
    protected $ourWorkModel;
 
    public function __construct(OurWorkDetail $ourWorkDetailModel,OurWork $ourWorkModel)
    {
      $this->ourWorkDetailModel=$ourWorkDetailModel;
      $this->ourWorkModel=$ourWorkModel;
    }

    public function index (){


      $ourworkDetails= $this->ourWorkDetailModel::with('ourWork')->get();
      $works= $this->ourWorkModel::get();
     return view('admin.ourWorkDetails.index',compact('ourworkDetails','works'));

    }

    public function create(){
        $works= $this->ourWorkModel::get();
      return view('admin.ourworkDetails.create',compact('works'));
    }

    public function store(CreateOurWorkDetailRequest $request){
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'ourworkDetail');
        
    }
      $ourworkDetail = $this->ourWorkDetailModel::create([
       
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'ourwork_id'    => $request->ourwork_id,
      ]);
      Alert::success('success', ' ourworkDetail added  Successfully');
      return redirect(route('Admin.ourworkdetail.index'));
    }

    public function update(UpdateOurWorkDetailRequest  $request ,$id){

     $ourworkDetail= $this->ourWorkDetailModel::findorfail($id);
     
      

     $ourworkDetail->update([
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'ourwork_id'    => $request->ourwork_id,
     ]);

     Alert::success('success', '  updated  Successfully');
     return redirect(route('Admin.ourworkdetail.index'));
    }

    public function destroy($id){

      $ourworkDetail = $this->ourWorkDetailModel::findorfail($id);
      if($ourworkDetail){

        $ourworkDetail->delete();
      }
      Alert::success('success', ' deleted  Successfully');
      return redirect(route('Admin.ourworkdetail.index'));

    }
}
