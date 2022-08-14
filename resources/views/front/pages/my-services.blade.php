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
              <h2>{{$service->getTranslation('title',\App::getlocale())}}</h2>
              <span class="animate-border mr-auto ml-auto mb-4"></span>
              <p class="lead">{!! $service->getTranslation('description',\App::getlocale()) !!}</p>
            </div>
          </div>
        </div>
        <div class="row">
          
          <div class="col-lg-6 col-md-6 col-12 mb-30">
            <div class="fl-ca-img">
              <img src="public/img/ppcfeatures.png">
            </div><!-- fl-callout-content -->
          </div><!-- col-lg-6 col-md-6 col-12 mb-30 -->

          <div class="col-lg-6 col-md-6 col-12 mb-30">
            <div class="clanding-page-content1">
              <p>إذا بدا موقع الويب قديمًا ، فسيود عدد أقل من الزوار تصفح المحتوى وسيؤدي في النهاية إلى زيادة معدل الارتداد لموقع الويب الخاص بك. يعد التصميم الجيد لموقع الويب عاملاً رئيسيًا في الترتيب ، ويحتاج موقع الويب الخاص بك إلى تغيير حديث لمواكبة تغييرات خوارزمية البحث.عندما تقوم بترقية التصميم العام ، تتحسن تجربة المستخدم بشكل كبير. هذا هو السبب الرئيسي الذي يجعلك بحاجة إلى تغيير للوقوف بعيدًا عن الآخرين.من خلال اتجاهات تصميم مواقع الويب الجديدة ، لن تقوم فقط بتحسين معدل الاحتفاظ بالزوار ولكن أيضًا زيادة المبيعات الإجمالية. يسير تصميم موقع الويب الممتاز والمبيعات المحسّنة جنبًا إلى جنب ، كما يفتح تصميم الويب الأفضل في فئته في الهند العديد من الفرص الإضافية لعملك.</p>
              <p>تشمل عروض إدارة وسائل التواصل الاجتماعي لدينا:</p>

              
              <ul class="social-business-listing row">
                <li class="col-lg-6 col-md-6 col-12 mb-30">Mobile Responsive</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Logo Designing</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Website Redesigning</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Mobile Website Designing</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">HTML Page Designing</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">SaaS Model Designing</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Attractive Design</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Responsive Design</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Latest UI/UX</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">SEO Optimized Design</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Call To Action</li>
                <li class="col-lg-6 col-md-6 col-12 mb-30">Highly Competitive</li>
              </ul>
              <p></p>
            </div>
          </div><!-- col-lg-6 col-md-6 col-12 mb-30-->
        </div>
      </div><!-- container -->
    </section>



    <section class="commentoggg">
      <div class="container">

        

        <div class="row page_margin_top_section">
          
          <ul id="comments_list">
            <li class="comment clearfix" id="comment-1">
              <div class="comment_author_avatar">
               <img src="public/img/avatar.png">
              </div>
              <div class="comment_details">
                <div class="posted_by clearfix">
                  <h5><a class="author" href="#">موني الفايد</a></h5>
                  <abbr class="timeago">22 يوليو 2022</abbr>
                </div>
                <p>حتى الفناء الخلفي جدا ، سعر البروتين لينة الضحك. لا حاجة لضبط الأريكة في بعض الأحيان ، فهي تتطلب حاجة القطة. هناك ابتسامة لطيفة على حلق الأطفال ، والتي في بعض الأحيان تحتاج إلى أن تكون الطبقة الأولى من السرير الحامل.</p>
                <a class="read_more" href="#comment_form">
                  <span class="arrow"></span><span>الرد</span>
                </a>
              </div>
            </li>
            <li class="comment clearfix" id="comment-2">
              <div class="comment_author_avatar">
               <img src="public/img/avatar.png">
              </div>
              <div class="comment_details">
                <div class="posted_by clearfix">
                  <h5><a class="author" href="#">هاجر شوقي</a></h5>
                  <abbr class="timeago">22 يوليو 2022</abbr>
                </div>
                <p>حتى الفناء الخلفي جدا ، سعر البروتين لينة الضحك. لا حاجة لضبط الأريكة في بعض الأحيان ، فهي تتطلب حاجة القطة. هناك ابتسامة لطيفة على حلق الأطفال ، والتي في بعض الأحيان تحتاج إلى أن تكون الطبقة الأولى من السرير الحامل.</p>
                <a class="read_more" href="#comment_form">
                  <span class="arrow"></span><span>الرد</span>
                </a>
              </div>
              <ul class="children">
                <li class="comment clearfix">
                  <a href="#comment-2" class="parent_arrow"><img src="public/img/comment_reply.png"></a>
                  <div class="comment_author_avatar">
                   <img src="public/img/avatar.png">
                  </div>
                  <div class="comment_details">
                    <div class="posted_by clearfix">
                      <h5><a class="author" href="#">موني الفايد</a><a href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
                      <abbr class="timeago">22 يوليو 2022</abbr>
                    </div>
                    <p> حتى الفناء الخلفي جدا ، سعر البروتين لينة الضحك. لا حاجة لضبط الأريكة في بعض الأحيان ، فهي تتطلب حاجة القطة. هناك ابتسامة لطيفة على حلق الأطفال ، والتي في بعض الأحيان تحتاج إلى أن تكون الطبقة الأولى من السرير الحامل.</p>
                    <a class="read_more" href="#comment_form">
                      <span class="arrow"></span><span>الرد</span>
                    </a>
                  </div>
                </li>
                <li class="comment clearfix">
                  <a href="#comment-2" class="parent_arrow"><img src="public/img/comment_reply.png"></a>
                  <div class="comment_author_avatar">
                   <img src="public/img/avatar.png">
                  </div>
                  <div class="comment_details">
                    <div class="posted_by clearfix">
                      <h5><a class="author" href="#">هاجر شوقي</a><a href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
                      <abbr class="timeago">22 يوليو 2022</abbr>
                    </div>
                    <p>حتى الفناء الخلفي جدا ، سعر البروتين لينة الضحك. لا حاجة لضبط الأريكة في بعض الأحيان ، فهي تتطلب حاجة القطة. هناك ابتسامة لطيفة على حلق الأطفال ، والتي في بعض الأحيان تحتاج إلى أن تكون الطبقة الأولى من السرير الحامل. </p>
                    <a class="read_more" href="#comment_form">
                      <span class="arrow"></span><span>الرد</span>
                    </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="blog-post-comment mb--50">
          <h4 class="box_header">اكتب تلعيفاتك حتي يتم الرد عليك </h4>
          <form action="#" class="rt-contact-form comments-form-style-1">
            <div class="row">
              
         
              <div class="col-12">
                <div class="form-group">
                  <label for="comment">تعليقات *</label>
                  <textarea name="comment" id="comment" class="form-control text-area" ></textarea>
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

