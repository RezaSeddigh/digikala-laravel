<?php

namespace App\Repository\admin\country;

use App\Models\Country;

class AdminCountryRepository implements AdminCountryRepositoryInterface
{
    public function submit($formData, $countryId)
    {
        Country::query()->updateOrCreate(
            [
                'id' => $countryId,
            ],
            [
                'name' => $formData['name']
            ]);
    }
}
