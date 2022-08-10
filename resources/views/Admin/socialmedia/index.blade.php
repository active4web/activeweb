@extends('Admin.layouts.master')

@section('title','Socialmedia')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">

@endsection

@section('content')

   <!-- Base styles-->
   <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Base style </h5><span><code>stripe</code></span>

                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="example-style-1">
                        <thead>
                       
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Action</th>
            
                        
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($socials as $key=> $social)
                          <tr>
                            <td>{{$key +1}}</td>
                           <td>{{$social->name}}</td>
                            <td>{{$social->link}}</td>
                            <td>            
                              
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo{{$social->id}}" data-whatever="@mdo"><i class="fa fa-edit"></i></button>
                            </td>
                          </tr>
  
                      
                    <div class="modal fade" id="exampleModalmdo{{$social->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">{{$social->name}}</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('Admin.socialmedia.update',$social->id)}}" method="post">
                                @csrf 
                                @method  ('PUT')
                              <div class="mb-3">
                                <input type="hidden" id="id" value="{{$social->id}}"
                                <label class="col-form-label" for="recipient-name">Link</label>
                                <input class="form-control" id="recipient-name" name="link" type="text" value="{{$social->link}}">
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
                      
                         @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                          <th>ID</th>
                            <th>Name</th>
                            <th>Link</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Base styles Ends-->
@endsection

@section('js')
<<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('../assets/js/datatable/datatables/datatable.custom.js')}}"></script>
    <!-- Plugins JS Ends-->
     <script src="{{ asset('assets/js/tooltip-init.js')}}"></script>
@endsection
