<?php

namespace App\Http\Controllers\Admin;

use App\Models\poetic_type;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\PoeticTypeInterface;
use App\Http\Requests\Admin\PoeticType\PoeticTypeStoreRequest;
use App\Http\Requests\Admin\PoeticType\PoeticTypeUpdateRequest;

class PoeticTypeController extends Controller
{
   
    protected $PoeticTypeInterface;
    public function __construct(PoeticTypeInterface $PoeticTypeInterface )
    {
        $this->PoeticTypeInterface=$PoeticTypeInterface;
    }

    public function index(){
         return $this->PoeticTypeInterface->index();
    }

    public function create(){
        return $this->PoeticTypeInterface->create();
    }

    public function store( PoeticTypeStoreRequest $request){
        return $this->PoeticTypeInterface->store($request);

    }

    public function edit( poetic_type $poeticType){
        return $this->PoeticTypeInterface->edit($poeticType);
    }


    public function update( poetic_type $poeticType, PoeticTypeUpdateRequest $request){
        return $this->PoeticTypeInterface->update($poeticType,$request);
    }


    public function destroy(poetic_type $poeticType){
        return $this->PoeticTypeInterface->destroy($poeticType);
    }
}
