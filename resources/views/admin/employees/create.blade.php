@extends('admin.layouts.app')
@section('pageTitle')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        <h3 class="card-title">create new employee</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.employees.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>Employees</a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('admin.employees.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Full-Name<span class="text-danger">*</span></label>
                                            <input type="text" name="fullName" class="form-control {{ $errors->has('fullName') ? 'is-invalid' : '' }}" value="{{ old('fullName') }}" placeholder="Enter Name" />
                                            @if ($errors->has('fullName'))
                                                <div class="invalid-feedback">{{ $errors->first('fullName') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">employeeID<span class="text-danger">*</span></label>
                                            <input type="text" name="employeeID" class="form-control {{ $errors->has('employeeID') ? 'is-invalid' : '' }}" value="{{ old('employeeID') }}" placeholder="Enter Name" />
                                            @if ($errors->has('employeeID'))
                                                <div class="invalid-feedback">{{ $errors->first('employeeID') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="col-sm-12 col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label for="discipline">Select Discipline</label>--}}
{{--                                            <select class="form-control js-example-basic-multiple"  id="discipline" name="disciplines[]" multiple="multiple">--}}
{{--                                                @foreach($designations as $designation)--}}
{{--                                                    <option value="{{$designation->id}}">{{$designation->designation}}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                            <label for="discipline">Select Designation</label>
                                            <select class="form-control js-example-basic-single"  id="discipline" name="designation" >
                                                @foreach($designations as $designation)
                                                    <option value="{{$designation->id}}">{{$designation->designation}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label"> Date of Birth<span class="text-danger">*</span></label>
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="Date of Birth"/>
                                            <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"  placeholder="Your Email" />
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Password<span class="text-danger">*</span></label>
                                            <input type="text" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password') }}" placeholder="Your password" />
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Gender</label>
                                            <input type="text" name="gender" class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" value="{{ old('password') }}" placeholder="Your gender" />
                                            @if ($errors->has('gender'))
                                                <div class="invalid-feedback">{{ $errors->first('gender') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Father's Name</label>
                                            <input type="text" name="fatherName" class="form-control {{ $errors->has('fatherName') ? 'is-invalid' : '' }}" value="{{ old('password') }}" placeholder="Your fatherName" />
                                            @if ($errors->has('fatherName'))
                                                <div class="invalid-feedback">{{ $errors->first('fatherName') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Mobile Number</label>
                                            <input type="text" name="mobileNumber" class="form-control {{ $errors->has('mobileNumber') ? 'is-invalid' : '' }}" value="{{ old('mobileNumber') }}" placeholder="Your mobileNumber" />
                                            @if ($errors->has('mobileNumber'))
                                                <div class="invalid-feedback">{{ $errors->first('mobileNumber') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Joining Date</label>
                                            <input type="text" name="joiningDate" class="form-control {{ $errors->has('joiningDate') ? 'is-invalid' : '' }}" value="{{ old('joiningDate') }}" placeholder="Your joiningDate" />
                                            @if ($errors->has('joiningDate'))
                                                <div class="invalid-feedback">{{ $errors->first('joiningDate') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Local Address</label>
                                            <input type="text" name="localAddress" class="form-control {{ $errors->has('localAddress') ? 'is-invalid' : '' }}" value="{{ old('localAddress') }}" placeholder="Your localAddress" />
                                            @if ($errors->has('localAddress'))
                                                <div class="invalid-feedback">{{ $errors->first('localAddress') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Permanent Address</label>
                                            <input type="text" name="permanentAddress" class="form-control {{ $errors->has('permanentAddress') ? 'is-invalid' : '' }}" value="{{ old('permanentAddress') }}" placeholder="Your permanentAddress" />
                                            @if ($errors->has('permanentAddress'))
                                                <div class="invalid-feedback">{{ $errors->first('permanentAddress') }}</div>
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

@push('scripts')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2(
                {
                    placeholder: "Select....",
                    allowClear: true
                }
            );
        });
    </script>
@endpush
