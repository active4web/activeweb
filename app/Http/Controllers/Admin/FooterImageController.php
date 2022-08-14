<?php

namespace App\Http\Controllers\Admin;

use App\Models\FooterImage;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\FooterImage\CreateFooterImageRequest;
use App\Http\Requests\Admin\FooterImage\UpdateFooterImageRequest;

class FooterImageController extends Controller
{
    use ImageTrait;
    protected $footerImageModel;
 
    public function __construct(FooterImage $footerImageModel)
    {
      $this->footerImageModel=$footerImageModel;
    }


    public function index(){
        $footerimages= $this->footerImageModel::get();
        return view('Admin.footerimages.index',compact('footerimages'));

    }

    public function create(){
        return view('Admin.footerimages.create');
    }


    public function store(CreateFooterImageRequest $request){
        
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $image =  $this->uploadImage($request->image, $filename, 'footerimage');
            
        }
    $this->footerImageModel::create([
               'name' =>$request->name,
               'image' =>$image
    ]);
    Alert::success('success', 'footerimage added  Successfully');
    return redirect(route('Admin.footerimage.index'));
    }


    public function update(UpdateFooterImageRequest $request,$id){
     
         $footerImage= $this->footerImageModel::find($id);
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $image =  $this->uploadImage($request->image, $filename, 'footerimage');
            unlink(public_path('images/footerimage/'.$footerImage->image));
            
        }
      
        $footerImage->update([
          'name'=> $request->name,
          'image' => $image ?? $request->image,

        ]);
        Alert::success('success', 'footerimage updated  Successfully');
        return redirect(route('Admin.footerimage.index'));
    }


    public function destroy($id){
        $footerImage= $this->footerImageModel::findorfail($id);
        if($footerImage){
            $footerImage->delete();
            unlink('images/footerimage/'.$footerImage->image);
        }
        Alert::success('success', 'footerimage deleted  Successfully');
        return redirect(route('Admin.footerimage.index'));
    }
}
