@inject('setting', 'App\Models\Setting')
@inject('socials', 'App\Models\SocialMedia')
<div class="client-section ptb-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="client-heading-wrap">
                <h3>من هم سعداء بالخدمات والعمل</h3>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="client-para">
                <p>إدارة استراتيجيات النمو التآزري والأسواق التعاونية بسلاسة. تمكين وسطاء المعلومات غير المكلفين عالميًا بعد مشاركة الأفكار المستدامة. تعاون احترافي للعلامة التجارية Phosfluorescently ومشاركة الأفكار بدون واجهات تتمحور حول المبدأ. </p>
              </div>
            </div>
          </div>
          <div class="row align-items-center justify-content-center mb-4">
            <div class="col-md-10 col-lg-9">
              <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap">
              <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-01.png')}}" class="client-img">
                </div>
                <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-02.png')}}" class="client-img">
                </div>
                <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-03.png')}}" class="client-img">
                </div>
                <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-04.png')}}" class="client-img">
                </div>
                <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-05.png')}}" class="client-img">
                </div>
                <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-06.png')}}" class="client-img">
                </div>
                <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-07.png')}}" class="client-img">
                </div>
                <div class="item single-client">
                  <img src="{{ asset('assets/front/img/clients-logo-08.png')}}" class="client-img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section><!-- contentleft-right -->
<footer id="saas_two_footer">
      <div class="s2-newslatter_section">
        <div class="s2-newslatter_content relative-position">
          <div class="s2-newslatter_title  text-center saas2-headline pera-content">
            <h2>إشترك الآن!</h2>
            <p>احصل على آخر تحديث.</p>
          </div>
          <div class="s2-newslatter-form  relative-position">
            <form action="#">
              <input class="email" name="email" type="email" placeholder="أدخل عنوان بريدك الالكتروني">
              <div class="nws-button position-absolute text-capitalize">
                <button class="hover-btn" type="submit" value="Submit"> الإشتراك</button>
              </div>
            </form>
          </div>
        </div>
        <div class="newsletter_pattern_1"><img src="{{ asset('assets/front/img/nb.png')}}" alt=""></div>
        <div class="newsletter_pattern_4 " style="background-image: url({{ asset('assets/front/img/ns.png')}});"></div>
        <div class="newsletter_pattern_5 " style="background-image: url({{ asset('assets/front/img/ns2.png')}});"></div>
      </div>
      <div class="footer_content pera-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="s2_footer_about">
                <div class="s2-footer_logo">
                  <img   src="{{ asset('images/setting/'.$setting->first()->logo)}}">
                </div>
                <p class="mb-3">افضل شركة تصميم مواقع<br> افضل شركة تصميم تطبيقات و برمجة مواقع و برمجة تطبيقات<br> هنجيبلك العميل و انت عليك الباقي الشركة الوحيدة المعتمدة من جوجل في مصر وحاصلة علي حساب الجولد بارتنر الذي يتيح لك الكثير من مزايا جوجل احصل علي اعلي عائد في جوجل بأقل التكاليف</p>
                <div class="social-icons social-border circle social-hover mt-5">
                  <h4 class="title">تابعنا</h4>
                  <ul class="list-inline">
                    <?php  $socials= $socials::get() ?>
                    @foreach($socials as $social)
                    <li class="social-facebook">
                      <a href="{{$social->link}}"><i class="fab fa-{{$social->name}}"></i></a>
                    </li>
                   @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="s2_footer_menu">
                <h3 class="s2_widget_title">
                  <span>الروابط</span>
                  <i></i>
                </h3>
                <ul>
                  <li><a href="{{route('Front.index')}}"> الرئيسية</a></li>
                  <li><a href="{{route('Front.about')}}"> من نحن</a></li>
                  <li><a href="{{route('Front.ourworks')}}"> اعمالنا  </a></li>
                  <li><a href="{{route('Front.services')}}">   خدماتنا  </a></li>
                  <li><a href="{{route('Front.contactus')}}"> تواصل  معانا </a></li>
                  <li><a href="{{route('Front.service.request')}}"> دعم فني وطلب خدمة </a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="s2_footer_social">
                <h3 class="s2_widget_title">
                  <span>تواصل معنا</span> 
                  <i></i>
                </h3>
                <ul class="media-icon list-unstyled">
                
                  <li><span style="color:#b6b5b4"> العنوان  : </span><strong> {{$setting->first()->getTranslation('address', 'en');}} </strong></li>
                  <li><span style="color:#b6b5b4"> الهاتف : </span> <a href="">{{$setting->first()->phone}}</a></li>
                  <li><span style="color:#b6b5b4"> البريد الإلكتروني :</span><a href="#"> &nbsp;{{$setting->first()->email}}</a></li>
                 
                  <li>
                    <p class="mb-0"><span style="color:#fff;font-weight:bold"> لابد من حجز ميعاد مسبق علي الاقل بيوم من موعد المقابلة بفرع الادارة </span></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="s2-copyright text-center">2022 © All rights reserved by <a href="#">Active Web</a></div>
    </footer>

    <div class="ccw_plugin chatbot" style="bottom:30px; left:30px;">
      <div class="style4 bounce ccw-an"> 
        <a target="_blank" href="" class="nofocus">
          <div class="chip style-4 ccw-analytics" id="style-4" data-ccw="style-4" style="background-color: #e4e4e4; color: rgba(0, 0, 0, 0.6)"> 
            <i class="fab fa-whatsapp"></i>  تواصل  WhatsApp
          </div> 
        </a>
      </div>
    </div>

    <div class="ccw_pluginchatbot" style="bottom:30px; right:30px;">
      <div class="style4 bounce ccw-an"> 
        <a target="_blank" href="" class="nofocus">
          <div class="chip style-4 ccw-analytics" id="style-4" data-ccw="style-4" style="background-color: #e4e4e4; color: rgba(0, 0, 0, 0.6)"> 
            <i class="fab fa-facebook-messenger"></i>تواصل ماسنجر

          </div> 
        </a>
      </div>
    </div>

  </div>