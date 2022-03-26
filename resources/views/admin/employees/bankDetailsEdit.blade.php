
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
                        @method('PUT')

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"  value="{{ old('email', $employees->email) }}" placeholder="{{$employees->email}}"  required>
                            </div>
                        </div>

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
