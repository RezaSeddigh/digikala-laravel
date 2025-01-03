<?php

namespace App\Repository\admin\delivery;

use App\Models\DeliveryMethod;

class AdminDeliveryRepository implements AdminDeliveryRepositoryInterface
{
    public function submit($formData, $deliveryId)
    {
        DeliveryMethod::query()->updateOrCreate(
            [
                'id' => $deliveryId
            ]
            ,
            [
                'name' => $formData['name'],
                'price' => $formData['price'],
            ]
        );
    }
}
