@extends('front.layouts.master')

@section('title')

OurWorks  - اعمالنا

@endsection

@section('css')

@endsection 


@section('content')

       
      <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('assets/front/img/header-bg-5.jpg')}})no-repeat center center / cover">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
              <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                <h1 class="text-white mb-0">جميع اعمالنا</h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="index.html">الرئسية</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">الصفحات</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">اعمالنا</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <div class="our-workscob">
         <section class="our-works sec-pad py-5" id="our-work">
        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
              <div class="section-heading text-center">
                <strong class="color-secondary">اعملنا  </strong>
                <h2>نحن نقدم خدمات أفضل</h2>
               <span class="animate-border mr-auto ml-auto mb-4"></span>
                <p class="lead">إعادة اختراع رأس المال البشري متعدد الوحدات عالميًا في حين أن المحفزات الافتراضية للتغيير. شبكة طرق دقيقة للتمكين بشكل حازم بدلاً من التحسينات التي تركز على العميل.</p>
              </div>
            </div>
          </div>

          <div class="works-content">

            <div class="works my-5">
           @foreach($ourworks as $ourwork)
              <div class="grid-item">
                   
                <div class="work-item">
                  <a href="{{route('Front.ourworks.details',$ourwork->id)}}">
                    <img src="{{ asset('images/ourwork/'.$ourwork->image)}}">
                    <div class="div-overlay">
                      <h4 class="fw-bold">{{$ourwork->getTranslation('title',\App::getLocale())}}</h4>
                      <p>{{$ourwork->getTranslation('description',\App::getLocale())}}</p>
                    </div>
                  </a>
                </div><!--1-->
               
              </div>
                 @endforeach 
              
            </div>

            <div class="pagination-wrap mt-50">
              <ul>
                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
              </ul>
            </div>
           
          </div>
        </div>
      </section>

       
        
      </div>

     


   @endsection