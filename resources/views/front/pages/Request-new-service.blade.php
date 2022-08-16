@extends('front.layouts.master')

@section('title')

Services - خدماتنا

@endsection

@section('css')

@endsection 


@section('content')  
       
      <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ asset('images/pagesbanner/'.$banner->image)}})no-repeat center center / cover">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
              <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
              <h1 class="text-white mb-0">{{trans('front.ask-new-service')}}</h1></h1>
                <div class="custom-breadcrumb">
                  <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                    <li class="list-inline-item"><a href="{{route('Front.index')}}">{{trans('front.Home')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item"><a href="#">{{trans('front.pages')}}</a><i class="fas fa-angle-right fa-fw"></i></li>
                    <li class="list-inline-item active">{{trans('front.ask-new-service')}}</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <div class="formrequestnew">
        <div class="container">

          <div class="row justify-content-center"> 
            <div class="col-lg-7 col-md-7 px-0 contact-form">

              <div class="left-sec contact-page">
                <h2 class="titleopo">{{trans('front.ask-new-service')}}</h2>
                
                <form class="form-contact"  method="post" action="{{route('Front.service.requeststore')}}">
                   @csrf
                  <div class="form-group form-focus">
                    <label class="control-label" >{{trans('front.user-name')}}</label>
                    <input class="form-control floating" type="text" name="name">
                  </div>

                  <div class="form-group">
                    <select  class="form-control" name="service_id">  
                      <option selected="selected" value="">{{trans('front.ask-service')}}</option>
                      @foreach($services as $service)
                      <option value="{{$service->id}}">{{$service->getTranslation('title',\App::getlocale())}}</option>
                     
                      @endforeach
                    </select>
                  </div>
                <button class="btn btn-link  btn-outline-light" type="submit" ><a class="btn btn--primary"> {{trans('front.send')}}</a> </button>
                </form>                 
              </div>
            </div>
          </div>


          
        </div><!-- container -->
      </div><!-- formrequestnew -->


 

     


   @endsection