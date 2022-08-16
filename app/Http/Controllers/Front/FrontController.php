<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\About;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\OurWork;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Category;
use App\Models\AboutStep;
use App\Models\PagesBanner;
use App\Models\ServiceStep;
use Illuminate\Http\Request;
use App\Models\ClientComment;
use App\Models\ClientContact;
use App\Models\ServiceComment;
use App\Models\ServiceRequest;
use App\Models\TechnicalSupport;
use CreateTechnicalSupportsTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ClientCommentRequest;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\CreateServiceRequestRequest;
use App\Http\Requests\Contact\CreateContactRequest;
use App\Http\Requests\CreateTechnicalSupportRequest;
use App\Models\AboutGoal;

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
    protected $serviceRequestModel;
    protected $serviceCommentModel;
    protected $clientCommentModel;
    protected $clientContactModel;
    protected $serviceStepModel;
    protected $pagesBannerModel;
    protected $aboutGoalModel;

    public function __construct(
        Setting $setting,
        Banner $banners,
        Service $services,
        Blog $blogs,
        OurWork $ourWorks,
        Contact $contact,
        Category $category,
        About $about,
        AboutStep $aboutstep,
       ServiceRequest $servicerequest,
       ServiceComment $servicecomments,
       ClientComment $clientcomment,
        ClientContact $clientcontact,
        ServiceStep $serviceStep,
        PagesBanner $pagesBanner,
        AboutGoal  $aboutGoal,
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
        $this->serviceRequestModel= $servicerequest;
        $this->serviceCommentModel=$servicecomments;
        $this->clientCommentModel=$clientcomment;
        $this->clientContactModel=$clientcontact;
        $this->serviceStepModel=$serviceStep;
        $this->pagesBannerModel=$pagesBanner;
        $this->aboutGoalModel=$aboutGoal;
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
        $aboutgoals     =      $this->aboutGoalModel::get();
        $banner        =      $this->pagesBannerModel::where('title','aboutus')->first();
          return view('front.pages.about',compact('about','aboutSteps','aboutgoals','banner'));
    }

    public function blog()
    {
        $banner        =      $this->pagesBannerModel::where('title','blogs')->first();
        $blogs = $this->blogModel::get();
        $categories = $this->categoryModel::get();
        return view('front.pages.blog', compact('categories', 'blogs','banner'));
    }

    public function blogDetails($id)
    {
        $banner        =      $this->pagesBannerModel::where('title','blogs')->first();
        $blogs = $this->blogModel::take(4)->orderBy('id', 'DESC')->get();
        $blog = $this->blogModel::where('id',$id)->with('blogDetails', 'blogComponents')->first();    
        $categories = $this->categoryModel::get();
        return view('front.pages.blog-details', compact('categories', 'blogs', 'blog','banner'));
    }

    public function contactUs()
    {
        $banner        =      $this->pagesBannerModel::where('title','contactus')->first();
        $setting =  $this->settingModel::first();
        return view('front.pages.contact-us', compact('setting','banner'));
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
        $banner        =      $this->pagesBannerModel::where('title','ourworks')->first();
        $ourworks = $this->ourWorkModel::get();
        return view('front.pages.our-works', compact('ourworks','banner'));
    }

    public function ourWorksDetails($id)
    {
        $banner        =      $this->pagesBannerModel::where('title','ourworks')->first();
        $work= $this->ourWorkModel::where('id',$id)->with('ourWorkDetails')->first();
        $blogs = $this->blogModel::take(4)->orderBy('id', 'DESC')->get();
        $categories = $this->categoryModel::get();
        return view('front.pages.our-works-details',compact('blogs','categories','work','banner'));
    }

    public function services()
    {
        $banner        =      $this->pagesBannerModel::where('title','services')->first();
        $services = $this->serviceModel::get();
        $servicessteps= $this->serviceStepModel::get();
        return view('front.pages.service', compact('services','servicessteps','banner'));
    }

    public function myServices($id)
    {  
        $banner        =      $this->pagesBannerModel::where('title','services')->first();
         $servicerequest= $this->serviceRequestModel::where('id',$id)->with('services','users','clientComments')->first();
         $servicecomments= $this->serviceCommentModel::where('service_id',$id)->get();
        return view('front.pages.my-services',compact('servicerequest','servicecomments','banner'));
    }

    public function serviceDetails($id)
    {
        $banner        =      $this->pagesBannerModel::where('title','services')->first();
        $service = $this->serviceModel::where('id',$id)->with('serviceDetails')->first();
        return view('front.pages.service-details',compact('service','banner'));
    }

    public function serviceRequest()
    {
        $banner        =      $this->pagesBannerModel::where('title','services')->first();
        $services = $this->serviceModel::get();
        return view('front.pages.Request-new-service',compact('services','banner'));
    }
    public function serviceRequestStore(CreateServiceRequestRequest $request){

      $service = $this->serviceRequestModel::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id,
            'service_id' => $request->service_id,
        ]);
        
        return redirect(route('Front.service.request.details'));
    }
    
    public function serviceRequestDetails()
    {  
        $banner        =      $this->pagesBannerModel::where('title','services')->first();
        $servicerequests= $this->serviceRequestModel::where('user_id',auth()->user()->id)->with('services')->get();
       
        return view('front.pages.service-request-details',compact('servicerequests','banner'));
    }
   
    public function technicalSupportRegister()
    {
        $banner        =      $this->pagesBannerModel::where('title','technicalsupport')->first();
        return view('front.pages.Technical-support-and-register',compact('banner'));
    }
    public function technicalSupportLogin()
    {
        $banner        =      $this->pagesBannerModel::where('title','technicalsupport')->first();
        return view('front.pages.Technical-support-and-login',compact('banner'));
    }

    public function clientComment( ClientCommentRequest $request){
     $comment= $this->clientCommentModel::create([
           'comment' => $request->comment,
           'service_request_id'=> $request->servicerequest_id
     ]);
     return redirect()->back();
    }

   public function clientConatct(){
    $banner        =      $this->pagesBannerModel::where('title','contactus')->first();
    return view('front.pages.Communicate-with-management',compact('banner'));
   }
   
   public function clientConatctStore(Request $request){
    $contact = $this->clientContactModel::create([
       
        'message' => $request->message,
        'user_id' => Auth::user()->id ,
    ]);
    return redirect(route('Front.service.request.details'));
   }
}
