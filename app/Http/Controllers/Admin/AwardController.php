<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Award;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AwardController extends Controller
{
    protected $awardModel;
    protected $employeeModel;

    public function __construct(Award $award, Employee $employee)
    {

        $this->awardModel = $award;
        $this->employeeModel = $employee;

    }
    /**
     * Display a listing of the resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $awards = $this->awardModel->orderBy('id','desc')->simplePaginate(5);
        return view('admin.awards.index', compact('awards'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'awards' => $this->awardModel->get(),
            'employees' => $this->employeeModel->get(),
        ];


        return view('admin.awards.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());

        DB::beginTransaction();


   $value = $this->awardModel->create([
            'awardName' => $request->awardName,
            'gift' => $request->gift,
            'cashPrice'=>$request->cashPrice,
            'forMonth'=>$request->forMonth,
            'forYear'=>$request->forYear,
           'employeeID'=>$request->employeeID,
//            'employeeID'=>implode(",",$request->input('employeeID',[]))
        ]);



//        $value->employeeDetails()->attach(implode($request->input('employeeID',[]),","));
        DB::commit();


//   dd($value);


        if ($value) {
            return back();
        } else {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->awardModel->destroy($id);
        return  back();
    }
}
