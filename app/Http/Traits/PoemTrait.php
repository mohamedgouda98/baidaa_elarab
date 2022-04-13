<?php

namespace App\Http\Traits;

trait PoemTrait
{
    private function getAllPoems()
    {
        return $this->poemModel::get();
    }
}
