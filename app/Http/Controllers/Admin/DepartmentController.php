<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    protected $redirectUrl;
    protected $userModel;
    protected $departmentModel;
    const moduleDirectory = 'admin.users.';

    public function __construct(User $user, Department $department)
    {
        $this->middleware('auth');
        $this->redirectUrl = 'admin/users';
        $this->userModel = $user;
        $this->departmentModel = $department;
    }


    public function index()
    {
//        $departments = $this->departmentModel->orderBy('id','asc')->simplePaginate(5);
//        return view('admin.departments.index', compact('departments'));
        return view('admin.departments.index');
    }


    public function create()
    {
//        $departments = $this->departmentModel->orderBy('id','asc')->get();
//        return view('admin.departments.create', compact('departments'));
        return view('admin.departments.create');
    }


    public function store(Request $request)
    {
//        dd($request->all());

        $value = $this->departmentModel->create([
            'name' => $request->name,
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
        $department->name =  $request->name;
        $department->status =  $request->status;
        $department->update();
        return back();
    }


    public function destroy(Department $department)
    {
        //
    }
}
