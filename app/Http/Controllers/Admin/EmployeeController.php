<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Bank_detail;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class EmployeeController extends Controller
{
    protected $employeeModel;
    protected $designationModel;

    public function __construct(Employee $employee, Designation $designation)
    {
        $this->employeeModel = $employee;
        $this->designationModel = $designation;
    }


    public function index()
    {
//        $employees = $this->employeeModel->orderBy('id','desc')->simplePaginate(5);
        $employees = $this->employeeModel->orderBy('id','desc')->orderBy('id','asc')->simplePaginate(5);
        return view('admin.employees.index', compact('employees'));
    }


    public function create()
    {
        $data = [
        'employees' => $this->employeeModel->get(),
        'designations' => $this->designationModel->get()
        ];
        return view('admin.employees.create',$data);

    }


    public function store(Request $request)
    {
//        dd($request->all());
        $value = $this->employeeModel->create([
            'fullName' => $request->fullName,
            'employeeID' => $request->employeeID,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
            'gender'=>'male',
            'fatherName'=>$request->fatherName,
            'mobileNumber'=>$request->mobileNumber,
            'joiningDate'=>$request->joiningDate,
            'localAddress'=>$request->localAddress,
            'permanentAddress'=>$request->permanentAddress,
            'designation'=>$request->designation,
            'date_of_birth'=>$request->date_of_birth,
            'profileImage'=>'default.jpg',

        ]);
        if ($value) {
            return back();
        } else {
            return back();
        }
    }


    public function show($employeeID)
    {


        $data = [
            'employees' => $this->employeeModel->where('employeeID', $employeeID)->first(),
        ];

        return view('admin.employees.show', $data);
    }


    public function edit($employeeID)
    {
        $data = [
            'employees' => $this->employeeModel->where('employeeID', $employeeID)->first(),
        ];
        return view('admin.employees.edit',$data);
    }


    public function update(Request $request, $id)
    {
//        dd($request->all());

        $department =  $this->employeeModel->find($id);
        $department->deptName =  $request->deptName;
        $department->status =  $request->status;
        $department->update();
        return back();
    }

    public function bankdetail($employeeID)
    {

        $data = [
//            'details' => Bank_detail::find($employeeID),
            'details' => Bank_detail::where('employeeID', $employeeID)->first(),
            'employees' => $this->employeeModel->where('employeeID', $employeeID)->first()
        ];

        return view('admin.employees.bankdetails',$data);

    }

    public function bankDetailEdit($employeeID)
    {

        $data = [

            'details' => Bank_detail::where('employeeID', $employeeID)->first(),
            'employees' => $this->employeeModel->where('employeeID', $employeeID)->first()
        ];

//        dd($data);

        return view('admin.employees.bankDetailsEdit',$data);

    }


    public function bankDetailUpdate(Request $request, $employeeID)
    {



        $details = Bank_detail::where('employeeID', $employeeID)->first();

        if ($details!=null){

            $details->accountName =  $request->accountName;
            $details->accountNumber =  $request->accountNumber;
            $details->bank =  $request->bank;
            $details->pan =  $request->pan;
            $details->branch =  $request->branch;
            $details->update();
        }
        else {

            $value = Bank_detail::create([
                'employeeID' => $employeeID,
                'accountName' => $request->accountName,
                'accountNumber' => $request->accountNumber,
                'pan'=>$request->pan,
                'branch'=>$request->branch,
                'bank'=>$request->bank,
            ]);

        }



        return redirect()->route('admin.employee.detail',$employeeID);

    }


    public function destroy(Department $department)
    {
        //
    }
}
