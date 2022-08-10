@extends('Admin.layouts.master')

@section('title','banners')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

<!-- Base styles-->
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>Banners</h5>
      <a class="btn btn-success" href="{{route('Admin.banner.create')}}"> Add Banner</a>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="example-style-1">
          <thead>

            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Image</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($banners as $key=> $banner)
            <tr>
              <td>{{$key +1}}</td>
              <td>{{$banner->title}}</td>
              <td> <img style="width:100px;" src="{{asset('images/banner/'.$banner->image)}}"></td>
              <td>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo{{$banner->id}}" data-whatever="@mdo"><i class="fa fa-edit"></i></button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$banner->id}}"><i class="fa fa-trash-o"></i></button>


              </td>
            </tr>
            <!-- modal edit !-->
            <div class="modal fade" id="exampleModalmdo{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">{{$banner->title}}</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('Admin.banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method ('PUT')
                      <div class="mb-3">
                        <input type="hidden" id="id" name="id" value="{{$banner->id}}">
                        <label class="col-form-label" for="recipient-name">title</label>
                        <input class="form-control  @error('title') is-invalid fparsley-error parsley-error @enderror" id="recipient-name" type="text" name="title" value="{{$banner->title}}">
                        @error('image')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="col-form-label" for="recipient-name">image </label>
                        <input class="form-control @error('image') is-invalid fparsley-error parsley-error @enderror" id="recipient-name" name="image" type="file" value="{{$banner->link}}">
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
            <div class="modal fade" id="exampleModal{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">delete Banner</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{route('Admin.banner.destroy',$banner->id)}}">
                      @csrf
                      @method('DELETE')
                      <p> Are you sure you want to delete this banner ?</p>
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
              <th>title</th>
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
  <!-- Plugins JS Ends-->
  <script src="{{ asset('assets/js/tooltip-init.js')}}"></script>
  @endsection