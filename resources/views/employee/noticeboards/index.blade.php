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
                            <h3 class="card-label">Notice Board</h3>
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
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">updated at</th>
                                    <th scope="col" >Action</th>
                                    <th scope="col">created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($notices as $notice)
                                    <tr>
                                        <td>{{ $notice->id }}</td>
                                        <td class="col-sm-2">{{ $notice->title }}</td>
                                        <td class="col-sm-4">{{ $notice->description }}</td>
                                        <td>{{ $notice->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('employee.noticeboards.show',[$notice->id]) }}" title="View "><button class="btn btn-outline-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                        </td>
                                        <td>{{ $notice->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {!! $notices->links() !!}
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
