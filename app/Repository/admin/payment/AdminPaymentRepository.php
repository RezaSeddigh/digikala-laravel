<?php

namespace App\Repository\admin\payment;

use App\Models\PaymentMethod;

class AdminPaymentRepository implements AdminPaymentRepositoryInterface
{
    public function submit($formData, $paymentId)
    {
        PaymentMethod::query()->updateOrCreate([

            'id' => $paymentId,
        ],
            [
                'name' => $formData['name'],
                'merchent_id' => $formData['merchentId'],
            ]
        );
    }
}
