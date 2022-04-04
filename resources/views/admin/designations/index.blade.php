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
                            <h3 class="card-label">Designations</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
{{--                            @can('create', \App\Models\Admin::class)--}}
                                <a href="{{route('admin.designations.create')}}" class="btn btn-success">
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
                                <th scope="col">Designations</th>
                                <th scope="col">Department</th>
                                <th scope="col">created at</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($designations as $designation)

                            <tr>
                                <td>{{$designation->id}} </td>
                                <td>{{$designation->designation}} </td>
                                <td>{{$designation->departments->deptName}} </td>
                                <td>{{$designation->created_at}} </td>
                                <td>
                                    <a href="{{ route('admin.designations.edit',[$designation->id]) }}" title="View">
                                        <button class="btn btn-outline-primary btn-sm"> <i class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    <form method="POST" action="{{ route('admin.designations.destroy' ,  $designation->id) }}" accept-charset="UTF-8" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete " onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                </td>
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
