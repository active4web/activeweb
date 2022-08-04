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

     


    <section class="blog-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 px-0">
            <div class="contentblog">
              <div class="blog-header">
                <h1>العلياني  </h1>
                <div class="row mt20 mb20">
                  <div class="media col-md-6 col-12">
                    <h5><i class="far fa-smile-wink"></i>العلياني  </h5>
                  </div>
                  <div class="media-body user-info col-md-6 col-12">
                    <p><i class="far fa-calendar-alt"></i>7 أغسطس 2020</p>
                  </div>
             
                </div>
              </div><!-- blog-header -->
              <div class="image-set"><img src="{{ asset('assets/front/img/39.jpg')}}" class="img-fluid"></div>
              <div class="span8">
                <h4 class="visible-desktop">العلياني</h4>
                <p>قمنا بتصميم وبرمجة تطبيق خاص بشركة العلياني لخدمات حجاج الداخل بدولة المملكة العربية السعودية ، وهو تطبيق يخدم كل حجاج الحملة ويعرض لهم كل ما يخصهم أثناء أدائهم لفريضة الحج </p>
                <ul class="ul-list mb30">
                  <li>يعطيك كل القوائم الماليه التي تحتاجها لاتخاذ قرارتك.</li>
                  <li>يساعدك في دراسة منتجاتك فهو يظهر لك اكثر الاصناف مبيعا واقلها مبيعا.</li>
                  <li>يرتب تصنيفات مكتبتك داخل المخزن.</li>
                  <li>يدعم نظام الباركود لسهولة ترتيب أصنافك فى البرنامج.</li>
                  <li>دعم نظام المخازن و المخازن الفرعية.</li>
                  <li>دعم نظام الخزينة وادارة المصاريف الاضافية.</li>
                  <li>نظام الفواتير وامكانية البحث عنها.</li>
                  <li>سهولة إستخراج التقارير.</li>
                  <li>مستويات المستخدمين لتمكنك من تخصيص امكانيات لكل مستخدم.</li>
                  <li>حسابات العملاء و الموردين.</li>
                  <li>حسابات البنوك و أوراق الدفع و القبض.</li>
                  <li>يعمل علي جميع الطبعات وجميع المقاسات.</li>
                  <li>يدعم اجهزه الباركود.</li>
                  <li>يدعم Windows XP – Windows Vista – Windows 7 – Windows server – Windows8.</li>
                </ul>

              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 mt30 mb30">
                  <div class="blog-post-tag">
                    <span>لعلامات ذات الصلة</span>
                    <a href="#">يدعم اجهزه الباركود</a>
                    <a href="#">أوراق الدفع و القبض   </a>
                    <a href="#">حسابات العملاء و الموردين</a>
                  </div>
                </div>
          
              </div>
            </div>
          </div><!-- col-lg-9 -->
          <div class="col-lg-4 col-md-12">
            <aside class="blog-sidebar">

              <div class="widget mb-30">
                <h3 class="widget-title">كائنات البحث</h3>
                <div class="sidebar-form">
                  <form action="#">
                    <input type="text" placeholder="البحث هنا">
                    <button><i class="fas fa-search"></i></button>
                  </form>
                </div><!-- sidebar-form -->
              </div><!-- widget mb-30 -->
              <div class="widget mb-30">
                <h3 class="widget-title">المشاركات الاخيرة</h3>
                <div class="rc-post">
                  <ul>
                    <li>
                      <a href="blog-details.html">
                        <div class="rc-post-thumb">
                          <img src="{{ asset('assets/front/img/library-225x169.png')}}" alt="img">
                        </div>
                        <div class="rc-post-content">
                          <h5>رنامج مكتبات المحاسب العربى  </h5>
                          <span><i class="far fa-calendar-alt"></i> 17 أغسطس 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <div class="rc-post-thumb">
                          <img src="{{ asset('assets/front/img/library-225x169.png')}}" alt="img">
                        </div>
                        <div class="rc-post-content">
                          <h5>برنامج ادرة شركات الكمبيوتر و الصيانة المحاسب العربى</h5>
                          <span><i class="far fa-calendar-alt"></i> 17 أغسطس 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <div class="rc-post-thumb">
                          <img src="{{ asset('assets/front/img/library-225x169.png')}}" alt="img">
                        </div>
                        <div class="rc-post-content">
                          <h5>برنامج مستلزمات طبية المحاسب العربى</h5>
                          <span><i class="far fa-calendar-alt"></i> 17 أغسطس 2020</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="blog-details.html">
                        <div class="rc-post-thumb">
                          <img src="{{ asset('assets/front/img/library-225x169.png')}}" alt="img">
                        </div>
                        <div class="rc-post-content">
                          <h5>برنامج مراحل التصنيع والانتاج المحاسب العربى</h5>
                          <span><i class="far fa-calendar-alt"></i> 17 أغسطس 2020</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div><!-- rc-post -->
              </div><!-- widget mb-30 -->
              <div class="widget mb-30">
                <h3 class="widget-title">التصنفيات</h3>
                <div class="sidebar-cat">
                  <ul>
                    <li><a href="#">خدمة تصميم المواقع <span>26</span></a></li>
                    <li><a href="#">خدمة تصميم المتاجر الالكترونية <span>30</span></a></li>
                    <li><a href="#">خدمة تصميم تطبيقات الموبايل <span>56</span></a></li>
                    <li><a href="#">نظام شئون الموظفين<span>60</span></a></li>
                    <li><a href="#">نظام الحسابات والمخزون<span>60</span></a></li>
                    <li><a href="#">نظام المناديب وخدمات توصيل الطلبات<span>60</span></a></li>
                    <li><a href="#">نظام ادارة مكاتب المحاماة <span>60</span></a></li>
                  </ul>
                </div>
              </div><!-- widget mb-30 -->
            </aside>
          </div>
        </div>
      </div>
    </section>  


@endsection