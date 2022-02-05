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
                                <a href="{{route('admin.expenses.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>expenses</a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('admin.expenses.update', $expense->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">itemName<span class="text-danger">*</span></label>
                                            <input type="text" name="itemName" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $expense->itemName) }}" placeholder="Your Name" />
                                            @if ($errors->has('itemName'))
                                                <div class="invalid-feedback">{{ $errors->first('itemName') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">purchaseFrom<span class="text-danger">*</span></label>
                                            <input type="text" name="purchaseFrom" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $expense->purchaseFrom) }}" placeholder=" purchaseFrom" />
                                            @if ($errors->has('purchaseFrom'))
                                                <div class="invalid-feedback">{{ $errors->first('purchaseFrom') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">price<span class="text-danger">*</span></label>
                                            <input type="text" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" value="{{ old('price', $expense->price) }}" placeholder=" price" />
                                            @if ($errors->has('price'))
                                                <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelect1">Status<span class="text-danger">*</span></label>
                                        <select class="form-control" name="status">
                                            <option value="1" {{$expense->status == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$expense->status == 0 ? 'selected' : ''}}>Inactive</option>
                                        </select>
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
