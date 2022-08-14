@extends('front.layouts.master')

@section('title')



@endsection

@section('css')

@endsection 


@section('content')
    <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('assets/front/img/header-bg-5.jpg')}})no-repeat center center / cover">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7">
            <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
              <h1 class="text-white mb-0">دعم فني وطلب خدمة</h1>
              <div class="custom-breadcrumb">
                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                  <li class="list-inline-item"><a href="index.html">الرئسية</a><i class="fas fa-angle-right fa-fw"></i></li>
                  <li class="list-inline-item"><a href="#">الصفحات</a><i class="fas fa-angle-right fa-fw"></i></li>
                  <li class="list-inline-item active">دعم  فني وطلب خدمة</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




      <div class="main-techince" >
        <section class="contact-sec-two sec-title pb-0">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-5 px-0 contact-form">
                <div class="left-sec contact-page">
                  <h2 class="titleopo">سجل الان</h2>
                  
                  <form class="form-contact" action="{{route('client-register')}}" method="post">
                    @csrf


                    <div class="form-group form-focus">
                    <label class="control-label">اسم العميل</label>
                    <input class="form-control floating" type="text" name="name" value="{{old('name')}}">
                  </div>

                  <div class="form-group form-focus">
                    <label class="control-label">البريد  الالكتروني</label>
                    <input class="form-control floating" type="email" name="email"value="{{old('email')}}">
                  </div>
                    <div class="form-group form-focus">
                      <label class="control-label">رقم العميل</label>
                      <input class="form-control floating" type="text" name="phone" value="{{old('phone')}}">
                    </div>

                    <div class="form-group form-focus">
                      <label class="control-label">باسورد</label>
                      <input class="form-control floating" type="password" name="password">
                    </div>
                    <button class="btn btn--primary"  type="submit">تسجيل</a>
                  </form>                 
                </div><!-- left-sec contact-page -->
              </div><!-- col-lg-7 col-md-7 pr-0 contact-form -->
            </div><!-- row justify-content-center -->
          </div><!-- container -->
        </section>
      </div>



@endsection