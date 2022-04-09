<?php

namespace App\Http\Interfaces\Admin;

interface PoeticTypeInterface{
   
    public function index();

    public function create();

    public function store($request);

    public function edit($poeticType);

    public function update($poeticType, $request);

    public function destroy($poeticType);
    


}