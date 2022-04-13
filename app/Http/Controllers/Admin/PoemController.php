<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\PoemInterface;
use App\Http\Requests\Admin\Poems\PoemsRequest;
use App\Models\Poems;
use Illuminate\Http\Request;

class PoemController extends Controller
{
    private $poemInterface;

    public function __construct(PoemInterface $poem)
    {
        $this->poemInterface =$poem;
    }

    public function index()
    {
        return $this->poemInterface->index();
    }

    public function create()
    {
        return $this->poemInterface->create();
    }

    public function store(PoemsRequest $request)
    {
        return $this->poemInterface->store($request);
    }

    public function edit(Poems $poems)
    {
        return $this->poemInterface->edit($poems);
    }

    public function update(Poems $poems, PoemsRequest $request)
    {
        return $this->poemInterface->update($poems, $request);
    }

    public function delete(Poems $poems)
    {
        return $this->poemInterface->delete($poems);
    }
}
