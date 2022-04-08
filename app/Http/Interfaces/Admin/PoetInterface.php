<?php

namespace App\Http\Interfaces\Admin;

interface PoetInterface
{
    public function index();

    public function create();

    public function store($request);

    public function edit($poet);

    public function update($poet, $request);

    public function delete($poet);
}
