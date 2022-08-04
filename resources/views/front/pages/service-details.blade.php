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
                <h1 class="text-white mb-0">جميع خدماتنا</h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="index.html">الرئسية</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">الصفحات</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">الخدمات</li>
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
                    <h2 class="h3 pb-10 orange-color"> تصميم وتطوير المواقع الالكترونية </h2>
                    <p>علشان تحقق نسبه ارباحك وتقدر ترتب شغلك باحترافية هنقدملك الوسائل المساعدة ليك<br>هنوفرلك ادوات تساعدك على ادارة مشروعك والبزنس بتاعك<br>    وكمان بنوفرلك خدمة الدعم الفني ما بعد البيع  </p>
                    <ul class="ullistmb30">
                      <li>خدمة تصميم المواقع  </li>
                      <li>خدمة تصميم تطبيقات الموبايل  </li>
                      <li>نظام شئون الموظفين  </li>
                      <li>نظام الحسابات والمخزون  </li>
                      <li>نظام المناديب وخدمات توصيل الطلبات  </li>
                      <li>نظام ادارة مكاتب المحاماة </li>
                      <li>نظام ادارة مكاتب العقارات  </li>
                    </ul>
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

              <div class="col-lg-6 col-sm-6 mt30">
                <div class="s-block wide-sblock">
                  <div class="s-card-icon-large">
                    <img src="{{ asset('assets/front/img/mob-service-item2.png')}}" class="img-fluid">
                  </div>
                    <div class="s-block-content-large">
                    <h4>تطوير تطبيقات iOS</h4>
                    <p>هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.</p>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 mt30">
                <div class="s-block wide-sblock">
                  <div class="s-card-icon-large">
                    <img src="{{ asset('assets/front/img/mob-service-item1.png')}}" class="img-fluid">
                  </div>
                    <div class="s-block-content-large">
                    <h4>تطوير تطبيقات أندرويد</h4>
                    <p>هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.</p>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 mt30">
                <div class="s-block wide-sblock">
                  <div class="s-card-icon-large">
                    <img src="{{ asset('assets/front/img/mob-service-item3.png')}}" class="img-fluid">
                  </div>
                    <div class="s-block-content-large">
                    <h4>تطوير التطبيقات القابلة للارتداء</h4>
                    <p>هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.</p>
                    </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-6 mt30">
                <div class="s-block wide-sblock">
                  <div class="s-card-icon-large">
                    <img src="{{ asset('assets/front/img/mob-service-item4.png')}}" class="img-fluid">
                  </div>
                    <div class="s-block-content-large">
                    <h4>تطوير التطبيقات عبر الأنظمة الأساسية</h4>
                    <p>هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد.</p>
                    </div>
                </div>
              </div>
            </div><!-- row upset link-hover -->
          </div><!-- container -->
        </section>

       
        
      </div>

     


   

 @endsection