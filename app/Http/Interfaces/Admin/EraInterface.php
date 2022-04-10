<?php

namespace App\Http\Interfaces\Admin;

interface EraInterface{
   
    public function index();

    public function create();

    public function store($request);

    public function edit($era);

    public function update($era, $request);

    public function destroy($era);
    


}