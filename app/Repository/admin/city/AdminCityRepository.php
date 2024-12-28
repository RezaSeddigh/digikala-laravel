<?php

namespace App\Repository\admin\city;

use App\Models\City;

class AdminCityRepository implements AdminCityRepositoryInterface
{
    public function submit($formData, $cityId)
    {
        City::query()->updateOrCreate(
            [
                'id' => $cityId,
            ],
            [
                'name' => $formData['name'],
                'state_id' => $formData['stateId'],
            ]);
    }
}
