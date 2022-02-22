<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    protected $employeeModel;

    public function __construct(Employee $employee)
    {

        $this->employeeModel = $employee;
    }


    public function index()
    {
        $employees = $this->employeeModel->orderBy('id','asc')->simplePaginate(5);
        return view('admin.employees.index', compact('employees'));
    }


    public function create()
    {
        $employees = $this->employeeModel->orderBy('id','asc')->get();
        return view('admin.employees.create', compact('employees'));

    }


    public function store(Request $request)
    {
//        dd($request->all());

        $value = $this->employeeModel->create([
            'fullName' => $request->fullName,
            'password'=>Hash::make($request->password),
            'email'=>$request->email,
            'name'=>$request->name,
            'role_id'=>$request->role_id,
        ]);
        if ($value) {
            return back();
        } else {
            return view('admin.departments.create');
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
