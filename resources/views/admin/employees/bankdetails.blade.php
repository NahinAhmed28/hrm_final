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
                            <h3 class="card-label">Bank Details</h3>
                        </div>
                    </div>
                    <div class="card-body">

{{--employee details of bank--}}

                        <h5 class="card-title">Employee Name :  @isset($details) {{$details->employeeDetails->fullName}}  @endisset</h5>
                        <p class="card-text">Account Name :  @isset($details){{$details->accountName}}  @endisset</p>
{{--                        <img src="{{asset('uploads/postFiles/'.$posts->file_path)}}" width="150">--}}
                        <p class="card-text">Account Number : @isset($details){{$details->accountNumber}}  @endisset</p>
                        <p class="card-text">Bank :  @isset($details){{$details->bank}}  @endisset</p>
                        <p class="card-text">Pan :  @isset($details){{$details->bank}}  @endisset</p>
                        <p class="card-text">Branch : @isset($details) {{$details->branch}}  @endisset</p>
                        <p class="card-text">Created At : @isset($details) {{ \Carbon\Carbon::parse($details->created_at)->diffForHumans() }}  @endisset</p>
                        <a class="btn btn-primary stretched-link" href="{{route('admin.employee.bankDetail.edit',$employees->employeeID)}}" > Edit Info </a>
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
