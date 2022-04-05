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
                            <h3 class="card-label">Employees</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
{{--                            @can('create', \App\Models\Admin::class)--}}
                                <a href="{{route('admin.employees.create')}}" class="btn btn-success">
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
                                <th scope="col">Profile Image</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Designation</th>
                                <th scope="col" >Local Address</th>
                                <th scope="col">Permanent Address</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($employees as $employee)
                                <tr>

                                    <td> {{$employee->employeeID }} </td>
                                    <td> {{$employee->profileImage }} </td>
                                    <td> {{$employee->fullName }} </td>
                                    <td  class="col-sm-2"> {{$employee->getDesignation->designation }} </td>
                                    <td class="col-sm-2"> {{$employee->localAddress }} </td>
                                    <td class="col-sm-2"> {{$employee->permanentAddress }} </td>
                                    <td> <span class="badge badge-success">{{$employee->status == 0 ? '' : 'Active' }} </span>
                                        <span class="badge badge-danger">{{$employee->status == 1 ? '' : 'Inactive' }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.employees.edit',[$employee->employeeID]) }}" title="Edit">
                                            <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                            </button></a>
                                        <a href="{{ route('admin.employees.show',[$employee->employeeID]) }}" title="View">
                                            <button class="btn btn-outline-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-center">
                            {!! $employees->links() !!}
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
        <script src="{{asset('assets/global/datatables/basic.js')}}"></script>
        <!--end::Page Scripts-->
        <script>
            // Your custom JavaScript...
        </script>
    @endpush
@endonce
