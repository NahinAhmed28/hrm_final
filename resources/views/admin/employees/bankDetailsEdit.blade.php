


<strong>Update Info </strong>
<form action="{{route('admin.employee.bankDetail.update',$employees->employeeID)}}" method="post" >
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="fullName">fullName</label>
            <input type="text" class="form-control" id="fullName" name="fullName"  value="{{ old('fullName', $employees->fullName) }}" placeholder="{{$employees->fullName}}"  required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email"  value="{{ old('email', $employees->email) }}" placeholder="{{$employees->email}}"  required>
        </div>
    </div>


    <button class="btn btn-info" type="submit">Submit Info</button>
</form>
