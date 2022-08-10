@extends('front.layouts.master')

@section('title')

Services - خدماتنا

@endsection

@section('css')

@endsection 


@section('content')  
       
      <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('assets/front/img/header-bg-5.jpg')}})no-repeat center center / cover">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
              <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
              <h1 class="text-white mb-0">{{trans('front.services')}}</h1></h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="{{route('Front.index')}}">{{trans('front.Home')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">{{trans('front.pages')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">{{trans('front.services')}}</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <div class="servicescon">

        <section class="service pad-tb bg-gradient5">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="image-block wow ">
                  <img src="{{ asset('assets/front/img/service-summary-3.png')}}"  class="img-fluid no-shadow">
                </div>
              </div>
              <div class="col-lg-7 block-1">
                <div class="common-heading text-l pl25">
                  <div class="normall default-color table-color">
                    <h2 class="h3 pb-10 orange-color"> {{$service->getTranslation('title',\App::getLocale())}} </h2>
                    <p>{!!  $service->getTranslation('description',\App::getLocale()) !!}</p>
               
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="service-block bg-gradient6 pad-tb">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-9">
                <div class="section-heading text-center">
                  <strong class="color-secondary">الخدمات   </strong>
                  <h2>نحن نقدم خدمات أفضل</h2>
                  <span class="animate-border mr-auto ml-auto mb-4"></span>
                  <p>نحن نفكر بشكل كبير ولدينا أيدي في جميع منصات التكنولوجيا الرائدة لنقدم لك مجموعة واسعة من الخدمات.</p>
                </div>
              </div>
            </div>

            <div class="row upset link-hover">




            @foreach($service->serviceDetails as $servicedetail)
              <div class="col-lg-6 col-sm-6 mt30">
                <div class="s-block wide-sblock">
                  <div class="s-card-icon-large">
                    <img src="{{ asset('images/servicedetail/'.$servicedetail->image)}}" class="img-fluid">
                  </div>
                    <div class="s-block-content-large">
                    <h4>{{$servicedetail->getTranslation('title',\App::getLocale())}} </h4>
                    <p>{{$servicedetail->getTranslation('description',\App::getLocale())}}</p>
                    </div>
                </div>
              </div>
              @endforeach
          
            </div><!-- row upset link-hover -->
          </div><!-- container -->
        </section>

       
        
      </div>

     


   

 @endsection