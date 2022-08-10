@extends('Admin.layouts.master')

@section('title','Categories')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

<!-- Base styles-->
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>Categories</h5>
      <a class="btn btn-success" href="{{route('Admin.category.create')}}"> Add category</a>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="example-style-1">
          <thead>

            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Count</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($categories as $key=> $category)
            <tr>
              <td>{{$key +1}}</td>
              <td>{{$category->title}}</td>
              <td>{{$category->count}}</td>
              <td>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo{{$category->id}}" data-whatever="@mdo"><i class="fa fa-edit"></i></button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$category->id}}">delete</button>
              </td>
            </tr>
            <!-- modal edit !-->
            <div class="modal fade" id="exampleModalmdo{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">{{$category->title}}</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('Admin.category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method ('PUT')
                      <div class="mb-3">
                        <input type="hidden" id="id" name="id" value="{{$category->id}}">
                        <label class="col-form-label" for="recipient-name">Title in English </label>
                        <input class="form-control  @error('title') is-invalid fparsley-error parsley-error @enderror" type="text" name="title_en" value="{{old('title_en',$category->getTranslation('title','en'))}}">
                        @error('title_en')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>

                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">Title in Arabic </label>
                        <input class="form-control  @error('title') is-invalid fparsley-error parsley-error @enderror" type="text" name="title_ar" value="{{old('title_ar',$category->getTranslation('title','ar'))}}">
                        @error('title _ar')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>


                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">Count </label>
                        <input class="form-control  @error('count') is-invalid fparsley-error parsley-error @enderror" type="text" name="count" value="{{old('count',$category->count)}}">
                        @error('count')
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
            <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">delete category</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{route('Admin.category.destroy',$category->id)}}">
                      @csrf
                      @method('DELETE')
                      <p> Are you sure you want to delete this category ?</p>
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
              <th>Count</th>
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