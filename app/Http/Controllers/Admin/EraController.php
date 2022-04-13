<?php

namespace App\Http\Controllers\Admin;

use App\Models\era;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\EraInterface;
use App\Http\Requests\Admin\era\EraStoreRequest;
use App\Http\Requests\Admin\era\EraUpdateRequest;

class EraController extends Controller
{


    protected $EraInterface;
    public function __construct(EraInterface $EraInterface )
    {
        $this->EraInterface=$EraInterface;
    }

    public function index(){
         return $this->EraInterface->index();
    }

    public function create(){
        return $this->EraInterface->create();
    }

    public function store(EraStoreRequest $request){
        return $this->EraInterface->store($request);

    }

    public function edit(Era $era){
        return $this->EraInterface->edit($era);
    }


    public function update(Era $era, EraUpdateRequest $request){
        return $this->EraInterface->update($era,$request);
    }


    public function destroy(Era $era){
        return $this->EraInterface->destroy($era);
    }

}
