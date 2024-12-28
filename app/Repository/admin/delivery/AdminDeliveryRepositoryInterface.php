<?php

namespace App\Repository\admin\delivery;

interface AdminDeliveryRepositoryInterface
{
    public function submit($formData,$deliveryId);
}
