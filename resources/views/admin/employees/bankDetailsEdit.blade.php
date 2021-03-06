
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
                        <h3 class="card-label">Update Bank Details</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.employee.bankDetail.update',$employees->employeeID)}}" method="post" >
                        @csrf
                        @method('POST')


                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="accountName">Account Name</label>

                                <input type="text" class="form-control"
                                       id="accountName"
                                       name="accountName"
                                       @isset($details)
                                       value=" {{ old('accountName', $details->accountName) }}"
                                       placeholder="{{$details->accountName}}"
                                       @endisset  required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="accountNumber">Account Number</label>
                                <input type="text" class="form-control"
                                       id="accountNumber"
                                       name="accountNumber"
                                       @isset($details)
                                       value="{{ old('accountNumber', $details->accountNumber) }}"
                                       placeholder="{{$details->accountNumber}}"
                                       @endisset >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="bank">Bank</label>
                                <input type="text" class="form-control"
                                       id="bank"
                                       name="bank"
                                       @isset($details)
                                       value="{{ old('bank', $details->bank) }}"
                                       placeholder="{{$details->bank}}"
                                       @endisset >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="pan">Pan</label>
                                <input type="text" class="form-control"
                                       id="pan"
                                       name="pan"
                                       @isset($details)
                                       value="{{ old('pan', $details->pan) }}"
                                       placeholder="{{$details->pan}}"
                                       @endisset >
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="accountNumber">Branch</label>
                                <input type="text" class="form-control"
                                       id="branch"
                                       name="branch"
                                       @isset($details)
                                       value="{{ old('branch', $details->branch) }}"
                                       placeholder="{{$details->branch}}"
                                       @endisset >
                            </div>
                        </div>

{{--                        <div class="form-row">--}}
{{--                            --}}
{{--                        </div>--}}



                        <button class="btn btn-info" type="submit">Update Info</button>
                    </form>

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
