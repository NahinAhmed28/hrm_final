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
                                <a href="{{route('admin.leaves.create')}}" class="btn btn-success">
                                    <i class="flaticon2-plus-1"></i> Add New
                                </a>
                    {{--@endcan--}}
                        <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" >
                            <table class="table table-bordered" style="margin-left: 20px">
                                <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col" class="col-sm-0">Title</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Leave <br> Days</th>
                                    <th scope="col">Issued at</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($leaves as $leave)
                                    <tr>
                                        <td>{{$leave->id}}</td>
                                        <td>{{$leave->title}}</td>
                                        <td>{{$leave->description}}</td>
                                        <td>{{$leave->leaveDays}}</td>
                                        <td>{{$leave->leaveType}}</td>
                                        <td>{{$leave->created_at->diffForHumans()}}</td>
                                        <td>{{$leave->status}}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.leaves.accept' ,  [$leave->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('PUT')
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm" title="Delete Contact"
                                                    {{--                                    onclick="return confirm(&quot;Confirm delete?&quot;)"--}}
                                                ><i class="fa fa-trash-o" aria-hidden="true"></i> Accept</button>
                                            </form>

                                            <form method="POST" action="{{ route('admin.leaves.decline' ,  [$leave->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('PUT')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact"
                                                    {{--                                    onclick="return confirm(&quot;Confirm delete?&quot;)"--}}
                                                ><i class="fa fa-trash-o" aria-hidden="true"></i> Decline</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{--                                {!! $notices->links() !!}--}}
                            </div>
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
