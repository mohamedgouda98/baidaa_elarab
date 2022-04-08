<?php
namespace App\Http\Traits;

trait CountryTrait
{
    private function getAllCountries()
    {
        return $this->countryModel::get();
    }

    private function getCountryById($id)
    {
        return $this->countryModel::findOrFail($id);
    }
}
