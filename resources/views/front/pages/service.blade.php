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

        <section class="servicesdd ptb-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-9">
                <div class="section-heading text-center">
                  <strong class="color-secondary">جميع الخدمات</strong>
                  <h2>نحن نقدم خدمات أفضل</h2>
                  <span class="animate-border mr-auto ml-auto mb-4"></span>
                  <p class="lead">إعادة اختراع رأس المال البشري متعدد الوحدات عالميًا في حين أن المحفزات الافتراضية للتغيير. شبكة طرق دقيقة للتمكين بشكل حازم بدلاً من التحسينات التي تركز على العميل.</p>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fas fa-mobile fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> تصميم تطبيقات الهواتف   </a></h5>
                  <p>لدينا خبره كبيره في تصميم تطبيقات الهواتف وفريق عمل مميز</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fas fa-laptop fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> تصميم مواقع الانترنت   </a></h5>
                  <p>تهتم تك سوفت باخراج مواقع لعملائها بالوان عصريه وجذابه</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fas fa-video fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> تصميم فيديوهات الموشن   </a></h5>
                  <p>فيديو الموشن جرافيك يعتبر من اسهل الطرق الدعائيه للتطبيقات وكل انواع الشركات</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fas fa-desktop fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> التصميم والبرمجه   </a></h5>
                  <p>نستخدم تقنيات حديثه ومتنوعه جدا وموثقه من شركة ابل وجوجل لان هدفنا اخراج مشاريع احترافيه</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fab fa-sketch fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> تطبيقات متنوعه   </a></h5>
                  <p>جميع التخصصات ( المتاجر – الجي بي إس – الإعلانية – المدارس والتعليم – السوبر ماركت – العقارية ) …</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fas fa-layer-group fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> استخدام احدث التقنيات   </a></h5>
                  <p>دائما نواكب التطور التكنولوجي ونستخدم احدث التقنيات في البرمجه والتصميم</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fas fa-bezier-curve fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> الاستضافه والسرفرات   </a></h5>
                  <p>نقدم لعملائها كل انواع الاستضافات والكلود والسرفرات بعروض واسعار متنوعه</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fas fa-democrat fa-fw"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> دعم فني مستمر   </a></h5>
                  <p>لدينا دعم فني مميز ومستمر لحل كل المشاكل فورا والاجابه علي كل اسئلة واستفسارات عملائنا الكرام</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                    <i class="fa  fa-code"></i>
                  </div>
                  <h5><a href="{{route('Front.services-details')}}"> التحليل الفني   </a></h5>
                  <p>لدينا فريق عمل من المهندسين التقنيين المتخصصين في التحليل الفني للمشروعات</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
            </div>
       
          </div>
        </section>

        <section class="service-block pad-tb light-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-9">
                <div class="section-heading text-center">
                  <strong class="color-secondary">معالجة  </strong>
                  <h2>عملية تطوير التطبيق لدينا</h2>
                  <span class="animate-border mr-auto ml-auto mb-4"></span>
                  <p>تتبع عملية التصميم لدينا نهجًا مثبتًا. نبدأ بفهم عميق لاحتياجاتك وإنشاء نموذج تخطيط.</p>
                </div>
              </div>
            </div>

            <div class="row upset justify-content-center mt60">
              <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                  <img src="{{ asset('assets/front/img/process-1.png')}}" alt="Process" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-7 v-center order2">
                <div class="ps-block">
                  <span>1</span>
                  <h3>جمع شرط</h3>
                  <p class="mb30">نحن نفكر بشكل كبير ولدينا أيدي في جميع منصات التكنولوجيا الرائدة لنقدم لك مجموعة واسعة من الخدمات.</p>
                </div>
              </div>
            </div>
            <div class="row upset justify-content-center mt60">
              <div class="col-lg-7 v-center order2">
                <div class="ps-block">
                  <span>2</span>
                  <h3>النموذج المبدئي</h3>
                  <p class="mb30">نحن نفكر بشكل كبير ولدينا أيدي في جميع منصات التكنولوجيا الرائدة لنقدم لك مجموعة واسعة من الخدمات.</p>
                </div>
              </div>
              <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                  <img src="{{ asset('assets/front/img/process-2.png')}}" alt="Process" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="row upset justify-content-center mt60">
              <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                  <img src="{{ asset('assets/front/img/process-3.png')}}" alt="Process" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-7 v-center order2">
                <div class="ps-block">
                  <span>3</span>
                  <h3>تعيين</h3>
                  <p class="mb30">نحن نفكر بشكل كبير ولدينا أيدي في جميع منصات التكنولوجيا الرائدة لنقدم لك مجموعة واسعة من الخدمات.</p>
                </div>
              </div>
            </div>
            <div class="row upset justify-content-center mt60">
              <div class="col-lg-7 v-center order2">
                <div class="ps-block">
                  <span>4</span>
                  <h3>الدعم الفني والتواصل لحل مشلكة</h3>
                  <p class="mb30">نحن نفكر بشكل كبير ولدينا أيدي في جميع منصات التكنولوجيا الرائدة لنقدم لك مجموعة واسعة من الخدمات.</p>
                </div>
              </div>
              <div class="col-lg-4 v-center order1">
                <div class="image-block1">
                  <img src="{{ asset('assets/front/img/process-4.png')}}" alt="Process" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </section>
        
      </div>
@endsection