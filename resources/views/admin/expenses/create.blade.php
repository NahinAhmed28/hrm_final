@extends('admin.layouts.app')
@section('pageTitle')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">create new expense</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.employees.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>Expenses
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('admin.expenses.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Item Name<span class="text-danger">*</span></label>
                                            <input type="text" name="itemName" class="form-control {{ $errors->has('itemName') ? 'is-invalid' : '' }}" value="{{ old('itemName') }}" placeholder="itemName" />
                                            @if ($errors->has('itemName'))
                                                <div class="invalid-feedback">{{ $errors->first('itemName') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Purchase Date<span class="text-danger">*</span></label>
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" name="purchaseDate" value="{{ old('purchaseDate') }}" placeholder="purchaseDate"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Purchase From<span class="text-danger">*</span></label>
                                            <input type="text" name="purchaseFrom" class="form-control {{ $errors->has('purchaseFrom') ? 'is-invalid' : '' }}" value="{{ old('purchaseFrom') }}" placeholder="purchaseDate" />
                                            @if ($errors->has('purchaseFrom'))
                                                <div class="invalid-feedback">{{ $errors->first('purchaseFrom') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Price<span class="text-danger">*</span></label>
                                            <input type="text" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" value="{{ old('price') }}" placeholder="price" />
                                            @if ($errors->has('price'))
                                                <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Bill</label>
                                            <input type="text" name="bill" class="form-control {{ $errors->has('bill') ? 'is-invalid' : '' }}" value="{{ old('bill') }}" placeholder="bill" />
                                            @if ($errors->has('bill'))
                                                <div class="invalid-feedback">{{ $errors->first('bill') }}</div>
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
