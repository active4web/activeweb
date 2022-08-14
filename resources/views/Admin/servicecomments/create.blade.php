@extends('Admin.layouts.master')

@section('title','services')
@section('css')

@endsection

@section('content')

<div class="card">
  <div class="card-header pb-0">
    <h5>Add Service</h5>
  </div>
  <form class="form theme-form" action="{{route('Admin.servicecomment.store',$id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
      <div class="row">
        <div class="col-12">
          <div class="mb-3">
          <label class="col-form-label" for="recipient-name">url </label>
                        <input class="form-control  @error('url') is-invalid fparsley-error parsley-error @enderror" type="text" name="url" value="{{old('url',)}}">
                        @error('url')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
          </div>
        </div>
        <div class="col-12">
          <div class="mb-3">
          <label class="col-form-label" for="recipient-name">Comment  </label>
                        <textarea class="form-control ckeditor @error('comment') is-invalid fparsley-error parsley-error @enderror" name="comment" id="exampleFormControlTextarea4" rows="3">{{old('comment')}}</textarea>
                        @error('comment')
                        <span class="invalid-feedback ckeditor  text-black font-weight-bold text-capitalize mt-2" role="alert">
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