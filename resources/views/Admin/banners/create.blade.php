@extends('Admin.layouts.master')

@section('title','setting')
@section('css')

@endsection

@section('content')

<div class="card">
                  <div class="card-header pb-0">
                    <h5>Basic form control</h5>
                  </div>
                  <form class="form theme-form" action="{{route('Admin.banner.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card-body">
                      <div class="row">
                        <div class="col-8">
                          <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">title </label>
                            <input class="form-control @error('title') is-invalid fparsley-error parsley-error @enderror"  name="title" id="exampleFormControlInput1" type="text" placeholder="title" value="{{old('title')}}">
                            @error('title')
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
                            <input class="form-control @error('image') is-invalid fparsley-error parsley-error @enderror" name="image" type="file"  >
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

@endsection
