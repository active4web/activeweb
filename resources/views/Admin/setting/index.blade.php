@extends('Admin.layouts.master')

@section('title','الرئيسية')
@section('css')
<link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">
@endsection

@section('content')

   <!-- Base styles-->
   <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Base style </h5><span><code>stripe</code></span>

                    <a href="{{route('Admin.setting.create')}}">Add Setting</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="example-style-1">
                        <thead>
                       
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>description</th>
                            <th>Logo</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($settings as $key=> $setting)
                          <tr>
                            <td>{{$key +1}}</td>
                           <td>{{$setting->getTranslation('app_name', 'en');}}</td>
                            <td>{{$setting->getTranslation('description', 'en');}}</td>
                            <td><img  style= "width:100px;"src="{{asset('images/setting/'.$setting->logo)}}"/></td>
                            <td>{{$setting->email}}</td>
                            <td>{{$setting->getTranslation('address', 'en');}}</td>
                            <td>{{$setting->phone}}</td>
                            <td>Edinburgh</td>
                            
                          
                          </tr>
                         @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                          <th>ID</th>
                            <th>Name</th>
                            <th>description</th>
                            <th>Logo</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        
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
<script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
@endsection

