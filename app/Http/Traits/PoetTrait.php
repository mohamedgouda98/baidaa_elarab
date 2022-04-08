<?php

namespace App\Http\Traits;

trait PoetTrait
{
    private function getAllPoet()
    {
        return $this->poetModel::get();
    }

    private function getPoetById($id)
    {
        return $this->poetModel::findOrFail($id);
    }
}
