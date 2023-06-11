<?php

namespace App\Domain\Repositories;

use App\Domain\ValueObjects\ShopName;

interface IShopRepository
{
    public function findOrNull(ShopName $shop_name);

}