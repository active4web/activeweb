<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Admin\Categories\CreateCategoryRequest;
use App\Http\Requests\Admin\Categories\UpdateCategoryRequest;

class CategoryController extends Controller
{
   
    protected $categoryModel;
 
    public function __construct(Category $categoryModel)
    {
      $this->categoryModel=$categoryModel;
    }

    public function index (){


      $categories= $this->categoryModel::get();
     return view('Admin.categories.index',compact('categories'));

    }

    public function create(){
      return view('Admin.categories.create');
    }

    public function store(CreateCategoryRequest $request){
      
      $category = $this->categoryModel::create([
         'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
         'count'         => $request->count,
      ]);
      Alert::success('success', 'category  added  Successfully');
      return redirect(route('Admin.category.index'));
    }

    public function update(UpdateCategoryRequest  $request ,$id){

     $category= $this->categoryModel::findorfail($id);

     $category->update([
      'title'         => ['en'=>$request->title_en,'ar'=>$request->title_ar,],
      'count'         => $request->count,
     ]);

     Alert::success('success', 'category  updated  Successfully');
     return redirect(route('Admin.category.index'));
    }

    public function destroy($id){

      $category = $this->categoryModel::findorfail($id);
      if($category){

        $category->delete();
      }
      Alert::success('success', 'category deleted  Successfully');
      return redirect(route('Admin.category.index'));

    }
}   

