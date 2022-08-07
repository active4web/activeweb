@extends('front.layouts.master')
@section('title')
Blog-المقالات
@endsection

@section('css')

@endsection 


@section('content')
       
      <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('assets/front/img/header-bg-5.jpg')}})no-repeat center center / cover">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
              <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                <h1 class="text-white mb-0">اهم المقالات</h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="index.html">الرئسية</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">الصفحات</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">مقالات</li>
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
              <div class="row ">
                @foreach($blogs as $blog)
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 blog--post">
                  <div class="blog-item">
                    <div class="image-wrap">
                      <a href="{{route('Front.blog.details')}}"><img src= "{{ asset('images/blog/'.$blog->image)}}"></a>
                      <ul class="post-categories">
                        <li><a href="{{route('Front.blog.details')}}">{{$blog->getTranslation('category',\App::getLocale())}}</a></li>
                      </ul>
                    </div>
                    <div class="blog-content">
                      <ul class="blog-meta">
                          <li class="date"><i class="fa fa-calendar-check-o"></i>{{date('Y-m-d ', strtotime($blog->created_at))}}</li>
                          <li class="admin"><i class="fas fa-user"></i> {{$blog->created_by}}</li>
                       </ul>
                       <h3 class="blog-title"><a href="{{route('Front.blog.details')}}">{{$blog->getTranslation('title',\App::getLocale())}}</a></h3>
                       <p class="desc">{{$blog->getTranslation('description',\App::getLocale())}}</p>
                       <div class="blog-button"><a href="{{route('Front.blog.details')}}">{{trans('front.read-more')}} <i class="fas fa-angle-right fa-fw"></i></a></div>
                    </div>
                  </div>
                </div><!--col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12  -->
                @endforeach
              
              </div><!-- row -->
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
                        <a href="{{route('Front.blog.details')}}">
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
                        <a href="{{route('Front.blog.details')}}">
                          <div class="rc-post-thumb">
                            <img src="public/img/library-225x169.png" alt="img">
                          </div>
                          <div class="rc-post-content">
                            <h5>برنامج ادرة شركات الكمبيوتر و الصيانة المحاسب العربى</h5>
                            <span><i class="far fa-calendar-alt"></i> 17 أغسطس 2020</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="{{route('Front.blog.details')}}">
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
                        <a href="{{route('Front.blog.details')}}">
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