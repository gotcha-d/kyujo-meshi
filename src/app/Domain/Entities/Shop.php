<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\ShopName;
use InvalidArgumentException;

class Shop
{
    private ShopName $name;

    public function __construct(ShopName $name)
    {  
        if (is_null($name)) throw new InvalidArgumentException();

        $this->name = $name;
    }

    /**
     * 店名を変更する
     * 
     * @param ShopName $shop_name
     */
    public function changeShopName(ShopName $new_name) : void
    {
        $this->name = $new_name;
    }

    /**
     * 店名を取得する
     * 
     * @return ShopName
     */
    public function getName()
    {
        return $this->name;
    }

}