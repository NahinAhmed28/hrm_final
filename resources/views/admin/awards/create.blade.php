@extends('admin.layouts.app')
@section('pageTitle')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">Create NEW AWARD</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.awards.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>AWARDs</a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('admin.awards.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Award Name<span class="text-danger">*</span></label>
                                            <input type="text" name="awardName" class="form-control {{ $errors->has('awardName') ? 'is-invalid' : '' }}" value="{{ old('awardName') }}" placeholder="awardName" />
                                            @if ($errors->has('awardName'))
                                                <div class="invalid-feedback">{{ $errors->first('awardName') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Select Employee<span class="text-danger">*</span></label>
                                            <select class="form-control custom-select" id="inputGroupSelect03" name="course_id">
                                                <option selected>select...</option>
                                                @foreach($employees as $employee)
                                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">gift </label>
                                            <input type="text" name="gift" class="form-control {{ $errors->has('gift') ? 'is-invalid' : '' }}" value="{{ old('gift') }}" placeholder="purchaseDate" />
                                            @if ($errors->has('gift'))
                                                <div class="invalid-feedback">{{ $errors->first('gift') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">CASH Price</label>
                                            <input type="text" name="cashPrice" class="form-control {{ $errors->has('cashPrice') ? 'is-invalid' : '' }}" value="{{ old('cashPrice') }}" placeholder="cashPrice" />
                                            @if ($errors->has('cashPrice'))
                                                <div class="invalid-feedback">{{ $errors->first('cashPrice') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">For Month</label>
                                            <input type="text" name="forMonth" class="form-control {{ $errors->has('forMonth') ? 'is-invalid' : '' }}" value="{{ old('forMonth') }}" placeholder="forMonth" />
                                            @if ($errors->has('forMonth'))
                                                <div class="invalid-feedback">{{ $errors->first('forMonth') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">For Year</label>
                                            <input type="text" name="forYear" class="form-control {{ $errors->has('forYear') ? 'is-invalid' : '' }}" value="{{ old('forYear') }}" placeholder="forYear" />
                                            @if ($errors->has('forYear'))
                                                <div class="invalid-feedback">{{ $errors->first('forYear') }}</div>
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
