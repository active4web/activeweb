@extends('Admin.layouts.master')

@section('title','Our-Works-Details')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

<!-- Base styles-->
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>ourworks</h5>
      <a class="btn btn-success" href="{{route('Admin.ourworkdetail.create')}}"> Add New Work detail </a>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="example-style-1">
          <thead>

            <tr>
              <th>ID</th>
              <th>Description</th>
              <th>Work</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach($ourworkDetails as $key=> $ourworkdetail)
            <tr>
              <td>{{$key +1}}</td>
              <td>{{$ourworkdetail->description}}</td>
              <td>{{$ourworkdetail->ourWork->title}}</td>
              <td>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo{{$ourworkdetail->id}}" data-whatever="@mdo"><i class="fa fa-edit"></i></button>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$ourworkdetail->id}}"><i class="fa fa-trash-o"></i></button>


              </td>
            </tr>
            <!-- modal edit !-->
            <div class="modal fade" id="exampleModalmdo{{$ourworkdetail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">{{$ourworkdetail->title}}</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('Admin.ourworkdetail.update',$ourworkdetail->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method ('PUT')




                      <input type="hidden" id="id" name="id" value="{{$ourworkdetail->id}}">
                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">Description in English </label>
                        <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_en" id="exampleFormControlTextarea4" rows="3">{{old('description_en',$ourworkdetail->getTranslation('description','en'))}}</textarea>
                        @error('decription_en')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>

                      <div class="mb-3">

                        <label class="col-form-label" for="recipient-name">Description in Arabic</label>
                        <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_ar" id="exampleFormControlTextarea4" rows="3">{{old('description_en',$ourworkdetail->getTranslation('description','ar'))}}</textarea>
                        @error('decription_ar')
                        <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                          <p>{{ $message }}</p>
                        </span>
                        @enderror
                      </div>
                      <div class="mb-3 draggable ui-draggable ui-draggable-handle">
                        <label for="formcontrol-NaN">Work</label>
                        <select class="form-control @error('ourwork_id') is-invalid fparsley-error parsley-error @enderror btn-square" id="formcontrol-NaN" name="ourwork_id">
                          <option value=""> Choose work </option>
                          @foreach($works as $work)
                          <option value="{{$work->id}}" @if ($ourworkdetail->ourwork_id == $work->id) selected @endif>{{$work->title}}</option>

                          @endforeach
                        </select>

                      </div>
                      @error('ourwork_id')
                      <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                        <p>{{ $message }}</p>
                      </span>
                      @enderror

                      


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
            <div class="modal fade" id="exampleModal{{$ourworkdetail->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">delete ourworkdetail</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{route('Admin.ourworkdetail.destroy',$ourworkdetail->id)}}">
                      @csrf
                      @method('DELETE')
                      <p> Are you sure you want to delete this ourworkdetail ?</p>
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
              <th>Description</th>
              <th>Work</th>
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