<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Expense;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    protected $redirectUrl;
    protected $userModel;
    protected $departmentModel;
    protected $expenseModel;
    const moduleDirectory = 'admin.users.';

    public function __construct( Department $department, Expense $expense)
    {

        $this->redirectUrl = 'admin/users';
        $this->departmentModel = $department;
        $this->expenseModel = $expense;
    }
    /**
     * Display a listing of the resource.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = $this->expenseModel->orderBy('id','asc')->simplePaginate(5);
        return view('admin.expenses.index', compact('expenses'));

    }


    public function create()
    {
        $expenses = $this->expenseModel->get();
        return view('admin.expenses.create', compact('expenses'));
    }


    public function store(Request $request)
    {
//        dd($request->all());

        $value = $this->expenseModel->create([
            'itemName' => $request->itemName,
            'purchaseDate' =>$request->purchaseDate,
            'purchaseFrom' => $request->purchaseFrom,
            'price' => $request->price,
            'bill' => $request->bill,
        ]);


        if ($value) {
            return back();
        } else {

            $expenses = $this->expenseModel->orderBy('id','asc')->get();
            return view('admin.expenses.create', compact('expenses'));
        }
    }


    public function show($id)
    {
        $expense = $this->expenseModel->find($id);
        return view('admin.expenses.show', compact('expense'));
    }


    public function edit($id)
    {
        $expense = $this->expenseModel->find($id);
        return view('admin.expenses.edit', compact('expense'));
    }


    public function update(Request $request, $id)
    {
        $expense =  $this->expenseModel->find($id);
        $expense->itemName =  $request->itemName;
        $expense->purchaseDate =  $request->purchaseDate;
        $expense->purchaseFrom =  $request->purchaseFrom;
        $expense->price =  $request->price;
        $expense->bill =  $request->bill;
        $expense->status =  $request->status;
        $expense->update();
        return back();
    }


    public function destroy($id)
    {
//        dd($id);
        $this->expenseModel->destroy($id);
        return  back();
    }
}
