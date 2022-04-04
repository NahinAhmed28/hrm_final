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
                                <a href="{{route('admin.employees.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>Employee</a>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <h5 class="card-title">Image :  @isset($employees){{ $employees->profileImage }}  @endisset</h5>
                    <p class="card-text">ID : @isset($employees){{ $employees->id }}  @endisset </p>
                    <p class="card-text">Full Name : @isset($employees){{ $employees->fullName }}  @endisset</p>
                    <p class="card-text">Gender : @isset($employees){{ $employees->gender }}  @endisset</p>
                    <p class="card-text">Date of birth : @isset($employees) {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $employees->date_of_birth)->format('d-m-Y') }} @endisset</p>
                    <p class="card-text">Joining Date : @isset($employees){{ $employees->getDesignation->joiningDate }}  @endisset</p>
                    <p class="card-text">Designation : @isset($employees){{ $employees->getDesignation->designation }}  @endisset</p>
                    <p class="card-text">Local Address : @isset($employees){{ $employees->localAddress }}  @endisset</p>
                    <p class="card-text">Permanent Address : @isset($employees){{ $employees->permanentAddress }}  @endisset</p>
                    <p class="card-text"> Bank Details :<a href="{{route('admin.employee.detail',$employees->employeeID)}}"> View</a></p>

                    <p class="card-text">status :
                        <span class="badge badge-success">@isset($employees){{$employees->status == 0 ? '' : 'Active' }}@endisset </span>
                        <span class="badge badge-danger">@isset($employees){{$employees->status == 1 ? '' : 'Inactive' }}@endisset</span>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
