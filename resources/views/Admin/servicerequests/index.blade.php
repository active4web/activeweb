@extends('Admin.layouts.master')

@section('title','Service Requests')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

<!-- Base styles-->
<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h5>Service Requests </h5>

    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="display" id="example-style-1">
          <thead>

            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">user-email</th>
              <th scope="col">service</th>
              <th scope="col">Action</th>


            </tr>
          </thead>
          <tbody>
            
            @foreach($servicerequests   as $key=> $servicerequest)
            <tr>
              <td>{{$key +1  }}</td>
              <td>{{$servicerequest->name}}</td>
              <td>{{$servicerequest->users->email}}</td>
              <td>{{$servicerequest->services->title}}</td>
              <td>
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$servicerequest->id}}"><i class="fa fa-trash-o"></i></button>
                <a class="btn btn-primary" href="{{route('Admin.servicecomment.create',$servicerequest->service_id)}}"><i class="fa fa-plus-square"></i></a>
              </td>
            </tr>
         
            <!-- modal delete !-->
            <div class="modal fade" id="exampleModal{{$servicerequest->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">delete servicerequest</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{route('Admin.servicerequest.destroy',$servicerequest->id)}}">
                      @csrf
                      @method('PUT')
                      <p> Are you sure you want to delete this servicerequest ?</p>
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
              <th scope="col">Name</th>
              <th scope="col">user-email</th>
              <th scope="col">service</th>
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