<?php

namespace App\Repository\admin\country;

interface AdminCountryRepositoryInterface
{
    public function submit($formData,$countryId);
}
