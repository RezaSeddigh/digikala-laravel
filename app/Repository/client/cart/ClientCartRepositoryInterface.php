<?php

namespace App\Repository\client\cart;

interface ClientCartRepositoryInterface
{
    public function updateCartQuantity($itemId, $action);
    public function getCartWithCalculations();
}
