<?php

namespace App\Http\Interfaces\Admin;

interface CountryInterface
{
    public function index();

    public function create();

    public function store($request);

    public function edit($country);

    public function update($country, $request);

    public function destroy($country);
}
