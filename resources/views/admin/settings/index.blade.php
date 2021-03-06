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
                            <h3 class="card-label">Settings</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
{{--                            @can('create', \App\Models\Admin::class)--}}
                                <a href="{{route('admin.settings.create')}}" class="btn btn-success">
                                    <i class="flaticon2-plus-1"></i> Add New
                                </a>
{{--                            @endcan--}}
                        <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead >
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Currency</th>
                                    <th scope="col">Currency icon</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($settings as $setting)
                                    <td>{{ $setting->id }}</td>
                                    <td>{{ $setting->website }}</td>
                                <td>{{ $setting->email }}</td>
                                <td>{{ $setting->name }}</td>
                                <td>{{ $setting->logo }}</td>
                                <td>{{ $setting->currency }}</td>
                                <td>{{ $setting->currency_icon }}</td>
                                @endforeach
                                </tbody>
                            </table>

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
