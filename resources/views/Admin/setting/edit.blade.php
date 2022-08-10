@extends('Admin.layouts.master')

@section('title','setting')
@section('css')

@endsection

@section('content')

<div class="card">
  <div class="card-header pb-0">
    <h5>Setting</h5>
  </div>
  <form class="form theme-form" action="{{route('Admin.setting.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method ('PUT')
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">Name </label>
            <input class="form-control @error('name_en') is-invalid fparsley-error parsley-error @enderror" name="name_en" id="exampleFormControlInput1" type="text" placeholder="name in english " value="{{$setting->getTranslation('app_name','en')}}">
            @error('name_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">Name </label>
            <input class="form-control @error('name_ar') is-invalid fparsley-error parsley-error @enderror" name="name_ar" id="exampleFormControlInput1" type="text" placeholder="name in arabic" value="{{$setting->getTranslation('app_name','ar')}}">
            @error('name_ar')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> description in english</label>
            <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_en" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('description','en')}}</textarea>
            @error('description_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> description in arabic</label>
            <textarea class="form-control @error('description_ar') is-invalid fparsley-error parsley-error @enderror" name="description_ar" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('description','ar')}}</textarea>
            @error('description_ar')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>
   

      
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleInputPassword2">address</label>
            <input class="form-control @error('address_en') is-invalid fparsley-error parsley-error @enderror" name="address_en" id="exampleInputPassword2" type="text" placeholder="adrees in english" value="{{$setting->getTranslation('address','en')}}">
            @error('address_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleInputPassword2">address</label>
            <input class="form-control @error('address_ar') is-invalid fparsley-error parsley-error @enderror" name="address_ar" id="exampleInputPassword2" type="text" placeholder="adress in arabic" value="{{$setting->getTranslation('address','ar')}}">
            @error('address_ar')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> Service description in english</label>
            <textarea class="form-control @error('service_desc_en') is-invalid fparsley-error parsley-error @enderror" name="service_desc_en" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('service_desc','en')}}</textarea>
            @error('service_desc_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> Service description in arabic</label>
            <textarea class="form-control @error('service_desc_ar') is-invalid fparsley-error parsley-error @enderror" name="service_desc_ar" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('service_desc','ar')}}</textarea>
            @error('service_desc_ar')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> Blog description in english</label>
            <textarea class="form-control @error('blog_desc_en') is-invalid fparsley-error parsley-error @enderror" name="blog_desc_en" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('blog_desc','en')}}</textarea>
            @error('blog_desc_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> Blog description in arabic</label>
            <textarea class="form-control @error('blog_desc_ar') is-invalid fparsley-error parsley-error @enderror" name="blog_desc_ar" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('blog_desc','ar')}}</textarea>
            @error('blog_desc_ar')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> Ourwork description in english</label>
            <textarea class="form-control @error('work_desc_en') is-invalid fparsley-error parsley-error @enderror" name="work_desc_en" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('work_desc','en')}}</textarea>
            @error('work_desc_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlTextarea4"> Ourwork description in arabic</label>
            <textarea class="form-control @error('ourworkdesc_ar') is-invalid fparsley-error parsley-error @enderror" name="ourworkdesc_ar" id="exampleFormControlTextarea4" rows="3">{{$setting->getTranslation('work_desc','ar')}}</textarea>
            @error('ourworkdesc_ar')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label">Logo</label>
            <input class="form-control @error('logo') is-invalid fparsley-error parsley-error @enderror" name="logo" type="file">
            @error('logo')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <img style="width:100px;" src="{{asset('images/setting/'.$setting->logo)}}" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleInputPassword2">Email</label>
            <input class="form-control @error('email') is-invalid fparsley-error parsley-error @enderror" name="email" id="exampleInputPassword2" type="email" placeholder="Email" value="{{$setting->email}}">
            @error('email')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleInputPassword2">phone</label>
            <input class="form-control @error('phone') is-invalid fparsley-error parsley-error @enderror" name="phone" id="exampleInputPassword2" type="text" placeholder="phone" value="{{$setting->phone}}">
            @error('phone')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>
      <div class="row">



        <div class="card-footer text-end">
          <button class="btn btn-primary" type="submit">update</button>
          <input class="btn btn-light" type="reset" value="Cancel">
        </div>
      </div>
  </form>
</div>
@endsection

@section('js')

@endsection