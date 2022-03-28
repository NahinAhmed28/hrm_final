@extends('admin.layouts.app')
@section('pageTitle',)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">{{$pageTitle}}</h3>--}}
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.departments.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>departments</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">department name : {{ $department->deptName }}</h5>
                        <p class="card-text">ID : {{ $department->id }}</p>
                        <p class="card-text">Created At : {{ \Carbon\Carbon::parse($department->created_at)->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
