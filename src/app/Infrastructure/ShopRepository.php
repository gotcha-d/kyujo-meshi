<?php

namespace App\Infrastructure;

use App\Domain\Entities\Shop;
use App\Domain\Repositories\IShopRepository;
use App\Domain\ValueObjects\ShopName;
use App\Models\Shop as EloquentShop;

/**
 * 店のDB操作をLaravelのEloquentで行う実装クラス
 * 
 */
class ShopRepository implements IShopRepository
{
    public function findOrNull(ShopName $shop_name)
    {
        return null;
    }

    public function create(Shop $shop)
    {
        // TODO:LaravelのEloquentモデルからエンティティに詰め替える
        $createdShop = EloquentShop::create(
            'id' => 
        )

        // 
        return null;
    }
}