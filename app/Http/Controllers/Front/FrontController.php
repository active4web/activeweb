<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OurWork;
use Illuminate\Database\Eloquent\Model;

class FrontController extends Controller
{ 
    protected $bannerModel;
    protected $serviceModel;
    protected $blogModel;
    protected $ourWorkModel;

    public function __construct(Banner $banners ,Service $services,Blog $blogs,OurWork $ourWorks)
    {
        $this->bannerModel=$banners;
        $this->serviceModel=$services;
        $this->blogModel =$blogs;
        $this->ourWorkModel =$ourWorks;
    }
    public function index(){

        $banners =$this->bannerModel::get();
        $services =$this->serviceModel::get();
        $blogs =$this->blogModel::get();
        $ourworks =$this->ourWorkModel::get();
     
        return view('index',compact('banners','services','blogs','ourworks'));
    }

    public function about(){
        return view('front.pages.about');
    }

    public function blog(){
        $blogs =$this->blogModel::get();
        return view('front.pages.blog',compact('blogs'));
    }

    public function blogDetails(){
        return view('front.pages.blog-details');
    }

    public function contactUs(){
        return view('front.pages.contact-us');
    }

    public function ourWorks(){
        $ourworks =$this->ourWorkModel::get();
        return view('front.pages.our-works',compact('ourworks'));
    }

    public function ourWorksDetails(){
        return view('front.pages.our-works-details');
    }

    public function services(){
        $services =$this->serviceModel::get();
        return view('front.pages.service',compact('services'));
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
