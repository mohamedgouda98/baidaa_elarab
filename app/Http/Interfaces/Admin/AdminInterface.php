<?php

namespace App\Http\Interfaces\Admin;

interface AdminInterface
{
    public function index();

    public function create();

    public function store($request);

    public function edit($user);

    public function update($user, $request);

    public function destroy($user);
}
