@extends('Admin.layouts.master')

@section('title','comment-us')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

<!-- Base styles-->
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>comments</h5>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="example-style-1">
          <thead>

            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Service</th>
              <th scope="col">Message</th>
              <th scope="col">Reply</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            
            @foreach($comments as $key=> $comment)
            <tr>
              <td>{{$key +1}}</td>
              <td>{{$comment->serviceRequest->users->name}}</td>
              <td>{{$comment->serviceRequest->users->email}}</td>
              <td>{{$comment->serviceRequest->services->title}}</td>
              <td>{{$comment->comment}}</td>
              <td>{{$comment->reply}}</td>
              @if($comment->status == 0)
              <td>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$comment->id}}">Reply</button>
              </td>
              @else
              <td>

              </td>
              @endif
            </tr>
         
            <!-- modal  !-->
            <div class="modal fade" id="exampleModal{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">reply comment</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{route('Admin.clientcomment.reply',$comment->id)}}">
                      @csrf
                      @method('PUT')
                      <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">Reply To the client </label>
            <textarea class="form-control @error('reply') is-invalid fparsley-error parsley-error @enderror" name="reply" id="exampleFormControlTextarea4" rows="3">{{old('reply')}}</textarea>
            @error('reply')
            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
              <p>{{ $message }}</p>
            </span>
            @enderror
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-secondary" type="submit">reply</button>
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
              <th>Name</th>
              <th>Email</th>
              <th>Service</th>
              <th>Message</th>
              <th scope="col">Reply</th>
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