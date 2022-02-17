@extends('admin.layouts.app')
@section('pageTitle')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">create new Notice</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.noticeboards.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>departments</a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('admin.noticeboards.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Title<span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" placeholder="Enter title" />
                                            @if ($errors->has('title'))
                                                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
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
