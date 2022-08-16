
@extends('Admin.layouts.master')

@section('title','Home')
@section('css')

@endsection

@section('content')
@if(Auth::check() && Auth::user()->role == 0)
<div class="card-body">
                <div class="alert alert-danger text-center" style="width: 350px;">
                    <p> You dont have access to this dashboard </p>
                    </div>
                </div>
                @endif
@endsection

@section('js')

@endsection

