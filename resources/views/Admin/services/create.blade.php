@extends('Admin.layouts.master')

@section('title','services')
@section('css')

@endsection

@section('content')

<div class="card">
  <div class="card-header pb-0">
    <h5>Add Service</h5>
  </div>
  <form class="form theme-form" action="{{route('Admin.service.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">Title in English </label>
            <input class="form-control @error('title_en') is-invalid fparsley-error parsley-error @enderror" name="title_en" id="exampleFormControlInput1" type="text" placeholder="title" value="{{old('title_en')}}">
            @error('title_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1"> Title in Arabic </label>
            <input class="form-control @error('title_ar') is-invalid fparsley-error parsley-error @enderror" name="title_ar" id="exampleFormControlInput1" type="text" placeholder="title" value="{{old('title_ar')}}">
            @error('title_ar')
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
            <label class="form-label" for="exampleFormControlInput1">Description in English </label>
            <textarea class="form-control ckeditor @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_en" id="exampleFormControlTextarea4" rows="3">{{ old('description_en')}}</textarea>
            @error('description_en')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">Description in Arabic </label>
            <textarea class="form-control ckeditor @error('description_ar') is-invalid fparsley-error parsley-error @enderror" name="description_ar" id="exampleFormControlTextarea4" rows="3">{{old('description_ar')}}</textarea>
            @error('description_ar')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-8">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">image </label>
            <input class="form-control @error('image') is-invalid fparsley-error parsley-error @enderror" name="image" type="file">
            @error('image')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
          </div>
        </div>

      </div>

      <div class="row">



        <div class="card-footer text-end">
          <button class="btn btn-primary" type="submit">Add</button>
          <input class="btn btn-light" type="reset" value="Cancel">
        </div>
      </div>
  </form>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
@endsection