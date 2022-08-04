@extends('front.layouts.master')
@section('title')
@endsection

@section('css')

@endsection 


@section('content')
     
<div class="main-slide">
        <div id="sync1" class="owl-carousel owl-theme">
          @foreach($banners as $banner)
          <div class="item">
            <div class="back12">
              <img src="{{asset('images/banner/'.$banner->image)}}">
            </div>
          </div>
          @endforeach
          
        </div><!-- sync1 -->
      </div><!-- main-slide -->
      
<section class="about-section">
    
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="left-content">
                <img src="{{ asset('assets/front/img/bout-pic.png')}}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="about-content">
                <div class="sec-title">
                  <span class="line"></span>
                  <span class="line-text">من نحن</span>
                </div>
                <h2 class="h2">اكتيف ويب للحلول الذكية.</h2>
                <p class="text-p">اكتيف ويب هي شركة متخصصة في تصميم وبرمجة تطبيقات الهواتف الذكية بخبرة طويلة وفريق عمل متميز يقدم لك أقوى وأحدث التصميمات.  حن شركة متخصصة فى حلول الويب: تصميم وتطوير مواقع التسويقية</p>
                <ul>
                  <li>إذا لم يتمكن محرك بحث Google من الزحف إلى موقعك ، فلن يتم ترتيبه - لكن هذا لا يعني تجنب جافا سكريبت.</li>
                  <li>للشركات التي تبيع المنتجات عبر الإنترنت وتحسن قوائم منتجاتها في نتائج البحث.</li>
                  <li>إذا كنت تستثمر في موقع ويب جديد ، فمن المهم التأكد من أنه مصمم لتحقيق النجاح في نتائج البحث أيضًا.</li>
                  <li>إذا لم يتمكن محرك بحث Google من الزحف إلى موقعك ، فلن يتم ترتيبه - لكن هذا لا يعني تجنب جافا سكريبت.</li>
                </ul>
                <a href="{{route('Front.about')}}" class="btn btn-primary">مشاهده المزيد</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="servicesdd ptb-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
              <div class="section-heading text-center">
                <strong class="color-secondary">خدماتنا</strong>
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
          <div class="text-center">
            <a href="{{route('Front.services')}}" class="btn btn-primary">عرض كل الخدمات</a>
          </div>
        </div>
      </section>

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

          <div class="sliderleft"><i class="fas fa-angle-left"></i></div>
          <div class="sliderright"><i class="fas fa-angle-right"></i></div>
          <div id="clintgallery" class="owl-carousel owl-theme">
            <div class="masonry-item  m-b30 port-item" >
              <div class="image-effect-two hover-shadow item-img-wrap">
                <img src="{{ asset('assets/front/img/1-al haj.png')}}" class="img-responsive">
                <div class="figcaption item-img-overlay">
                  <h4 class="fw-bold">العلياني</h4>
                  <p>قمنا بتصميم وبرمجة تطبيق خاص بشركة العلياني لخدمات حجاج الداخل بدولة المملكة العربية السعودية ، وهو تطبيق يخدم كل حجاج الحملة ويعرض لهم كل ما يخصهم أثناء أدائهم لفريضة الحج </p>
                  <a href="{{route('Front.ourworks.details')}}" class="actiomfp-link"> المزيد<i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
            </div>
            <div class="masonry-item  m-b30 port-item" >
              <div class="image-effect-two hover-shadow item-img-wrap">
                <img src="{{ asset('assets/front/img/2-My designer.png')}}">
                <div class="figcaption item-img-overlay">
                  <h4 class="fw-bold">تصميمي</h4>
                  <p>هو تطبيق لبيع الملابس أون لاين بكل الدول ، ويمكن للمستخدم أيضاً تصميم صورة بطريقة احترافية لطباعتها على الملابس قبل استلامها</p>
                  <a href="{{route('Front.ourworks.details')}}" class="actiomfp-link"> المزيد<i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
            </div>
            <div class="masonry-item  m-b30 port-item" >
              <div class="image-effect-two hover-shadow item-img-wrap">
                <img src="{{ asset('assets/front/img/4-suruh.png')}}">
                <div class="figcaption item-img-overlay">
                  <h4 class="fw-bold">صروح</h4>
                  <p>هو تطبيق يخدم كل من لديه عقار ( شقة - فيلا - شاليه - ... إلخ ) ويريد عرضه للإيجار أو للبيع والاستفادة به ، التطبيق يعمل بالمملكة العربية السعودية .</p>
                 <a href="{{route('Front.ourworks.details')}}" class="actiomfp-link"> المزيد<i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
            </div>
            <div class="masonry-item  m-b30 port-item" >
              <div class="image-effect-two hover-shadow item-img-wrap">
                <img src="{{ asset('assets/front/img/3-Nour.png')}}">
                <div class="figcaption item-img-overlay">
                  <h4 class="fw-bold">نور خوي</h4>
                  <p>قمنا بتصميم وبرمجة تطبيق خاص بشركة النور المتحدة للخدمات البترولية بدولة المملكة العربية السعودية ، ويمكن عن طريقه تمويل أحد سياراتك ( سواء كنت فرد أو مؤسسة ) ومعرفة أقرب  محطات الوقود الموجودة حولك بسهولة ويسر</p>
                  <a href="{{route('Front.ourworks.details')}}" class="actiomfp-link"> المزيد<i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
            </div>
            <div class="masonry-item  m-b30 port-item" >
              <div class="image-effect-two hover-shadow item-img-wrap">
                <img src="{{ asset('assets/front/img/5-Saaf.png')}}">
                <div class="figcaption item-img-overlay">
                  <h4 class="fw-bold">سعف</h4>
                  <p>تطبيق هاتف ذكي موبايل ابلكشن اندرويد وايفون تطبيق تجاره الكترونيه لكبري المؤسسات في الكويت  </p>
                  <a href="{{route('Front.ourworks.details')}}" class="actiomfp-link"> المزيد<i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
            </div>
            <div class="masonry-item  m-b30 port-item" >
              <div class="image-effect-two hover-shadow item-img-wrap">
                <img src="{{ asset('assets/front/img/6-Musaid.png')}}">
                <div class="figcaption item-img-overlay">
                  <h4 class="fw-bold">مساعد</h4>
                    <p>هو تطبيق توصيل وشراء منتجات من جميع أنواع المتاجر والمطاعم بالمملكة العربية السعودية ، استعرض المتاجر حولك واختر المتجر وحدد طلبك وأرسله للمتجر والمندوب ثم تابعه حتى يتم تسليمه لك </p>
                  <a href="{{route('Front.ourworks.details')}}" class="actiomfp-link"> المزيد<i class="fa fa-arrows-alt"></i></a>
                </div>
              </div>
            </div>
          </div> <!-- /clintgallery -->

          <div class="text-center works-content">
            <a href="{{route('Front.ourworks.details')}}" class="btn btn-primary">عرض كل الأعمال</a>
          </div>
          
        </div>
      </section>

      <section class="bloginhgg py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
              <div class="section-heading text-center">
                <strong class="color-secondary">مقالات</strong>
                <h2>الأخبار والمقالات</h2>
                <span class="animate-border mr-auto ml-auto mb-4"></span>
                <p class="lead">لدينا العديد من المقالات والأخبار الهامة التي تهم جميع محبي ومتابعي تك سوفت</p>
              </div>
            </div>
          </div>
          
          <div class="row">
       
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="blog-item">
                <div class="image-wrap">
                  <a href="{{route('Front.blog.details')}}"><img src="{{ asset('assets/front/img/img-1.png')}}"></a>
                  <ul class="post-categories">
                    <li><a href="{{route('Front.blog.details')}}">برمجة</a></li>
                  </ul>
                </div>
                <div class="blog-content">
                  <ul class="blog-meta">
                      <li class="date"><i class="fa fa-calendar-check-o"></i>1 ديسمبر 2020</li>
                      <li class="admin"><i class="fas fa-user"></i> admin</li>
                   </ul>
                   <h3 class="blog-title"><a href="{{route('Front.blog.details')}}">تطبيق الخدمات البترولية</a></h3>
                   <p class="desc">تتشرف شركة تك سوفت بالتعاقد مع أحد أكبر مزودي خدمات النفط في المملكة العربية السعودية.</p>
                   <div class="blog-button"><a href="{{route('Front.blog.details')}}"> اقرأ أكثر  <i class="fas fa-angle-right fa-fw"></i></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="blog-item">
                <div class="image-wrap">
                  <a href="{{route('Front.blog.details')}}"><img src="{{ asset('assets/front/img/img-1.png')}}"></a>
                  <ul class="post-categories">
                    <li><a href="{{route('Front.blog.details')}}">برمجة</a></li>
                  </ul>
                </div>
                <div class="blog-content">
                  <ul class="blog-meta">
                      <li class="date"><i class="fa fa-calendar-check-o"></i>1 ديسمبر 2020</li>
                      <li class="admin"><i class="fas fa-user"></i> admin</li>
                   </ul>
                   <h3 class="blog-title"><a href="{{route('Front.blog.details')}}">تطبيق الخدمات البترولية</a></h3>
                   <p class="desc">تتشرف شركة تك سوفت بالتعاقد مع أحد أكبر مزودي خدمات النفط في المملكة العربية السعودية.</p>
                   <div class="blog-button"><a href="{{route('Front.blog.details')}}"> اقرأ أكثر  <i class="fas fa-angle-right fa-fw"></i></a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="blog-item">
                <div class="image-wrap">
                  <a href="{{route('Front.blog.details')}}"><img src="{{ asset('assets/front/img/img-1.png')}}"></a>
                  <ul class="post-categories">
                    <li><a href="{{route('Front.blog.details')}}">برمجة</a></li>
                  </ul>
                </div>
                <div class="blog-content">
                  <ul class="blog-meta">
                      <li class="date"><i class="fa fa-calendar-check-o"></i>1 ديسمبر 2020</li>
                      <li class="admin"><i class="fas fa-user"></i> admin</li>
                   </ul>
                   <h3 class="blog-title"><a href="{{route('Front.blog.details')}}">تطبيق الخدمات البترولية</a></h3>
                   <p class="desc">تتشرف شركة تك سوفت بالتعاقد مع أحد أكبر مزودي خدمات النفط في المملكة العربية السعودية.</p>
                   <div class="blog-button"><a href="{{route('Front.blog.details')}}"> اقرأ أكثر  <i class="fas fa-angle-right fa-fw"></i></a></div>
                </div>
              </div>
            </div>
          

          </div>
        </div>
      </section>  

   

  @endsection

  