@extends('employee.layouts.app')
@section('pageTitle')

@section('content')

    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <h3 class="card-label">Profile</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                        {{--                            @can('create', \App\Models\Admin::class)--}}
                        {{--                            <a href="{{route('admin.noticeboards.create')}}" class="btn btn-success">--}}
                        {{--                                <i class="flaticon2-plus-1"></i> Add New--}}
                        {{--                            </a>--}}
                        {{--                        @endcan--}}
                        <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Local Address</label>
                                        {{--                                            <input type="text" class="form-control" placeholder="Home Address" value="Mirpur,Dhaka">--}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Permanent Address</label>
                                        {{--                                            <input type="text" class="form-control" placeholder="Home Address" value="Mirpur,Dhaka">--}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City:</label>
                                        Dhaka
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country:</label>
                                        {{--                                            <input type="text" class="form-control" placeholder="Country" value="Bangladesh">--}}
                                    </div>
                                </div>
                            </div>

                            {{--                                <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>--}}


                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>

@endsection

@once
    @push('scripts')
        <!--begin::Page Vendors(used by this page)-->
        <script src="{{asset('assets/global/datatables/datatables.bundle.js')}}"></script>
        <!--end::Page Vendors-->
        <!--begin::Page Scripts(used by this page)-->
        {{--<script src="{{asset('assets/global/datatables/basic.js')}}"></script>--}}
        <!--end::Page Scripts-->
        <script>
            // Your custom JavaScript...
        </script>
    @endpush
@endonce
