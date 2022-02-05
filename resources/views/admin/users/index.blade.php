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
                            <h3 class="card-label">User List</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            @can('create', \App\Models\User::class)
                            <a href="{{route('admin.users.create')}}" class="btn btn-success">
                                <i class="flaticon2-plus-1"></i> Add New
                            </a>
                            @endcan
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead >
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">created at</th>
                                <th scope="col">action</th>
                                <th scope="col">status</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit',[$user->id]) }}" title="View Student">
                                            <button class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit
                                            </button></a>
                                        <a href="{{ route('admin.users.show',[$user->id]) }}" title="View Student">
                                            <button class="btn btn-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i> Show
                                            </button></a>
                                    </td>
                                    <td> <span class="badge badge-success">{{$user->status == 0 ? '' : 'Active' }} </span>
                                        <span class="badge badge-danger">{{$user->status == 1 ? '' : 'Inactive' }}</span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{--pagination--}}
                        <div class="d-flex justify-content-center">
                            {!! $users->links() !!}
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
