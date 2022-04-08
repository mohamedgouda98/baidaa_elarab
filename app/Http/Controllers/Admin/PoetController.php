<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\PoetInterface;
use App\Http\Requests\Admin\Poet\PoetStoreRequest;
use App\Http\Requests\Admin\Poet\PoetUpdateRequest;
use App\Models\Poet;
use Illuminate\Http\Request;

class PoetController extends Controller
{
    private $poetInterface;

    public function __construct(PoetInterface $poet)
    {
        $this->poetInterface = $poet;
    }

    public function index()
    {
        return $this->poetInterface->index();
    }

    public function create()
    {
        return $this->poetInterface->create();
    }

    public function store(PoetStoreRequest $request)
    {
        return $this->poetInterface->store($request);
    }

    public function edit(Poet $poet)
    {
        return $this->poetInterface->edit($poet);
    }

    public function update(Poet $poet, PoetUpdateRequest $request)
    {
        return $this->poetInterface->update($poet, $request);
    }

    public function destroy(Poet $poet)
    {
        return $this->poetInterface->delete($poet);
    }
}
