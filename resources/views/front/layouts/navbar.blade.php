@inject('setting', 'App\Models\Setting')
@inject('socials','App\Models\SocialMedia')
    <header>
      <div class="header">
        <div class="top-contacts py-2">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-12 px-0">
                <div class="right-part">
                 
                  <a href="tel:01001161097" class="cont-link p-2">{{$setting->first()->phone}}</a>
                  <a href="{{$setting->email}}" class="cont-link p-2">{{$setting->first()->email}}</a> 
               
                  @if(App::getLocale() == 'en')
                  <a  class="cont-link p-2 " href="{{url('lang/ar')}}" >{{trans('front.arabic')}}</a>
                  @else
                  <a   class="cont-link p-2"href="{{url('lang/en')}}">{{trans('front.english')}}</a>
                  @endif
                </div>
              </div>
              <div class="col-md-6 col-12 px-0">
                <div class="left-part">
                <?php  $socials= $socials::get() ?>
                    @foreach($socials as $social)
                  <a href="{{$social->link}}"><i class="fab fa-{{$social->name}} "></i></a>
                  
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-bg" id="navbar">
          <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-dark ">
              <div class="row  justify-content-between px-0">
                <div class="col-md-3 col-12 px-0">
                  <a  class="navbar-brand m-0" href="{{route('Front.index')}}"><img src="{{ asset('images/setting/'.$setting->first()->logo)}}"></a>
                </div>
                <div class="col-md-9 col-12 pl-0">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('Front.index')}}">{{trans('front.Home')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.about')}}">{{trans('front.about')}}</a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.ourworks')}}">{{trans('front.our-works')}} </a>
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.services')}}">  {{trans('front.services')}} </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.blog')}}">{{trans('front.blogs')}}</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.contactus')}}">{{trans('front.contact-us')}}</a>
                    </li>
                        
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.service.request')}}">{{trans('front.requestservice')}}</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
       

        

      <div class="hamburger OpenMenu hamburger--arrow js-hamburger">
        <div class="hamburger-box"><i class="fas fa-bars"></i></div>
      </div>
      <div class="BadMenu">
        <div class="MooobMenu">
          <div class="menu-wrapper">
            <nav class="main-nav">
              <ul id="main-menu">
              <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('Front.index')}}">{{trans('front.Home')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.about')}}">{{trans('front.about')}}</a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.ourworks')}}">{{trans('front.our-works')}} </a>
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.services')}}">  {{trans('front.services')}} </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.blog')}}">{{trans('front.blogs')}}</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.contactus')}}">{{trans('front.contact-us')}}</a>
                    </li>
                        
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('Front.service.request')}}">{{trans('front.requestservice')}}</a>
                    </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      </div>
    </header>