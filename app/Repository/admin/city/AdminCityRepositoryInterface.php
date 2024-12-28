<?php

namespace App\Repository\admin\city;

interface AdminCityRepositoryInterface
{
    public function submit($formData, $cityId);
}
