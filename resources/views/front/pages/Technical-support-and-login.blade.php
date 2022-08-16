 @extends('front.layouts.master')

@section('title')



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




      <div class="main-techince" >
        <section class="contact-sec-two sec-title pb-0">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5 col-md-5 px-0 contact-form">
                <div class="left-sec contact-page">
                  <h2 class="titleopo"> {{trans('front.login')}}</h2>
                  
                  <form class="form-contact" action="{{route('client-login')}}" method="post">
                    @if ($errors->any())
		                    	@foreach ($errors->all() as $error)
		                    	<div class="alert alert-danger text-center my-1" role="alert">
				                      {{ $error }}
		                               	</div>
		                            	@endforeach
		                                 	@endif
                    @csrf


                
                    <div class="form-group form-focus">
                      <label class="control-label">{{trans('front.phone')}}</label>
                      <input class="form-control floating" type="text" name="phone" value="{{old('phone')}}">
                    </div>

                    <div class="form-group form-focus">
                      <label class="control-label">{{trans('front.password')}}</label>
                      <input class="form-control floating" type="password" name="password">
                    </div>
                    <button class="btn btn--primary"  type="submit">{{trans('front.send')}}</a>
                  </form>                 
                </div><!-- left-sec contact-page -->
              </div><!-- col-lg-7 col-md-7 pr-0 contact-form -->
            </div><!-- row justify-content-center -->
          </div><!-- container -->
        </section>
      </div>



@endsection