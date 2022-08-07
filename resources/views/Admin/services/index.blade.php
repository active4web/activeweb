@extends('Admin.layouts.master')

@section('title','Services')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
@endsection

@section('content')

   <!-- Base styles-->
   <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Services</h5>
                      <a class="btn btn-success" href="{{route('Admin.service.create')}}"> Add Service</a>
                    
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="example-style-1">
                        <thead>
                       
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
            
                        
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $key=> $service)
                          <tr>
                            <td>{{$key +1}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->description}}</td>
                            <td> <img style= "width:60px;" src="{{asset('images/service/'.$service->image)}}"></td>
                            <td>       
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo{{$service->id}}" data-whatever="@mdo">edit</button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$service->id}}">delete</button>
                          
                          
                            </td>
                          </tr>
                        <!-- modal edit !-->
                    <div class="modal fade" id="exampleModalmdo{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">{{$service->title}}</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('Admin.service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                                @csrf 
                                @method  ('PUT')
                                <div class="mb-3"> 
                                <input type="hidden" id="id"name= "id" value="{{$service->id}}">
                                <label class="col-form-label" for="recipient-name">Title in English </label>
                                <input class="form-control  @error('title') is-invalid fparsley-error parsley-error @enderror"  type="text" name="title_en" value="{{old('title_en',$service->getTranslation('title','en'))}}">
                               @error('title_en')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                           </div> 

                                <div class="mb-3"> 
                               
                                   <label class="col-form-label" for="recipient-name">Title in Arabic </label>
                                   <input class="form-control  @error('title') is-invalid fparsley-error parsley-error @enderror"  type="text" name="title_ar" value="{{old('title_ar',$service->getTranslation('title','ar'))}}">
                                   @error('title _ar')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                           </div> 

                                           <div class="mb-3"> 
                                           
                                            <label class="col-form-label" for="recipient-name">Description in English </label>
                                             <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_en" id="exampleFormControlTextarea4" rows="3">{{old('description_en',$service->getTranslation('description','en'))}}</textarea>
                                            @error('decription_en')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                           </div>  
                                           
                                           <div class="mb-3"> 

                                            <label class="col-form-label" for="recipient-name">Description in Arabic</label>
                                        <textarea class="form-control @error('description_en') is-invalid fparsley-error parsley-error @enderror" name="description_ar" id="exampleFormControlTextarea4" rows="3">{{old('description_en',$service->getTranslation('description','ar'))}}</textarea>
                                            @error('decription_ar')
                                            <span class="invalid-feedback text-black font-weight-bold text-capitalize mt-2" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                            @enderror
                                           </div> 

                              <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">image </label>
                                <input class="form-control @error('image') is-invalid fparsley-error parsley-error @enderror"  name="image" type="file" value="{{$service->link}}">
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
                    <div class="modal fade" id="exampleModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">delete service</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <form method="post" action="{{route('Admin.service.destroy',$service->id)}}">
                            @csrf 
                            @method('DELETE')
                          <p> Are you sure you want to delete this service ?</p>
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
    <!-- Plugins JS Ends-->
     <script src="{{ asset('assets/js/tooltip-init.js')}}"></script>
@endsection
