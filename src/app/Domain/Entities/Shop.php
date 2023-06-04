<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\ShopName;
use InvalidArgumentException;

class Shop
{
    var $name;
    
    public function __construct(ShopName $name)
    {  
        if (is_null($name)) throw new InvalidArgumentException();

        $this->name = $name;
    }

}