@extends('Admin.layouts.master')

@section('title','Servicecomments-Comments')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

<!-- Base styles-->
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>Servicecomments</h5>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="example-style-1">
          <thead>

            <tr>
              <th>ID</th>
              <th>Comment</th>
              <th>Url</th>
              <th>Image</th>
              <th>Servicecomment</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($servicecomments as $key=> $servicecomment)
            <tr>
              <td>{{$key +1}}</td>
              <td>{!! $servicecomment->comment !!}</td>
              <td>{{$servicecomment->site_url}}</td>
              <td> <img style="width:60px;" src="{{asset('images/servicecomment/'.$servicecomment->file)}}"></td>
              <td>{{$servicecomment->services->title}}</td>
              <td>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo{{$servicecomment->id}}" data-whatever="@mdo"><i class="fa fa-edit"></i></button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$servicecomment->id}}"><i class="fa fa-trash-o"></i></button>


              </td>
            </tr>
            <!-- modal edit !-->
            <div class="modal fade" id="exampleModalmdo{{$servicecomment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">{{$servicecomment->services->title}}</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('Admin.servicecomment.update',$servicecomment->services->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method ('PUT')
                    
                        <input type="hidden" id="id" name="id" value="{{$servicecomment->id}}">
                      

                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">url </label>
                        <input class="form-control  @error('url') is-invalid fparsley-error parsley-error @enderror" type="text" name="url" value="{{old('url',$servicecomment->site_url)}}">
                        @error('url')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>

                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">Comment  </label>
                        <textarea class="form-control ckeditor @error('comment') is-invalid fparsley-error parsley-error @enderror" name="comment" id="exampleFormControlTextarea4" rows="3">{{old('comment',$servicecomment->comment)}}</textarea>
                        @error('comment')
                        <span class="invalid-feedback ckeditor  text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <label class="col-form-label" for="recipient-name">image </label>
                        <input class="form-control @error('image') is-invalid fparsley-error parsley-error @enderror" name="image" type="file" value="{{$servicecomment->file}}">
                        @error('image')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>


                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" type="submit">edit</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- modal delete !-->
            <div class="modal fade" id="exampleModal{{$servicecomment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">delete servicecomment</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{route('Admin.servicecomment.destroy',$servicecomment->id)}}">
                      @csrf
                      @method('DELETE')
                      <p> Are you sure you want to delete this servicecomment ?</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-secondary" type="submit">Delete</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th>Link</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>
  <!-- Base styles Ends-->
  @endsection

  @section('js')
  <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('../assets/js/datatable/datatables/datatable.custom.js')}}"></script>
  <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
  <!-- Plugins JS Ends-->
  <script src="{{ asset('assets/js/tooltip-init.js')}}"></script>
  @endsection