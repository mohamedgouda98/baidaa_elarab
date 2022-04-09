<?php
namespace App\Http\Traits;

trait EraTrait
{
    private function getAllEras(){
     
        return  $this->eraModel::get();

    }
    private function getEraById($id){
        return $this->eraModel::findorFail($id);
    }
}