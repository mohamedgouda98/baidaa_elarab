<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\CountryInterface;
use App\Http\Requests\Admin\country\CountryStoreRequest;
use App\Http\Requests\Admin\country\CountryUpdateRequest;
use App\Models\Country;


class CountryController extends Controller
{
    private $countryInterface;

    public function __construct(CountryInterface $country)
    {
        $this->countryInterface = $country;
    }

    public function index()
    {
        return $this->countryInterface->index();
    }

    public function create()
    {
        return $this->countryInterface->create();
    }

    public function store(CountryStoreRequest $request)
    {
        return $this->countryInterface->store($request);
    }

    public function edit(Country $country)
    {
        return $this->countryInterface->edit($country);
    }

    public function update(Country $country, CountryUpdateRequest $request)
    {
        return $this->countryInterface->update($country, $request);
    }

    public function destroy(Country $country)
    {
        return $this->countryInterface->destroy($country);
    }
}
