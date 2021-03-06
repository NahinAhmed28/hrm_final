@extends('employee.layouts.app')
@section('pageTitle')

@section('content')

    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3" >
                        <div class="card-title" style="margin-left: 20px" >
                            <h3 class="card-label">Leaves Applications</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                        {{--                            @can('create', \App\Models\Admin::class)--}}
                                                    <a href="{{route('employee.leaves.create')}}" class="btn btn-success">
                                                        <i class="flaticon2-plus-1"></i> Add New Application
                                                    </a>
                        {{--                        @endcan--}}
                        <!--end::Button-->
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive" >
                            <table class="table table-bordered" style="margin-left: 20px">
                                <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Leave Title</th>
                                    <th scope="col">Leave Type</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Leave Days</th>
                                    <th scope="col">Application Issued at</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($leaves as $leave)
                                    <tr>
                                        <td>{{$leave->id}}</td>
                                        <td>{{$leave->title}}</td>
                                        <td>{{$leave->description}}</td>
                                        <td>{{$leave->leaveDays}}</td>
                                        <td>{{$leave->leaveType}}</td>
                                        <td>{{$leave->created_at->diffForHumans()}}</td>
                                        <td>{{$leave->status}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
{{--                                {!! $notices->links() !!}--}}
                            </div>
                        </div>
                    </div>
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
