<?php

namespace App\Http\Controllers\Admin;

use App\Models\PagesBanner;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\PagesBanner\CreatePageBannerRequest;
use App\Http\Requests\Admin\PagesBanner\UpdatePageBannerRequest;

class PagesBannerController extends Controller
{
    use ImageTrait;
    protected $pagesBannerModel;
 
    public function __construct(PagesBanner $pagesBannerModel)
    {
      $this->pagesBannerModel=$pagesBannerModel;
    }


    public function index(){
        $banners= $this->pagesBannerModel::get();
        return view('Admin.pagesbanners.index',compact('banners'));

    }

    public function create(){
        return view('Admin.pagesbanners.create');
    }


    public function store(CreatePageBannerRequest $request){
        
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $image =  $this->uploadImage($request->image, $filename, 'pagesbanner');
            
        }
    $this->pagesBannerModel::create([
              'title' =>$request->title,
               'image' =>$image
    ]);
    Alert::success('success', 'Banner added  Successfully');
    return redirect(route('Admin.pagebanner.index'));
    }


    public function update(UpdatePageBannerRequest $request,$id){
     
         $banner= $this->pagesBannerModel::find($id);
        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $image =  $this->uploadImage($request->image, $filename, 'pagesbanner');
            unlink('images/pagesbanner/'.$banner->image);
            
        }
      
        $banner->update([
          
          'image' => $image ?? $request->image,

        ]);
        Alert::success('success', 'Banner updated  Successfully');
        return redirect(route('Admin.pagebanner.index'));
    }


    public function destroy($id){
        $banner= $this->pagesBannerModel::findorfail($id);
        if($banner){
            $banner->delete();
            unlink('images/pagesbanner/'.$banner->image);
        }
        Alert::success('success', 'Banner deleted  Successfully');
        return redirect(route('Admin.pagebanner.index'));
    }
}
