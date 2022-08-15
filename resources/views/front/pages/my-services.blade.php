@extends('front.layouts.master')

@section('title')

Services - خدماتنا

@endsection

@section('css')

@endsection 


@section('content')   
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('public/img/header-bg-5.jpg')no-repeat center center / cover">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-7">
            <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
              <h1 class="text-white mb-0">خدماتي</h1>
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




    <section class="secti-spaces">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-9">
            <div class="section-heading text-center">
              <!-- <strong class="color-secondary">تصميم المواقع</strong> -->
              <h2>{{$servicerequest->services->getTranslation('title',\App::getlocale())}}</h2>
              <span class="animate-border mr-auto ml-auto mb-4"></span>
              <p class="lead">{!! $servicerequest->services->getTranslation('description',\App::getlocale()) !!}</p>
            </div>
          </div>
        </div>
        @isset($servicecomments)
        @foreach($servicecomments as $servicecomment)
        <div class="row">
          
          <div class="col-lg-6 col-md-6 col-12 mb-30">
            <div class="fl-ca-img">
              <img src="{{asset('images/servicecomment/'.$servicecomment->file)}}">
            </div><!-- fl-callout-content -->
          </div><!-- col-lg-6 col-md-6 col-12 mb-30 -->

          <div class="col-lg-6 col-md-6 col-12 mb-30">
          
            <div class="clanding-page-content1">
              <p>{{$servicecomment->site_url}}</p>
              <p>{!! $servicecomment->comment !!}</p>
              <p></p>
            </div>
           
          </div><!-- col-lg-6 col-md-6 col-12 mb-30-->
        </div>
         @endforeach
         @endisset
      </div><!-- container -->
    </section>



    <section class="commentoggg">
      <div class="container">

        

        <div class="row page_margin_top_section">
          
          <ul id="comments_list">
            @isset($servicerequest->clientcomments)
            @foreach($servicerequest->clientcomments as $key => $comment)
            <li class="comment clearfix" id="comment-1">
              <div class="comment_author_avatar">
               <img src="{{asset('assets/front/img/avatar.png')}}">
              </div>
              <div class="comment_details">
                <div class="posted_by clearfix">
                  <h5><a class="author" href="#">{{$servicerequest->users->name}}</a></h5>
                  <abbr class="timeago">{{$comment->created_at}}</abbr>
                </div>
                <p>{{$comment->comment}}</p>
                @if($comment->status == 0 && Auth::user()->role == 1)
                  <button class=" btn btn-link  btn-outline-light  reply" style=" color: #007bff; !important; "  type="button" >
                      <span class="arrow"></span><span>الرد</span>
                  </button>
                
                <form  id= "reply_form" action="{{route('Front.commentreply',$comment->id)}}" method="post">
                  @csrf 
                  @method ('PUT') 
                  <div class="col-12">
                <div class="form-group">
                  <input type="hidden" name="comment_id" value="{{$comment->id}}">
          
                  <textarea name="reply" id="reply" class="form-control text-area" >{{old('reply')}}</textarea>
                </div>
              </div>
                <button class=" btn btn-link  btn-outline-light  reply-done" style=" color: #007bff; !important; ">
                   <span class="arrow"></span><span> ارسال</span>
                </button>
                </form>
                @endif
              </div>
              @if(!is_null($comment->reply))
              <ul class="children">
                <li class="comment clearfix">
                
                  <div class="comment_author_avatar">
                  <img src="{{asset('assets/front/img/avatar.png')}}">
                  </div>
                  <div class="comment_details">
                    <div class="posted_by clearfix">
                      <h5><a class="author" href="#">الدعم الفني </a><a href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
                      <abbr class="timeago">{{$comment->updated_at}}</abbr>
                    </div>
                    <p> {{$comment->reply}}</p>
                   
                  </div>
                </li>
                
              </ul>
              @endif
            </li>
        
            @endforeach
            @endisset
           
          </ul>
        </div>
        <div class="blog-post-comment mb--50">
          <h4 class="box_header">اكتب تعليفاتك حتي يتم الرد عليك </h4>
          <form action="{{route('Front.clientcomment')}}" method="post" class="rt-contact-form comments-form-style-1">
          @csrf
          <div class="row">
              
         
              <div class="col-12">
                <div class="form-group">
                  <input type="hidden" name="servicerequest_id" value="{{$servicerequest->id}}">
                  <label for="comment">تعليقات *</label>
                  <textarea name="comment" id="comment" class="form-control text-area" >{{old('comment')}}</textarea>
                </div>
              </div>

              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary"> أضف تعليقا</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

@endsection
@section('js')



@endsection
