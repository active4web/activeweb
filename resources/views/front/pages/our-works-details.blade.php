@extends('front.layouts.master')

@section('title')

OurWorks  - اعمالنا

@endsection

@section('css')

@endsection 


@section('content')


       
    <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('images/pagesbanner/'.$banner->image)}})no-repeat center center / cover">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7">
            <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
            <h1 class="text-white mb-0">{{trans('front.our-works')}}</h1></h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="{{route('Front.index')}}">{{trans('front.Home')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">{{trans('front.pages')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">{{trans('front.our-works')}}</li>
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
                <h1>{{$work->getTranslation('title',\App::getLocale())}} </h1>
                <div class="row mt20 mb20">
                  <div class="media col-md-6 col-12">
                    <h5><i class="far fa-smile-wink"></i>{{$work->getTranslation('title',\App::getLocale())}} </h5>
                  </div>
                  <div class="media-body user-info col-md-6 col-12">
                    <p><i class="far fa-calendar-alt"></i>{{date('Y-m-d ', strtotime($work->created_at))}}</p>
                  </div>
             
                </div>
              </div><!-- blog-header -->
              <div class="image-set"><img src="{{ asset('images/ourwork/'.$work->image)}}" class="img-fluid"></div>
              <div class="span8">
                <h4 class="visible-desktop">{{$work->getTranslation('title',\App::getLocale())}}</h4>
                <p>{{$work->getTranslation('description',\App::getLocale())}}</p>
                <ul class="ul-list mb30">
                  @foreach($work->ourWorkDetails as $workdetail)
                  <li>{{$workdetail->getTranslation('description',\App::getLocale())}}</li>
                  @endforeach
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
                  <h3 class="widget-title">{{trans('front.last-blogs')}}</h3>
                  <div class="rc-post">
                    <ul>
                      @foreach($blogs as $blog)
                      <li>
                        <a href="{{route('Front.blog.details',$blog->id)}}">
                          <div class="rc-post-thumb">
                            <img src="{{ asset('images/blog/'.$blog->image)}}" alt="img">
                          </div>
                          <div class="rc-post-content">
                            <h5> {{$blog->getTranslation('title',\App::getLocale())}} </h5>
                            <span><i class="far fa-calendar-alt"></i> {{date('Y-m-d ', strtotime($blog->created_at))}}</span>
                          </div>
                        </a>
                      </li>
                      @endforeach
                    
                    </ul>
                  </div><!-- rc-post -->
                </div><!-- widget mb-30 -->
                <div class="widget mb-30">
                  <h3 class="widget-title">{{trans('front.categories')}}</h3>
                  <div class="sidebar-cat">
                    <ul>
                      @foreach($categories as $category )
                      <li><a href="#">{{$category->getTranslation('title',\App::getLocale())}}<span>{{$category->count}}</span></a></li>
                      
                      @endforeach
                    </ul>
                  </div>
                </div><!-- widget mb-30 -->
            </aside>
          </div>
        </div>
      </div>
    </section>  


@endsection