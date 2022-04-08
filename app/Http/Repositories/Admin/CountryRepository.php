<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\CountryInterface;
use App\Http\Traits\CountryTrait;
use App\Models\Country;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use RealRashid\SweetAlert\Facades\Alert;

class CountryRepository implements CountryInterface
{
    use CountryTrait;

    private Country $countryModel;

    public function __construct(Country $country)
    {
        $this->countryModel = $country;
    }

    public function index(): Factory|View|Application
    {
        $countries = $this->getAllCountries();

        return view('admin.country.index', compact('countries'));
    }

    public function create(): Factory|View|Application
    {
        return \view('admin.country.create');
    }

    public function store($request)
    {
        $this->countryModel::create([
            'old_name'     => $request->old_name,
            'current_name' => $request->current_name,
        ]);

        Alert::success('success', 'Country Added Successfully');
        return redirect(route('admin.country.index'));
    }

    public function edit($country)
    {
        return \view('admin.country.edit', compact('country'));
    }

    public function update($country, $request): Redirector|Application|RedirectResponse
    {
        if ($country) {
            $country->update([
                'old_name' => $request->old_name,
                'current_name' => $request->current_name
            ]);
        }
        Alert::success('success', 'Country Updated Successfully');
        return redirect(route('admin.country.index'));
    }

    public function destroy($country): RedirectResponse
    {
        if ($country) {
            $country->destroy($country->id);
        }
        Alert::success('success', 'Country Deleted Successfully');
        return back();
    }
}
