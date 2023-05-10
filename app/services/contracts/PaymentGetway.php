<?php

namespace App\services\contracts;

interface PaymentGetway
{
    public function create($order);
}
