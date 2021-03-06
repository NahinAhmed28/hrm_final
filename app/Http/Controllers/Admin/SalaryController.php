<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Bank_detail;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    protected $employeeModel;
    protected $designationModel;
    protected $departmentModel;
    protected $salaryModel;

    public function __construct(Employee $employee, Designation $designation, Department $department, Salary $salary)
    {
        $this->employeeModel = $employee;
        $this->designationModel = $designation;
        $this->departmentModel = $department;
        $this->salaryModel = $salary;
    }

    /**
     * Display a listing of the resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()

    {
        $data = [

            'employees' => $this->employeeModel->orderBy('id','desc')->orderBy('id','asc')->simplePaginate(5),

        ];

        return view('admin.salaries.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($employeeID)
    {
        $data = [
            'employees' => $this->employeeModel->where('employeeID', $employeeID)->first(),
        ];

        return view('admin.salaries.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $employeeID)
    {
//        $salary =  $this->salaryModel->where('employeeID', $employeeID)->update([
//                'salary' => $request->salary,
//                'type' => $request->type
//        ]);

        $this->salaryModel->updateOrCreate([
            'employeeID' => $employeeID,
        ], [
            'salary' =>  $request->salary,
            'type' =>  $request->type,
        ]);


        return redirect()->route('admin.salaries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($employeeID)
    {
         $this->salaryModel->where('employeeID', $employeeID)->delete();
        return redirect()->route('admin.salaries.index');
    }
}
