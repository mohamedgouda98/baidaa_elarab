<?php

namespace App\Http\Repositories\Admin;

use App\Models\User;
use App\Http\Traits\UserTrait;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\Admin\AdminInterface;

class AdminRepository  implements AdminInterface{

     use UserTrait;
    private $userModel;

    public function __construct(User $user)
    {
        $this->userModel=$user;
    }

    public function index(){

        $users=$this->getAllUsers();
        return view('Admin.users.index',compact('users'));
    }

    public function create(){
     return view('Admin.users.create');
    }

    public function store($request){

        $this->userModel::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Alert::success('success', 'User Added Successfully');
        return redirect(route('admin.user.index'));
    }

    public function edit($user){
         return view('admin.users.edit',compact('user'));
    }

    public function update($user, $request){
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        Alert::success('success', 'User Updated Successfully');
        return redirect(route('admin.user.index'));
    }

    public function destroy($user){
        $user->delete($user->id);
        Alert::success('success', 'User DeletedSuccessfully');
        return back();
    }


}
