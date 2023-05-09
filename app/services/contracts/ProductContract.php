<?php

namespace App\services\contracts;

interface ProductContract
{
    public function create($request);
    public function update($request, $product);
    public function delete($product);
}
