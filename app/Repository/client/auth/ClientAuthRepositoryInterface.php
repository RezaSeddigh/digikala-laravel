<?php

namespace App\Repository\client\auth;

interface ClientAuthRepositoryInterface
{
    public function checkUser($gmailUser);
}
