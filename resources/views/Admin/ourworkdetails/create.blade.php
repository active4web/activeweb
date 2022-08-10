@extends('Admin.layouts.master')

@section('title','our-work-Detail')
@section('css')

@endsection

@section('content')

<div class="card">
  <div class="card-header pb-0">
    <h5>Add New Work Detail</h5>
  </div>
  <form class="form theme-form" action="{{route('Admin.ourworkdetail.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
   
      <div class="row">
        <div class="col-6">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">Description in English </label>
            <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_en" id="exampleFormControlTextarea4" rows="3">{{old('description_en')}}</textarea>
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
            <textarea class="form-control @error('description_ar') is-invalid fparsley-error parsley-error @enderror" name="description_ar" id="exampleFormControlTextarea4" rows="3">{{old('description_ar')}}</textarea>
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
          <div class="mb-3 draggable ui-draggable ui-draggable-handle">
            <label for="formcontrol-NaN">Work</label>
            <select class="form-control @error('ourwork_id') is-invalid fparsley-error parsley-error @enderror btn-square" id="formcontrol-NaN" name="ourwork_id">
              <option value=""> Choose work </option>
              @foreach($works as $work)
              <option value="{{$work->id}}">{{$work->title}}</option>

              @endforeach
            </select>

          </div>
          @error('ourwork_id')
          <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
            <p>{{ $message }}</p>
          </span>
          @enderror
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

@endsection