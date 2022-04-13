<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\PoemInterface;
use App\Http\Traits\PoemTrait;
use App\Http\Traits\PoeticTypeTrait;
use App\Http\Traits\PoetTrait;
use App\Models\Poems;
use App\Models\Poet;
use App\Models\poetic_type;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use RealRashid\SweetAlert\Facades\Alert;

class PoemRepository implements PoemInterface
{
    use PoetTrait, PoeticTypeTrait, PoemTrait;

    private $poemModel, $poeticTypeModel, $poetModel;

    public function __construct(Poems $poem, Poet $poet, Poetic_type $poetic_type)
    {
        $this->poemModel       = $poem;
        $this->poeticTypeModel = $poetic_type;
        $this->poetModel       = $poet;
    }

    public function index()
    {
        $poems = $this->getAllPoems();
        return view('admin.poem.index', compact('poems'));
    }

    public function create(): Factory|View|Application
    {
        $poets       = $this->getAllPoet();
        $poeticTypes = $this->getAllPoeticTypes();

        return view('admin.poem.create', compact('poets', 'poeticTypes'));
    }

    public function store($request): Redirector|Application|RedirectResponse
    {
        $this->poemModel::create([
            'title'           => $request->title,
            'body'            => $request->body,
            'description'     => $request->description,
            'verses_count'    => $request->verses_count,
            'poet_id'         => $request->poet,
            'poetic_type_id'  => $request->poetic_type
        ]);

        Alert::success('success', 'Poem Added Successfully');
        return redirect(route('admin.poem.index'));
    }

    public function edit($poem)
    {
        $poets       = $this->getAllPoet();
        $poeticTypes = $this->getAllPoeticTypes();

        return view('admin.poem.edit', compact('poem','poets', 'poeticTypes'));
    }

    public function update($poem, $request)
    {
        $poem->update([
            'title'           => $request->title,
            'body'            => $request->body,
            'description'     => $request->description,
            'verses_count'    => $request->verses_count,
            'poet_id'         => $request->poet,
            'poetic_type_id'  => $request->poetic_type
        ]);

        Alert::success('success', 'Poem Updated Successfully');
        return redirect(route('admin.poem.index'));

    }

    public function delete($poem)
    {
        $poem->destroy($poem->id);
        Alert::success('success', 'Poem Deleted Successfully');
        return back();
    }
}
