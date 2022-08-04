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

      <section class="section-spaces">
        <div class="container">

          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
              <div class="section-heading text-center">
                <strong class="color-secondary">خدماتي</strong>
                <h2>ما الذي يجعلنا الأفضل في البرمجة التسويق الرقمي</h2>
                <span class="animate-border mr-auto ml-auto mb-4"></span>
                <p class="lead">ابدأ العمل مع شركة يمكنها توفير كل ما تحتاجه لزيادة الوعي , جذب حركة المرور والتواصل مع العملاء وزيادة المبيعات.</p>
              </div>
            </div>
          </div>

          <div class="populated-inner-wrap">
            <div class="row populated">
              <div class="col-lg-4 col-md-6 col-sm-12 pr-0">
                <div class="about-info-list left-right">
                  <ul>
                    <li>
                      <div class="about-info-icon">
                        <i class="fas fa-seedling"></i>
                      </div>
                      <div class="about-info-content">
                        <a href="my-services.html">
                          <h6>خدماتي</h6>
                          <p>المحاربون القدامى في مجال التكنولوجيا والمهوسون والمهووسون جميعًا على أهبة الاستعداد لتحسين تجربتك. سواء كنت على اتصال بدعمنا ، أو اقرأ قاعدة المعرفة الخاصة بنا ، أو تبدأ موضوعًا.</p>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="about-info-icon">
                        <i class="fab fa-wolf-pack-battalion"></i>
                      </div>
                      <div class="about-info-content">
                        <a href="Request-new-service.html">
                          <h6>طلب  خدمة  جديدة</h6>
                          <p>مع مواقع مراكز البيانات المتعددة ، والتبريد الزائد ، ومولدات الطوارئ ، والمراقبة المستمرة ، نحن قادرون على تقديم ضمان وقت التشغيل بنسبة 100٪.</p>
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div><!-- col-lg-4 order-1 col-md-6 col-sm-8 -->
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="about-img">
                  <img src="public/img/work-img.png">
                </div>
              </div><!-- col-lg-4 order-0 order-lg-2 -->
              <div class="col-lg-4 col-md-6 col-sm-12 pl-0">
                <div class="about-info-list ">
                  <ul>
                    <li>
                      <div class="about-info-icon">
                        <i class="fas fa-cannabis"></i>
                      </div>
                      <div class="about-info-content">
                        <a href="Communicate-with-management.html">
                          <h6>التواصل مع ادارة</h6>
                          <p>تمنحك لوحة التحكم البديهية الخاصة بنا وصولاً إداريًا إلى جميع منتجات DreamHost الخاصة بك. قم بتحديث معلومات المجال بسهولة ، أضف مستخدمين ، واضبط إعدادات البريد الإلكتروني ، واكتسب حق الوصول.</p>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="about-info-icon">
                        <i class="fas fa-tractor"></i>
                      </div>
                      <div class="about-info-content">
                        <a href="Social-Media.html ">
                          <h6>سوشيال ميديا</h6>
                          <p>لا حاجة للبحث في مجموعة من الوثائق. ما عليك سوى تثبيت تطبيقات الويب مثل WordPress و Joomla! و اكثر. إدارة الفرص السليمة اقتصاديًا بشكل أحادي.</p>
                        </a>
                      </div>
                    </li>

                  </ul>
                </div>
              </div><!-- col-lg-4 order-3 col-md-6 col-sm-8 -->
            </div><!-- row align-items-center justify-content-center -->

          </div><!-- populated-inner-wrap -->
        </div><!-- container -->
      </section>




@endsection