<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\PoetInterface;
use App\Http\Traits\CountryTrait;
use App\Http\Traits\PoetTrait;
use App\Models\Country;
use App\Models\Poet;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class PoetRepository implements PoetInterface
{
    use PoetTrait, CountryTrait;

    private Poet $poetModel;
    private Country $countryModel;

    public function __construct(Poet $poet, Country $country)
    {
        $this->poetModel    = $poet;
        $this->countryModel = $country;
    }

    public function index(): Factory|View|Application
    {
        $poets = $this->getAllPoet();

        return view('admin.poet.index', compact('poets'));
    }

    public function create(): Factory|View|Application
    {
        $countries = $this->getAllCountries();

        return \view('admin.poet.create', compact('countries'));
    }

    public function store($request)
    {
        $this->poetModel::create([
            'name'        => $request->name,
            'birthday'    => $request->birthday,
            'title'       => $request->title,
            'info'        => $request->info,
            'country_id'  => $request->country
        ]);

        Alert::success('success', 'Poet Added Successfully');
        return redirect(route('admin.poet.index'));
    }

    public function edit($poet)
    {
        $countries = $this->getAllCountries();

        return \view('admin.poet.edit', compact('poet', 'countries'));
    }

    public function update($poet, $request)
    {
        if ($poet) {
            $poet->update([
                'name'        => $request->name,
                'birthday'    => $request->birthday,
                'title'       => $request->title,
                'info'        => $request->info,
                'country_id'  => $request->country
            ]);
        }

        Alert::success('success', 'Poet Updated Successfully');
        return redirect(route('admin.poet.index'));
    }

    public function delete($poet)
    {
        if ($poet) {
            $poet->destroy($poet->id);
        }
        Alert::success('success', 'Poet Deleted Successfully');
        return back();
    }
}
