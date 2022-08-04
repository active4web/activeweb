@extends('front.layouts.master')

@section('title')



@endsection

@section('css')

@endsection 


@section('content')

      <section class="hero-section ptb-100 gradient-overlay" style="background:  url({{ asset('assets/front/img/header-bg-5.jpg')}}no-repeat center center / cover">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
              <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                <h1 class="text-white mb-0">التواصل مع الادارة</h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="index.html">الرئسية</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">الصفحات</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">التواصل مع الادارة</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <div class="formrequestnew">
        <div class="container">

          <div class="row justify-content-center"> 
            <div class="col-lg-9 col-md-9 px-0 contact-form">

              <div class="left-sec contact-page">
                <h2 class="titleopo">للتواصل مع ادارة </h2>
                
                <form class="form-contact">

                  <div class="form-group form-focus">
                    <label class="control-label">اسم العميل</label>
                    <input class="form-control floating" type="text">
                  </div>

                  <div class="form-group form-focus">
                    <label class="control-label">رقم التليفون</label>
                    <input class="form-control floating" type="text">
                  </div>
                  <div class="form-group form-focus">
                    <label class="control-label">البريد  الالكتروني</label>
                    <input class="form-control floating" type="email">
                  </div>
                  <div class="form-group">
                     <label class="control-label">اكتب رسالتك</label>
                    <textarea name="message"></textarea>
                  </div>

                  <a class="btn btn--primary" href="{{route('Front.service.request.details')}}"> ارسال </a>
                </form>                 
              </div>
            </div>
          </div>


          
        </div><!-- container -->
      </div><!-- formrequestnew -->


 

     

@endsection