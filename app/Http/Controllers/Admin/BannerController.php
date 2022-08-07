<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\Banners\CreateBannerRequest;
use App\Http\Requests\Admin\Banners\UpdateBannerRequest;

class BannerController extends Controller
{
    use ImageTrait;
    protected $bannerModel;
 
    public function __construct(Banner $bannerModel)
    {
      $this->bannerModel=$bannerModel;
    }


    public function index(){
        $banners= $this->bannerModel::get();
        return view('admin.banners.index',compact('banners'));

    }

    public function create(){
        return view('admin.banners.create');
    }


    public function store(CreateBannerRequest $request){
        
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $image =  $this->uploadImage($request->image, $filename, 'banner');
            
        }
    $this->bannerModel::create([
              'title' =>$request->title,
               'image' =>$image
    ]);
    Alert::success('success', 'Banner added  Successfully');
    return redirect(route('Admin.banner.index'));
    }


    public function update(UpdateBannerRequest $request,$id){
     
         $banner= $this->bannerModel::find($id);
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $image =  $this->uploadImage($request->image, $filename, 'banner');
            unlink(public_path('images/banner/'.$banner->image));
            
        }
      
        $banner->update([
          'title'=> $request->title,
          'image' => $image ?? $request->image,

        ]);
        Alert::success('success', 'Banner updated  Successfully');
        return redirect(route('Admin.banner.index'));
    }


    public function destroy($id){
        $banner= $this->bannerModel::findorfail($id);
        if($banner){
            $banner->delete();
        }
        Alert::success('success', 'Banner deleted  Successfully');
        return redirect(route('Admin.banner.index'));
    }
}
