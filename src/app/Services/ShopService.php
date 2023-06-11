<?php

namespace App\Services;

use App\Domain\Entities\Shop;
use App\Domain\Repositories\IShopRepository;
use App\Domain\ValueObjects\ShopName;

class ShopService
{
    private IShopRepository $shop_repository;

    public function __construct(IShopRepository $shop_repository)
    {
        $this->shop_repository = $shop_repository;
    }

    /**
     * 同名の店があることを検証する
     * 
     * @return bool 存在する場合true
     */
    public function exists(Shop $shop)
    {
        $shop_name = $shop->getName();
        
        if ($this->shop_repository->findOrNull($shop_name)) {
            return true;
        }

        return false;
    }
} 