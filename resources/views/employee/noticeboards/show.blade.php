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
                                <a href="{{route('employee.noticeboards')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>Notices</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                    <h5 class="card-title"> Notice id : {{ $notices->id }}</h5>
                    <p class="card-text">Title : {{ $notices->title }}</p>
                    <p class="card-text">Description : {{ $notices->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
