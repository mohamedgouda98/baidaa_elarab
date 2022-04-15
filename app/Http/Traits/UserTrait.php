<?php
namespace App\Http\Traits;

trait UserTrait
{
    private function getAllUsers(){
     
        return  $this->userModel::get();

    }
    private function getUserById($id){
        return $this->userModel::findorFail($id);
    }
}