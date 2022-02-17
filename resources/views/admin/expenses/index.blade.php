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
                            <h3 class="card-label">Expenses</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
{{--                            @can('create', \App\Models\User::class)--}}
                                <a href="{{route('admin.expenses.create')}}" class="btn btn-success">
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
                                <th scope="col">ID</th>
                                <th scope="col">itemName</th>
                                <th scope="col">purchaseDate</th>
                                <th scope="col">purchaseFrom</th>
                                <th scope="col">price</th>
                                <th scope="col">created </th>
                                <th scope="col">action</th>
                                <th scope="col">status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($expenses as $expense)
                                    <tr>
                                        <td> {{$expense->id }} </td>
                                        <td> {{$expense->itemName }} </td>
                                        <td> {{$expense->purchaseDate }} </td>
                                        <td> {{$expense->purchaseFrom }} </td>
                                        <td> {{$expense->price }} </td>
                                        <td>{{ \Carbon\Carbon::parse($expense->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('admin.expenses.edit',[$expense->id]) }}" title="View Student">
                                                <button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit
                                                </button></a>
                                            <a href="{{ route('admin.expenses.show',[$expense->id]) }}" title="View Student">
                                                <button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i> Show
                                                </button></a>
                                        </td>
                                        <td> <span class="badge badge-success">{{$expense->status == 0 ? '' : 'Active' }} </span>
                                            <span class="badge badge-danger">{{$expense->status == 1 ? '' : 'Inactive' }}</span>
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
