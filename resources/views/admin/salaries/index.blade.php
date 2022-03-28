@extends('admin.layouts.app')
@section('pageTitle')

@section('content')

    <div class="container p-0">
        <div class="row">
            <div class="col-md-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header flex-wrap py-3">
                        <div class="card-title">
                            <h3 class="card-label">Employees-Salary</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            {{--                            @can('create', \App\Models\Admin::class)--}}
                            <a href="{{route('admin.salaries.create')}}" class="btn btn-success">
                                <i class="flaticon2-plus-1"></i> Add New
                            </a>
                        {{--                        @endcan--}}
                        <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead >
                            <tr>

                                <th scope="col">Employee ID</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
{{--                            {!! $employees->links() !!}--}}
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
