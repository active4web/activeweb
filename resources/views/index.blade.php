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
          <img src="{{ asset('images/about/'.$about->image)}}">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-content">
          <div class="sec-title">
            <span class="line"></span>
            <span class="line-text">{{trans('front.about')}}</span>
          </div>
          <h2 class="h2">{{$about->getTranslation('title',\App::getLocale())}}</h2>
          <p class="text-p">{!!$about->getTranslation('description',\App::getLocale()) !!}</p>
          
          <a href="{{route('Front.about')}}" class="btn btn-primary">{{trans('front.see-more')}}</a>
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
          <strong class="color-secondary">{{trans('front.services')}}</strong>
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
          <p>{!!  Str::words($service->getTranslation('description',\App::getLocale()),20) !!} </p>
          <div class="promo-bottom-shape">
            <img src="{{ asset('assets/front/img/bottom.png')}}">
          </div>
        </div>
      </div>
      @endforeach

    </div>
    <div class="text-center">
      <a href="{{route('Front.services')}}" class="btn btn-primary">{{trans('front.show-services')}}</a>
    </div>
  </div>
</section>

<section class="our-works sec-pad py-5" id="our-work">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-9">
        <div class="section-heading text-center">
          <strong class="color-secondary">{{trans('front.our-works')}}</strong>
          <h2>نحن نقدم خدمات أفضل</h2>
          <span class="animate-border mr-auto ml-auto mb-4"></span>
          <p class="lead">إعادة اختراع رأس المال البشري متعدد الوحدات عالميًا في حين أن المحفزات الافتراضية للتغيير. شبكة طرق دقيقة للتمكين بشكل حازم بدلاً من التحسينات التي تركز على العميل.</p>
        </div>
      </div>
    </div>

    <div class="sliderleft"><i class="fas fa-angle-left"></i></div>
    <div class="sliderright"><i class="fas fa-angle-right"></i></div>
    <div id="clintgallery" class="owl-carousel owl-theme">

      @foreach ($ourworks as $ourwork)
      <div class="masonry-item  m-b30 port-item">
        <div class="image-effect-two hover-shadow item-img-wrap">
          <img src="{{ asset('images/ourwork/'.$ourwork->image)}}" class="img-responsive">
          <div class="figcaption item-img-overlay">
            <h4 class="fw-bold"> {{$ourwork->getTranslation('title',\App::getLocale())}} </h4>
            <p> {{$ourwork->getTranslation('description',\App::getLocale())}}</p>
            <a href="{{route('Front.ourworks.details',$ourwork->id)}}" class="actiomfp-link"> {{trans('front.more')}}<i class="fa fa-arrows-alt"></i></a>
          </div>
        </div>
      </div> 
    
      @endforeach
</div> <!-- /clintgallery -->

    <div class="text-center works-content">
      <a href="{{route('Front.ourworks')}}" class="btn btn-primary">{{trans('front.show-works')}}</a>
    </div>
   

  </div>
</section>

<section class="bloginhgg py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-9">
        <div class="section-heading text-center">
          <strong class="color-secondary">{{trans('front.blogs')}}</strong>
          <h2>الأخبار والمقالات</h2>
          <span class="animate-border mr-auto ml-auto mb-4"></span>
          <p class="lead">لدينا العديد من المقالات والأخبار الهامة التي تهم جميع محبي ومتابعي تك سوفت</p>
        </div>
      </div>
    </div>

    <div class="row">
      @foreach($blogs as $blog)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="blog-item">
          <div class="image-wrap">
            <a href="{{route('Front.blog.details',$blog->id)}}"><img src="{{ asset('images/blog/'.$blog->image)}}"></a>
            <ul class="post-categories">
              <li><a href="{{route('Front.blog.details',$blog->id)}}">{{$blog->getTranslation('category',\App::getLocale())}}</a></li>
            </ul>
          </div>
          <div class="blog-content">
            <ul class="blog-meta">
              <li class="date"><i class="fa fa-calendar-check-o"></i>{{date('Y-m-d ', strtotime($blog->created_at))}}</li>
              <li class="admin"><i class="fas fa-user"></i> {{$blog->created_by}}</li>
            </ul>
            <h3 class="blog-title"><a href="{{route('Front.blog.details',$blog->id)}}">{{$blog->getTranslation('title',\App::getLocale())}}</a></h3>
            <p class="desc">{{$blog->getTranslation('description',\App::getLocale())}}</p>
            <div class="blog-button"><a href="{{route('Front.blog.details',$blog->id)}}"> {{trans('front.read-more')}} <i class="fas fa-angle-right fa-fw"></i></a></div>
          </div>
        </div> 
      </div>
        @endforeach
     


    </div>
  </div>
</section>



@endsection