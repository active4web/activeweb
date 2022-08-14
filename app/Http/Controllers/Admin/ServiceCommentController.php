<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ServiceComment;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\ServiceComment\CreateServiceCommentRequest;
use App\Http\Requests\Admin\ServiceComment\UpdateServiceCommentRequest;

class ServiceCommentController extends Controller
{
    use ImageTrait;
    protected $sreviceCommentModel;
 
    public function __construct(ServiceComment $servicecommentModel)
    {
      $this->serviceCommentModel=$servicecommentModel;
    }

    public function index (){


      $servicecomments= $this->serviceCommentModel::get();
     return view('Admin.servicecomments.index',compact('servicecomments'));

    }

    public function create($id){
      return view('Admin.servicecomments.create',compact('id'));
    }

    public function store(CreateServiceCommentRequest $request,$id){ 
          
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'servicecomment');
        
    }

      $service = $this->serviceCommentModel::create([
         'site_url'         => $request->url,
         'comment'     => $request->comment,
         'service_id'  =>  $id,
         'file'        => $image ,
      ]);
      Alert::success('success', 'ServiceComment  added  Successfully');
      return redirect(route('Admin.servicecomment.index'));
    }

    public function update(UpdateServiceCommentRequest  $request ,$id){

     $srevicecomment= $this->serviceCommentModel::findorfail($id);
     
      if ($request->hasFile('file')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'servicecomment');
        unlink('images/servicecomment/'.$srevicecomment->image);
    }

     $srevicecomment->update([
      'site_url'         =>$request->url,
      'comment'   =>$request->comment,
      'file'         => $image  ?? $srevicecomment->file,
      'service_id'  =>  $id,
     ]);

     Alert::success('success', 'ServiceComment  updated  Successfully');
     return redirect(route('Admin.servicecomment.index'));
    }

    public function destroy($id){

      $srevicecomment = $this->serviceCommentModel::findorfail($id);
      if($srevicecomment){

        $srevicecomment->delete();
        unlink('images/servicecomment/'.$srevicecomment->file);
      }
      Alert::success('success', 'ServiceComment deleted  Successfully');
      return redirect(route('Admin.servicecomment.index'));

    }
}
