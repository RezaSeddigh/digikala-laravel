<?php

namespace App\Repository\admin\state;

interface AdminStateRepositoryInterface
{
    public function submit($formData, $stateId);
}
