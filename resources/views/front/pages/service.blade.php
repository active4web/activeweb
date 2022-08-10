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
              <h1 class="text-white mb-0">{{trans('front.services')}}</h1></h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="{{route('Front.index')}}">{{trans('front.Home')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">{{trans('front.pages')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">{{trans('front.services')}}</li>
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
              @foreach($services as $service)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="promo-item">
                  <div class="promo-img">
                  <img src="{{ asset('images/service/'.$service->image)}}">
                  </div>
                  <h5><a href="{{route('Front.services-details',$service->id)}}"> {{$service->getTranslation('title',\App::getLocale())}} </a></h5>
                  <p>{!!  Str::words($service->getTranslation('description',\App::getLocale()),20) !!}</p>
                  <div class="promo-bottom-shape">
                    <img src="{{ asset('assets/front/img/bottom.png')}}">
                  </div>
                </div>
              </div>
              @endforeach
           
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