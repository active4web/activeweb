@inject('setting', 'App\Models\Setting')
@inject('socials', 'App\Models\SocialMedia')
@inject('footerimages', 'App\MOdels\FooterImage')
<div class="client-section ptb-120">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="client-heading-wrap">
                <h3>{{trans('front.happy-clients')}}</h3>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="client-para">
                <p>{{$setting->first()->getTranslation('footer_desc', \App::getLocale())}} </p>
              </div>
            </div>
          </div>
          <div class="row align-items-center justify-content-center mb-4">
            <div class="col-md-10 col-lg-9">
              <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap">
              <?php  $footerimages= $footerimages::get() ?>
                    @foreach($footerimages as $footerimage)
              <div class="item single-client">
                  <img src="{{ asset('images/footerimage/'.$footerimage->image)}}" class="client-img">
                </div>
               @endforeach
              </div>
            </div>
          </div>
        </div>
      </div> 
   
<footer id="saas_two_footer">

      <div class="footer_content pera-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="s2_footer_about">
                <div class="s2-footer_logo">
                  <a href="{{route('Front.index')}}"><img   src="{{ asset('images/setting/'.$setting->first()->logo)}}"></a>
                </div>
                <p class="mb-3">{{$setting->first()->getTranslation('description', \App::getLocale())}} </p>
                <div class="social-icons social-border circle social-hover mt-5">
                  <h4 class="title">{{trans('front.follow-us')}}</h4>
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
                  <span>{{trans('front.links')}}</span>
                  <i></i>
                </h3>
                <ul>
                <li class="">
                      <a class=" active" aria-current="page" href="{{route('Front.index')}}">{{trans('front.Home')}}</a>
                    </li>
                    <li class="">
                      <a class="" href="{{route('Front.about')}}">{{trans('front.about')}}</a>
                    </li>
                      <li class="">
                      <a class="" href="{{route('Front.ourworks')}}">{{trans('front.our-works')}} </a>
                    </li>
                   
                    <li class="">
                      <a class="" href="{{route('Front.services')}}">{{trans('front.services')}} </a>
                    </li>
                    <li class="">
                      <a class="" href="{{route('Front.blog')}}">{{trans('front.blogs')}}</a>
                    </li>

                    <li class="">
                      <a class="" href="{{route('Front.contactus')}}">{{trans('front.contact-us')}}</a>
                    </li>
                        
                    <li class="">
                      <a class="" href="{{route('Front.technicalsupport.register')}}">{{trans('front.requestservice')}}</a>
                    </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="s2_footer_social">
                <h3 class="s2_widget_title">
                  <span>{{trans('front.contact-us')}}</span>
                  <i></i>
                </h3>
                <ul class="media-icon list-unstyled">
                
                  <li><span style="color:#b6b5b4"> {{trans('front.address')}} : </span><strong> {{$setting->first()->getTranslation('address', \App::getLocale())}} </strong></li>
                  <li><span style="color:#b6b5b4"> {{trans('front.phone')}}: </span> <a href="">{{$setting->first()->phone}}</a></li>
                  <li><span style="color:#b6b5b4">{{trans('front.email')}}:</span><a href="#"> &nbsp;{{$setting->first()->email}}</a></li>
                 
                  <li>
                    <p class="mb-0"><span style="color:#fff;font-weight:bold"> {{trans('front.reservation')}}</span></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="s2-copyright text-center">2022 ?? All rights reserved by <a href="#">Active Web</a></div>
    </footer>

    <div class="ccw_plugin chatbot" style="bottom:30px; left:30px;">
      <div class="style4 bounce ccw-an"> 
        <a target="_blank" href="" class="nofocus">
          <div class="chip style-4 ccw-analytics" id="style-4" data-ccw="style-4" style="background-color: #e4e4e4; color: rgba(0, 0, 0, 0.6)"> 
            <i class="fab fa-whatsapp"></i>  ??????????  WhatsApp
          </div> 
        </a>
      </div>
    </div>

    <div class="ccw_pluginchatbot" style="bottom:30px; right:30px;">
      <div class="style4 bounce ccw-an"> 
        <a target="_blank" href="" class="nofocus">
          <div class="chip style-4 ccw-analytics" id="style-4" data-ccw="style-4" style="background-color: #e4e4e4; color: rgba(0, 0, 0, 0.6)"> 
            <i class="fab fa-facebook-messenger"></i>?????????? ????????????

          </div> 
        </a>
      </div>
    </div>
