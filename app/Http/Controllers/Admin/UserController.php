<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequestValidation;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    protected $redirectUrl;
    protected $userModel;
    protected $roleModel;
    const moduleDirectory = 'admin.users.';


    public function __construct(Admin $admin)
    {

//        $this->redirectUrl = 'admin/users';
        $this->userModel = $admin;

    }


    public function index() :View
    {


        return view('employee.users.index');

    }


    public function create()
    {
        $users = $this->userModel->get();
        return view('admin.users.create')->with('users', $users);

    }

    public function store(UserRequestValidation $request)
    {
        $request->validate([
            'file_path' => 'mimes:jpeg,bmp,png'
        ]);

        $imageFileName = null;
        if ($request->hasFile('image')){
            $addImageFile = $request->file('image');

            $imageFileName = 'add_'.time() . '.' . $addImageFile->getClientOriginalExtension();
            if (!file_exists('uploads/imageFiles')){
                mkdir('uploads/imageFiles', 0777, true);
            }
            $addImageFile->move('uploads/imageFiles', $imageFileName);
        }

        $query= $this->userModel->create([

            'name'=>$request->name,
            'email'=>$request->email,
            'image' => $imageFileName,
            'role_id'=>$request->role_id,
            'password'=>Hash::make($request->password),



        ]);

        if ($query)
        {
            return redirect()->route('admin.users.index');
        }else
        {
            return redirect()->route('admin.users.create');

        }


    }


    public function show($id)
    {
        $user = $this->userModel->find($id);
        $data = [
            'pageTitle' => 'User Detail',
            'user' => $user,
        ];

        return view(self::moduleDirectory . 'view', $data);
    }


    public function edit($id)
    {
        $user = $this->userModel->find($id);
        return view('admin.users.edit', compact('user') );

    }

    public function update(Request $request, int $id)
    {


        $user= $this->userModel->findOrFail($id);


        //update upload  image
        $imageFileName = $user->image;

        if ($request->hasFile('image')) {
            $addImageFile = $request->file('image');
            $imageFileName = 'add_' . time() . '.' . $addImageFile->getClientOriginalExtension();
            if (!file_exists('uploads/imageFiles')) {
                mkdir('uploads/imageFiles', 0777, true);
            }
                       //delete old image if exist
            if (file_exists('uploads/imageFiles/' . $user->image)) {
                unlink('uploads/imageFiles/' . $user->image);
            }
            $addImageFile->move('uploads/imageFiles', $imageFileName);
        }
            //dd($imageFileName);


        // end update image

        $value = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imageFileName,
            'role_id' => $request->role_id,
        ]);


        if ($value){

            return redirect()->route('admin.users.index');
        }
        else {

            return back();
        }

    }


    public function destroy(int $id)
    {
        //
    }


    // change password
    public function changePassword(Request $request)
    {

        $user = $this->service->find($request->user_id);
        //check login user has ability to update user
        $this->authorize('passwordChange', $user);

        $this->validate($request, [
            'password_confirmation' => 'required',
            'password' => 'required|confirmed',
        ]);

        $userPassword = $this->service->updatePassword($request);
        if ($userPassword) {
            $request->session()->flash('success', setMessage('update', 'User Password'));
            return redirect()->route('admin.users.show', [$request->user_id]);
        } else {
            $request->session()->flash('error', setMessage('update.error', 'User Password'));
            return redirect()->route('admin.users.show', [$request->user_id]);
        }
    }
}
