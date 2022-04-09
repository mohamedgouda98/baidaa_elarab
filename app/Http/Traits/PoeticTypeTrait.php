<?php
namespace App\Http\Traits;

trait PoeticTypeTrait
{
    private function getAllPoeticTypes(){
     
        return  $this->poeticTypeModel::get();

    }
    private function getoeticTypeById($id){
        return $this->poeticTypeModel::findorFail($id);
    }
}