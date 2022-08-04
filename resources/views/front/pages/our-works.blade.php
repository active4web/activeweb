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
              <div class="grid-item">
                <div class="work-item">
                  <a href="{{route('Front.ourworks.details')}}">
                    <img src="{{ asset('assets/front/img/1-al haj.png')}}">
                    <div class="div-overlay">
                      <h4 class="fw-bold">العلياني</h4>
                      <p>قمنا بتصميم وبرمجة تطبيق خاص بشركة العلياني لخدمات حجاج الداخل بدولة المملكة العربية السعودية ، وهو تطبيق يخدم كل حجاج الحملة ويعرض لهم كل ما يخصهم أثناء أدائهم لفريضة الحج </p>
                    </div>
                  </a>
                </div><!--1-->
                <div class="work-item">
                  <a href="{{route('Front.ourworks.details')}}">
                    <img src="{{ asset('assets/front/img/2-My designer.png')}}">
                    <div class="div-overlay">
                      <h4 class="fw-bold">تصميمي</h4>
                      <p>هو تطبيق لبيع الملابس أون لاين بكل الدول ، ويمكن للمستخدم أيضاً تصميم صورة بطريقة احترافية لطباعتها على الملابس قبل استلامها</p>
                    </div>
                  </a>
                </div><!--2-->
              </div>    
              <div class="grid-item">
                <div class="work-item">
                  <a href="{{route('Front.ourworks.details')}}">
                    <img src="{{ asset('assets/front/img/4-suruh.png')}}">
                    <div class="div-overlay">
                      <h4 class="fw-bold">صروح</h4>
                      <p>هو تطبيق يخدم كل من لديه عقار ( شقة - فيلا - شاليه - ... إلخ ) ويريد عرضه للإيجار أو للبيع والاستفادة به ، التطبيق يعمل بالمملكة العربية السعودية .</p>
                    </div><!--3-->
                  </a>
                </div>
                <div class="work-item">
                  <a href="{{route('Front.ourworks.details')}}">
                    <img src="{{ asset('assets/front/img/3-Nour.png')}}">
                    <div class="div-overlay">
                    <h4 class="fw-bold">نور خوي</h4>
                    <p>قمنا بتصميم وبرمجة تطبيق خاص بشركة النور المتحدة للخدمات البترولية بدولة المملكة العربية السعودية ، ويمكن عن طريقه تمويل أحد سياراتك ( سواء كنت فرد أو مؤسسة ) ومعرفة أقرب  محطات الوقود الموجودة حولك بسهولة ويسر</p>
                    </div><!--4-->
                  </a>
                </div>
              </div>
              <div class="grid-item">
                <div class="work-item">
                  <a href="{{route('Front.ourworks.details')}}">
                    <img src="{{ asset('assets/front/img/5-Saaf.png')}}">
                    <div class="div-overlay">
                      <h4 class="fw-bold">سعف</h4>
                      <p>تطبيق هاتف ذكي موبايل ابلكشن اندرويد وايفون تطبيق تجاره الكترونيه لكبري المؤسسات في الكويت  </p>
                    </div>
                  </a>
                </div><!--5-->
                <div class="work-item">
                  <a href="{{route('Front.ourworks.details')}}">
                    <img src="{{ asset('assets/front/img/6-Musaid.png')}}" alt="Saaf" width="100%">
                    <div class="div-overlay">
                      <h4 class="fw-bold">مساعد</h4>
                      <p>هو تطبيق توصيل وشراء منتجات من جميع أنواع المتاجر والمطاعم بالمملكة العربية السعودية ، استعرض المتاجر حولك واختر المتجر وحدد طلبك وأرسله للمتجر والمندوب ثم تابعه حتى يتم تسليمه لك </p>
                    </div>
                  </a>
                </div><!--6-->
              </div>
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