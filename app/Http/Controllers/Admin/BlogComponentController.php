<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogComponent;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\BlogComponents\CreateBlogComponentRequest;
use App\Http\Requests\Admin\BlogComponents\UpdateBlogComponentRequest;

class BlogComponentController extends Controller
{
    protected $blogComponentModel;
    protected $blogModel;
 
    public function __construct(BlogComponent $blogcomponent,Blog $blogModel)
    {
      $this->blogComponentModel=$blogcomponent;
      $this->blogModel=$blogModel;
    }

    public function index (){

        $blogs= $this->blogModel::get();
      $blogComponents= $this->blogComponentModel::get();
     return view('Admin.blogcomponents.index',compact('blogComponents','blogs'));

    }

    public function create(){
        $blogs= $this->blogModel::get();
      return view('Admin.blogcomponents.create',compact('blogs'));
    }

    public function store(CreateBlogComponentRequest $request){
      
      $blogcomponent = $this->blogComponentModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'blog_id'       => $request->blog_id
         
       ]);
      Alert::success('success', 'blogcomponent  added  Successfully');
      return redirect(route('Admin.blogcomponent.index'));
    }

    public function update(UpdateBlogComponentRequest  $request ,$id){

     $blogcomponent= $this->blogComponentModel::findorfail($id);
     

     $blogcomponent->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'blog_id'       => $request->blog_id
    
    ]);

     Alert::success('success', 'blog component  updated  Successfully');
     return redirect(route('Admin.blogcomponent.index'));
    }

    public function destroy($id){

      $blogcomponent = $this->blogComponentModel::findorfail($id);
      if($blogcomponent){

        $blogcomponent->delete();
       
      }
      Alert::success('success', 'blog component deleted  Successfully');
      return redirect(route('Admin.blogcomponent.index'));

    }
}
