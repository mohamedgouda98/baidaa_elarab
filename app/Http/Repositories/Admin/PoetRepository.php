<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\PoetInterface;
use App\Http\Traits\CountryTrait;
use App\Http\Traits\EraTrait;
use App\Http\Traits\PoetTrait;
use App\Http\Traits\Upload;
use App\Models\Country;
use App\Models\era;
use App\Models\Poet;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PoetRepository implements PoetInterface
{
    use PoetTrait, CountryTrait, EraTrait, Upload;

    private Poet $poetModel;
    private Country $countryModel;
    private era $eraModel;

    public function __construct(Poet $poet, Country $country, era $era)
    {
        $this->poetModel    = $poet;
        $this->countryModel = $country;
        $this->eraModel     = $era;
    }

    public function index(): Factory|View|Application
    {
        $poets = $this->getAllPoet();

        return view('admin.poet.index', compact('poets'));
    }

    public function create(): Factory|View|Application
    {
        $countries = $this->getAllCountries();
        $eras      = $this->getAllEras();

        return \view('admin.poet.create', compact('countries', 'eras'));
    }

    public function store($request): Redirector|Application|RedirectResponse
    {

        $file = $request->file('image');
        $fileName = time(). '.' .$file->extension();
        $this->uploadFile($file, $fileName, 'poets');

        $this->poetModel::create([
            'name'            => $request->name,
            'special'         => $request->special,
            'description'     => $request->description,
            'era_id'          => $request->era,
            'country_id'      => $request->country,
            'image'           => $fileName
        ]);

        Alert::success('success', 'Poet Added Successfully');
        return redirect(route('admin.poet.index'));
    }

    public function edit($poet)
    {
        $countries = $this->getAllCountries();
        $eras      = $this->getAllEras();

        return \view('admin.poet.edit', compact('poet', 'countries', 'eras'));
    }

    public function update($poet, $request): Redirector|Application|RedirectResponse
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time(). '.' .$file->extension();
            $this->deleteFile('public/poets/'.$poet->image)  ;
            $this->uploadFile($file, $fileName, 'poets');
        }
        $poet->update([
            'name'            => $request->name,
            'special'         => $request->special,
            'description'     => $request->description,
            'era_id'          => $request->era,
            'country_id'      => $request->country,
            'image'           => $fileName ?? $poet->image
        ]);
        Alert::success('success', 'Poet Updated Successfully');
        return redirect(route('admin.poet.index'));
    }

    public function delete($poet): RedirectResponse
    {
        $this->deleteFile('public/poets/' . $poet->image);
        $poet->destroy($poet->id);
        Alert::success('success', 'Poet Deleted Successfully');
        return back();
    }
}
