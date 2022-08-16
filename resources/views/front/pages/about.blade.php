@extends('front.layouts.master')
@section('title')
about us
@endsection

@section('css')

@endsection

@section('content')

<section class="aboutcontent">

  <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('images/pagesbanner/'.$banner->image)}}) no-repeat center center / cover">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
          <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
               <h1 class="text-white mb-0">{{trans('front.information')}}</h1></h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="{{route('Front.index')}}">{{trans('front.Home')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">{{trans('front.pages')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">{{trans('front.information')}}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="left-content">
             @if($about)
            <img src="{{ asset('images/about/'.$about->image)}}">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content">
            <div class="sec-title">
              <span class="line"></span>
              <span class="line-text"> {{trans('front.about')}}</span>
            </div>
           
            <h2 class="h2">{{$about->getTranslation('title',\App::getLocale())}}</h2>
            <p class="text-p">{!!$about->getTranslation('description',\App::getLocale()) !!}</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="work-process-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <strong class="color-secondary">لماذا نحن الأفضل</strong>
            <h2>ما الذي يجعلنا الأفضل في البرمجة التسويق الرقمي</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">ابدأ العمل مع شركة يمكنها توفير كل ما تحتاجه لزيادة الوعي , جذب حركة المرور والتواصل مع العملاء وزيادة المبيعات.</p>
          </div>
        </div>
      </div>
      <!-- ============ step 1 =========== -->
      <div class="row mt-5">
        <div class="col-md-12 col-lg-5 process-width">
          <div class="process-box process-left">
            <div class="row">
              <div class="col-md-5">
                <div class="process-step-number">
                  <strong>خطوة</strong>
                  <h2 class="m-0">01</h2>
                </div>
              </div>
              <div class="col-md-7">
                <h5>لغات البرمجة المستخدمة </h5>
                <p> نستخدم أحدث لغات برمجة الويب لبرمجة موقعك وافضل المبرنمجين وخبرات متعددة في مجال</p>
              </div>
            </div>
            <div class="process-line-l"></div>
          </div>
        </div>
        <div class="col-md-2 process-none"></div>
        <div class="col-md-5 col-md-5 col-lg-5 process-none">
          <div class="process-point-right"></div>
        </div>
      </div>
      <!-- ============ step 2 =========== -->
      <div class="row">
        <div class="col-md-5 col-lg-5 process-none">
          <div class="process-point-left"></div>
        </div>
        <div class="col-md-2 process-none"></div>
        <div class="col-md-12 col-lg-5 process-width">
          <div class="process-box process-right">
            <div class="row">
              <div class="col-md-5">
                <div class="process-step-number">
                  <strong>خطوة</strong>
                  <h2 class="m-0">02</h2>
                </div>
              </div>
              <div class="col-md-7">
                <h5>تصاميم فريدة و ذكية </h5>
                <p>نستخدم أجدد التصاميم الحديثة لإنشاء موقعك واحدث تطويرلا ومطورين في مجال ونعمل علي احدث</p>
              </div>
            </div>
            <div class="process-line-r"></div>
          </div>
        </div>
      </div>
      <!-- ============ step 3 =========== -->
      <div class="row">
        <div class="col-md-12 col-lg-5 process-width">
          <div class="process-box process-left">
            <div class="row">
              <div class="col-md-5">
                <div class="process-step-number">
                  <strong>خطوة</strong>
                  <h2 class="m-0">03</h2>
                </div>
              </div>
              <div class="col-md-7">
                <h5>المراجعة الفنية</h5>
                <p>تحسين نواقل الجودة الحبيبية بشكل أحادي في مقابل الاعتماد المتبادل توليف بالكامل .</p>
              </div>
            </div>
            <div class="process-line-l"></div>
          </div>
        </div>
        <div class="col-md-2 process-none"></div>
        <div class="col-md-5 col-lg-5 process-none">
          <div class="process-point-right"></div>
        </div>
      </div>
      <!-- ============ step 4 =========== -->
      <div class="row">
        <div class="col-md-5 col-lg-5 process-none">
          <div class="process-point-left"></div>
        </div>
        <div class="col-md-2 process-none"></div>
        <div class="col-md-12 col-lg-5 process-width">
          <div class="process-box process-right">
            <div class="row">
              <div class="col-md-5">
                <div class="process-step-number">
                  <strong>خطوة</strong>
                  <h2 class="m-0">04</h2>
                </div>
              </div>
              <div class="col-md-7">
                <h5>مواقع التواصل الإجتماعي </h5>
                <p>نربط موقعك بكل مواقع التواصل الإجتماعي ونعمل علي تحديثاتت المتكررة باستمرار و </p>
              </div>
            </div>
            <div class="process-line-r"></div>
          </div>
        </div>
      </div>
      <!-- ============ step 5 =========== -->
      <div class="row">
        <div class="col-md-12 col-lg-5 process-width">
          <div class="process-box process-left">
            <div class="row">
              <div class="col-md-5">
                <div class="process-step-number">
                  <strong>خطوة</strong>
                  <h2 class="m-0">05</h2>
                </div>
              </div>
              <div class="col-md-7">
                <h5>خدمة تصميم المواقع</h5>
                <p>نستخدم أحدث لغات برمجة الويب لبرمجة موقعك تقويض التسليمات الفردية بشكل موضوعي</p>
              </div>
            </div>
            <div class="process-line-l"></div>
          </div>
        </div>
        <div class="col-md-2 custom-none"></div>
        <div class="col-md-5 col-lg-5 custom-none">
          <div class="process-point-right process-last"></div>
        </div>
      </div>
      <!-- ============ -->
    </div>
  </section>

  <div class="fovertyyopse" style="position: relative; ">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-lg-5 col-md-12">
          <div class="singimage-wrapper">
            <img src="{{ asset('assets/front/img/f-vector.png')}}">
          </div>
        </div><!-- col-sm-6 vc_col-lg-6 vc_col-md-6 -->

        <div class="col-sm-7 col-lg-7 col-md-12">
          <div class="inne531">
            <h6>بعض الأسباب للعمل معًا</h6>
            <h3>هدفنا هو نجاح العميل ونموه في المستقبل</h3>
            <p>نحن نقدم خدمات برمجية والتسويقة . نحن نعمل معك وليس من أجلك.</p>


            <div class="row">
            @foreach($aboutgoals as $key => $aboutgoal)
              <div class="col-sm-6">
                <div class="number">
                  <span>{{ ++ $key }}</span>
                </div>
                <div class="wrappercustom">
                  <h4>{{$aboutgoal->getTranslation('title',\App::getLocale())}}</h4>
                  <p> {{$aboutgoal->getTranslation('description',\App::getLocale())}}</p>
                </div>
              </div>
              @endforeach
            
            </div><!-- wpbcolumn row -->
          </div><!-- vc_column-inne531823474715 -->
        </div><!-- col-sm-6 vc_col-lg-6 vc_col-md-6 -->
      </div><!-- vccolumninner row -->
    </div><!-- container -->
  </div>




  @endsection