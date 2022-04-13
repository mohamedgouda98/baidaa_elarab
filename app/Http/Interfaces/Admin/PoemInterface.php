<?php

namespace App\Http\Interfaces\Admin;

interface PoemInterface
{
    public function index();

    public function create();

    public function store($request);

    public function edit($poem);

    public function update($poem, $request);

    public function delete($poem);
}
