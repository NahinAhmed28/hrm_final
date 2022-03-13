<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
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
        $employees = $this->employeeModel->orderBy('id','desc')->orderBy('id','asc')->simplePaginate(5);;
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


    public function show($id)
    {
        $department = $this->employeeModel->find($id);
        return view('admin.departments.show', compact('department'));
    }


    public function edit($id)
    {
        $department = $this->employeeModel->find($id);
        return view('admin.departments.edit', compact('department'));
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


    public function destroy(Department $department)
    {
        //
    }
}
