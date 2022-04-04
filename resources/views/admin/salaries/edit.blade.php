@extends('admin.layouts.app')
@section('pageTitle',)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">{{$pageTitle}}</h3>--}}
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.salaries.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i> Employee Salaries</a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('admin.salaries.update', $salaries->employeeID) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Salary<span class="text-danger">*</span></label>
                                            <input type="text" name="salary" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $salaries->salary) }}" placeholder="salary" />
                                            @if ($errors->has('salary'))
                                                <div class="invalid-feedback">{{ $errors->first('salary') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Type<span class="text-danger">*</span></label>
                                            <input type="text" name="type" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $salaries->type) }}" placeholder="type" />
                                            @if ($errors->has('type'))
                                                <div class="invalid-feedback">{{ $errors->first('type') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-success mr-3"> <i class="flaticon2-paperplane"></i>Save</button>
                            <button type="reset" class="btn btn-danger"><i class="flaticon-close"></i>Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
@endsection
