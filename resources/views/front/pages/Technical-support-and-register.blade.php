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




<div class="main-techince">
  <section class="contact-sec-two sec-title pb-0">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5 px-0 contact-form">
          <div class="left-sec contact-page">
            <h2 class="titleopo">{{trans('front.register-now')}}</h2>

            <form class="form-contact" action="{{route('client-register')}}" method="post">
              @csrf


              <div class="form-group form-focus">
                <label class="control-label">{{trans('front.full-name')}}</label>
                <input class="form-control floating @error('name') is-invalid fparsley-error parsley-error @enderror" type="text" name="name" value="{{old('name')}}">

                @error('name')
                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                  <p>{{ $message }}</p>
                </span>
                @enderror
              </div>
              <div class="form-group form-focus">
                <label class="control-label">{{trans('front.email')}}</label>
                <input class="form-control floating @error('email') is-invalid fparsley-error parsley-error @enderror" type="email" name="email" value="{{old('email')}}">

                @error('email')
                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                  <p>{{ $message }}</p>
                </span>
                @enderror
              </div>
              <div class="form-group form-focus">
                <label class="control-label">{{trans('front.phone')}}</label>
                <input class="form-control floating @error('phone') is-invalid fparsley-error parsley-error @enderror" type="text" name="phone" value="{{old('phone')}}">

                @error('phone')
                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                  <p>{{ $message }}</p>
                </span>
                @enderror
              </div>
              <div class="form-group form-focus">
                <label class="control-label">{{trans('front.password')}}</label>
                <input class="form-control floating @error('password') is-invalid fparsley-error parsley-error @enderror" type="password" name="password">

                @error('password')
                <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                  <p>{{ $message }}</p>
                </span>
                @enderror
              </div>
              <button class="btn btn--primary" type="submit">{{trans('front.send')}}</a>
            </form>
          </div><!-- left-sec contact-page -->
        </div><!-- col-lg-7 col-md-7 pr-0 contact-form -->
      </div><!-- row justify-content-center -->
    </div><!-- container -->
  </section>
</div>



@endsection