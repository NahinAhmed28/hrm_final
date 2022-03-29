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
                            <h3 class="card-label">AWARDS</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
{{--                            @can('create', \App\Models\Admin::class)--}}
                                <a href="{{route('admin.awards.create')}}" class="btn btn-success">
                                    <i class="flaticon2-plus-1"></i> Add New
                                </a>
{{--                            @endcan--}}
                        <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead >
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Award Name</th>
                                <th scope="col">Gift</th>
                                <th scope="col">Cash Price</th>
                                <th scope="col">For Month</th>
                                <th scope="col">For Year</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($awards as $award)
                                <tr>
                                    <td> {{$award->id }} </td>
                                    <td> {{$award->employeeID }} </td>
                                    <td> {{$award->employeeDetails->fullName }} </td>
                                    <td> {{$award->awardName }} </td>
                                    <td> {{$award->gift }} </td>
                                    <td> {{$award->cashPrice }} </td>
                                    <td> {{$award->forMonth }} </td>
                                    <td> {{$award->forYear }} </td>
                                    <td>{{ \Carbon\Carbon::parse($award->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('admin.awards.destroy',[$award->id]) }}" title="View Student">
                                            <button class="btn btn-outline-danger btn-sm"> <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                            </button></a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--pagination--}}
                        <div class="d-flex justify-content-center">
                            {!! $awards->links() !!}
                        </div>
                        {{--end pagination--}}

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
