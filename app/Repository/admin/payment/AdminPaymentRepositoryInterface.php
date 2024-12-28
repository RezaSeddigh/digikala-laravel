<?php

namespace App\Repository\admin\payment;

interface AdminPaymentRepositoryInterface
{
    public function submit($formData,$paymentId);
}
