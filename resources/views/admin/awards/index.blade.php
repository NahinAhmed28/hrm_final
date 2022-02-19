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
                                <th scope="col">employee ID</th>
                                <th scope="col">award Name</th>
                                <th scope="col">gift</th>
                                <th scope="col">cash Price</th>
                                <th scope="col">for Month</th>
                                <th scope="col">for Year</th>
                                <th scope="col">Created</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($awards as $award)
                                <tr>
                                    <td> {{$award->id }} </td>
                                    <td> {{$award->employeeID }} </td>
                                    <td> {{$award->awardName }} </td>
                                    <td> {{$award->gift }} </td>
                                    <td> {{$award->cashPrice }} </td>
                                    <td> {{$award->forMonth }} </td>
                                    <td> {{$award->forYear }} </td>
                                    <td> {{$award->forYear }} </td>
                                    <td>{{ \Carbon\Carbon::parse($award->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('admin.awards.edit',[$award->id]) }}" title="View Student">
                                            <button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit
                                            </button></a>
                                        <a href="{{ route('admin.awards.show',[$award->id]) }}" title="View Student">
                                            <button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i> Show
                                            </button></a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>


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