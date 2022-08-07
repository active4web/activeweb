<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class FrontController extends Controller
{ 
    protected $bannerModel;
    protected $serviceModel;
    protected $blogModel;

    public function __construct(Banner $banners ,Service $services,Blog $blogs)
    {
        $this->bannerModel=$banners;
        $this->serviceModel=$services;
        $this->blogModel =$blogs;
    }
    public function index(){

        $banners =$this->bannerModel::get();
        $services =$this->serviceModel::get();
        $blogs =$this->blogModel::get();
     
        return view('index',compact('banners','services','blogs'));
    }

    public function about(){
        return view('front.pages.about');
    }

    public function blog(){
        return view('front.pages.blog');
    }

    public function blogDetails(){
        return view('front.pages.blog-details');
    }

    public function contactUs(){
        return view('front.pages.contact-us');
    }

    public function ourWorks(){
        return view('front.pages.our-works');
    }

    public function ourWorksDetails(){
        return view('front.pages.our-works-details');
    }

    public function services(){
        return view('front.pages.service');
    }

    public function myServices(){
        return view('front.pages.my-services');
    }

    public function serviceDetails(){
        return view('front.pages.service-details');
    }

    public function serviceRequest(){
        return view('front.pages.Request-new-service');
    }

    public function serviceRequestDetails(){
        return view('front.pages.service-request-details');
    }
}
