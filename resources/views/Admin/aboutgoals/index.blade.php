@extends('Admin.layouts.master')

@section('title','About goals')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

<!-- Base styles-->
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>About goals</h5>
      <a class="btn btn-success" href="{{route('Admin.aboutgoal.create')}}"> Add </a>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="example-style-1">
          <thead>

            <tr>
              <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($aboutgoals as $key=> $aboutgoal)
            <tr>
              <td>{{$key +1}}</td>
              <td>{{$aboutgoal->title}}</td>
              <td>{{$aboutgoal->description}}</td>
              <td>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo{{$aboutgoal->id}}" data-whatever="@mdo"><i class="fa fa-edit"></i></button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$aboutgoal->id}}"><i class="fa fa-trash-o"></i></button>


              </td>
            </tr>
            <!-- modal edit !-->
            <div class="modal fade" id="exampleModalmdo{{$aboutgoal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">{{$aboutgoal->title}}</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('Admin.aboutgoal.update',$aboutgoal->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method ('PUT')
                      <div class="mb-3">
                        <input type="hidden" id="id" name="id" value="{{$aboutgoal->id}}">
                        <label class="col-form-label" for="recipient-name">Title in English </label>
                        <input class="form-control  @error('title_en') is-invalid fparsley-error parsley-error @enderror" type="text" name="title_en" value="{{old('title_en',$aboutgoal->getTranslation('title','en'))}}">
                        @error('title_en')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>

                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">Title in Arabic </label>
                        <input class="form-control  @error('title_ar') is-invalid fparsley-error parsley-error @enderror" type="text" name="title_ar" value="{{old('title_ar',$aboutgoal->getTranslation('title','ar'))}}">
                        @error('title _ar')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                       
                        <label class="col-form-label" for="recipient-name">Description in English </label>
                        <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_en" id="exampleFormControlTextarea4" rows="3">{{old('description_en',$aboutgoal->getTranslation('description','en'))}}</textarea>
                        @error('decription_en')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>

                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">Description in Arabic</label>
                        <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_ar" id="exampleFormControlTextarea4" rows="3">{{old('description_en',$aboutgoal->getTranslation('description','ar'))}}</textarea>
                        @error('decription_ar')
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
      <div class="modal fade" id="exampleModal{{$aboutgoal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">delete aboutgoal</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('Admin.aboutgoal.destroy',$aboutgoal->id)}}">
                @csrf
                @method('DELETE')
                <p> Are you sure you want to delete this aboutgoal ?</p>
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
        <th scope="col">ID</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
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