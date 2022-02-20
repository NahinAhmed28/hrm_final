<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    protected $redirectUrl;
    protected $userModel;
    protected $departmentModel;

    public function __construct(Admin $user, Department $department)
    {

        $this->redirectUrl = 'admin/users';
        $this->userModel = $user;
        $this->departmentModel = $department;
    }


    public function index()
    {
        $departments = $this->departmentModel->orderBy('id','asc')->simplePaginate(5);
        return view('admin.departments.index', compact('departments'));
    }


    public function create()
    {
        $departments = $this->departmentModel->orderBy('id','asc')->get();
        return view('admin.departments.create', compact('departments'));

    }


    public function store(Request $request)
    {
//        dd($request->all());

        $value = $this->departmentModel->create([
            'deptName' => $request->deptName,
        ]);
        if ($value) {
            return back();
        } else {
            return view('admin.departments.create');
        }

    }


    public function show($id)
    {
        $department = $this->departmentModel->find($id);
        return view('admin.departments.show', compact('department'));
    }


    public function edit($id)
    {

            $department = $this->departmentModel->find($id);
        return view('admin.departments.edit', compact('department'));
    }


    public function update(Request $request, $id)
    {
//        dd($request->all());

        $department =  $this->departmentModel->find($id);
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
