<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminInterface;
use App\Http\Requests\Admin\Admin\UserStoreRequest;
use App\Http\Requests\Admin\Admin\UserUpdateRequest;

class AdminController extends Controller
{
protected $AdminInterface ;

public function __construct(AdminInterface $Admin)
{
    $this->AdminInterface=$Admin;
}

public function index(){
    return $this->AdminInterface->index();
}

public function create(){
    return $this->AdminInterface->create();
}

public function store(UserStoreRequest $request){
    return $this->AdminInterface->store($request);
}

public function edit( User $user) {
    return $this->AdminInterface->edit($user);
}

public function update(User $user,UserUpdateRequest $request){
    return $this->AdminInterface->update($user,$request);
}

public function destroy(User $user){
    return $this->AdminInterface->destroy($user);
}

}
