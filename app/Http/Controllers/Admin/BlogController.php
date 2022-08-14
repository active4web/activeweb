<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\Blogs\CreateBlogRequest;
use App\Http\Requests\Admin\Blogs\UpdateBlogRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    use ImageTrait;
    protected $blogModel;
 
    public function __construct(Blog $blogModel)
    {
      $this->blogModel=$blogModel;
    }

    public function index (){


      $blogs= $this->blogModel::get();
     return view('Admin.blogs.index',compact('blogs'));

    }

    public function create(){
      return view('Admin.blogs.create');
    }

    public function store(CreateBlogRequest $request){
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'blog');
        
    }
      $blog = $this->blogModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
         'image'         => $image ,
         'category'      => ['en'=>$request->category_en,'ar'=>$request->category_ar,],
         'created_by'    => Auth::user()->name
       ]);
      Alert::success('success', 'blog  added  Successfully');
      return redirect(route('Admin.blog.index'));
    }

    public function update(UpdateBlogRequest  $request ,$id){

     $blog= $this->blogModel::findorfail($id);
     
      if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $image =  $this->uploadImage($request->image, $filename, 'blog');
        unlink('images/blog/'.$blog->image);
    }

     $blog->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'description'   => ['en'=>$request->description_en,'ar'=>$request->description_ar,],
      'image'         => $image  ?? $blog->image,
      'category'      => ['en'=>$request->category_en,'ar'=>$request->category_ar,],
    
    ]);

     Alert::success('success', 'blog  updated  Successfully');
     return redirect(route('Admin.blog.index'));
    }

    public function destroy($id){

      $blog = $this->blogModel::findorfail($id);
      if($blog){

        $blog->delete();
        unlink('images/blog/'.$blog->image);
      }
      Alert::success('success', 'blog deleted  Successfully');
      return redirect(route('Admin.blog.index'));

    }
}
