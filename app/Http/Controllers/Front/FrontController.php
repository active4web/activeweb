<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\OurWork;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\Contact\CreateContactRequest;
use App\Models\About;
use App\Models\AboutStep;
use App\Models\Category;

class FrontController extends Controller
{
    protected $settingModel;
    protected $bannerModel;
    protected $serviceModel;
    protected $blogModel;
    protected $ourWorkModel;
    protected $contactModel;
    protected $categoryModel;
    protected $aboutModel;
    protected $aboutStepModel;

    public function __construct(
        Setting $setting,
        Banner $banners,
        Service $services,
        Blog $blogs,
        OurWork $ourWorks,
        Contact $contact,
        Category $category,
        About $about,
        AboutStep $aboutstep
    ) {
        $this->settingModel = $setting;
        $this->bannerModel = $banners;
        $this->serviceModel = $services;
        $this->blogModel = $blogs;
        $this->ourWorkModel = $ourWorks;
        $this->contactModel = $contact;
        $this->categoryModel = $category;
        $this->aboutModel = $about;
        $this->aboutStepModel = $aboutstep;
    }
    public function index()
    {

        $banners    =        $this->bannerModel::get();
        $services   =        $this->serviceModel::get();
        $blogs      =        $this->blogModel::get();
        $ourworks   =        $this->ourWorkModel::get();
        $about    =        $this->aboutModel::first();

        return view('index', compact('banners', 'services', 'blogs', 'ourworks', 'about'));
    }

    public function about()
    {
        $about         =      $this->aboutModel::first();
        $aboutSteps    =      $this->aboutStepModel::get();
          return view('front.pages.about',compact('about','aboutSteps'));
    }

    public function blog()
    {
        $blogs = $this->blogModel::get();
        $categories = $this->categoryModel::get();
        return view('front.pages.blog', compact('categories', 'blogs'));
    }

    public function blogDetails($id)
    {
        $blogs = $this->blogModel::take(4)->orderBy('id', 'DESC')->get();
        $blog = $this->blogModel::where('id',$id)->with('blogDetails', 'blogComponents')->first();    
        $categories = $this->categoryModel::get();
        return view('front.pages.blog-details', compact('categories', 'blogs', 'blog'));
    }

    public function contactUs()
    {
        $setting =  $this->settingModel::first();
        return view('front.pages.contact-us', compact('setting'));
    }
    public function storeContactUs(CreateContactRequest $request)
    {
        $contact = $this->contactModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect()->back();
    }

    public function ourWorks()
    {
        $ourworks = $this->ourWorkModel::get();
        return view('front.pages.our-works', compact('ourworks'));
    }

    public function ourWorksDetails($id)
    {
        $work= $this->ourWorkModel::where('id',$id)->with('ourWorkDetails')->first();
        $blogs = $this->blogModel::take(4)->orderBy('id', 'DESC')->get();
        $categories = $this->categoryModel::get();
        return view('front.pages.our-works-details',compact('blogs','categories','work'));
    }

    public function services()
    {
        $services = $this->serviceModel::get();
        return view('front.pages.service', compact('services'));
    }

    public function myServices()
    {
        return view('front.pages.my-services');
    }

    public function serviceDetails($id)
    {
        $service = $this->serviceModel::where('id',$id)->with('serviceDetails')->first();
        return view('front.pages.service-details',compact('service'));
    }

    public function serviceRequest()
    {
        return view('front.pages.Request-new-service');
    }

    public function serviceRequestDetails()
    {
        return view('front.pages.service-request-details');
    }
}
