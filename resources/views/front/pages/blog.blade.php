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
                      <a href="{{route('Front.blog.details',$blog->id)}}"><img src= "{{ asset('images/blog/'.$blog->image)}}"></a>
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
                       <div class="blog-button"><a href="{{route('Front.blog.details',$blog->id)}}">{{trans('front.read-more')}} <i class="fas fa-angle-right fa-fw"></i></a></div>
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