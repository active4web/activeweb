<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogDetail;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\BlogDetails\CreateBlogDetailRequest;
use App\Http\Requests\Admin\BlogDetails\UpdateBlogDetailRequest;
use App\Models\Blog;

class BlogDetailController extends Controller
{
    
    protected $blogDetailModel;
    protected $blogModel;
 
    public function __construct(BlogDetail $blogDetail,Blog $blogModel)
    {
      $this->blogDetailModel=$blogDetail;
      $this->blogModel=$blogModel;
    }

    public function index (){

        $blogs= $this->blogModel::get();
      $blogDetails= $this->blogDetailModel::get();
     return view('Admin.blogdetails.index',compact('blogDetails','blogs'));

    }

    public function create(){
        $blogs= $this->blogModel::get();
      return view('Admin.blogdetails.create',compact('blogs'));
    }

    public function store(CreateBlogDetailRequest $request){
    

      $blogDetail = $this->blogDetailModel::create([
         
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'blog_id'       => $request->blog_id
         
       ]);
      Alert::success('success', 'blogDetail  added  Successfully');
      return redirect(route('Admin.blogdetail.index'));
    }

    public function update(UpdateBlogDetailRequest  $request ,$id){

     $blogDetail= $this->blogDetailModel::findorfail($id);
     $blogDetail->update([
     
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'blog_id'       => $request->blog_id
    
    ]);

     Alert::success('success', 'blogDetail  updated  Successfully');
     return redirect(route('Admin.blogdetail.index'));
    }

    public function destroy($id){

      $blogDetail = $this->blogDetailModel::findorfail($id);
      if($blogDetail){

        $blogDetail->delete();
       
      }
      Alert::success('success', 'blogDetail deleted  Successfully');
      return redirect(route('Admin.blogDetail.index'));

    }
}
