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
                            <h3 class="card-label">Leave Applications</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                    {{--@can('create', \App\Models\User::class)--}}
                                <a href="{{route('admin.expenses.create')}}" class="btn btn-success">
                                    <i class="flaticon2-plus-1"></i> Add New
                                </a>
                    {{--@endcan--}}
                        <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">itemName</th>
                                    <th scope="col">purchaseDate</th>
                                    <th scope="col">purchaseFrom</th>
                                    <th scope="col">price</th>
                                    <th scope="col">bill</th>
                                    <th scope="col">created </th>
                                    <th scope="col">action</th>
                                    <th scope="col">status</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

{{--                            <div class="d-flex justify-content-center">--}}
{{--                                {!! $expenses->links() !!}--}}
{{--                            </div>--}}
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
