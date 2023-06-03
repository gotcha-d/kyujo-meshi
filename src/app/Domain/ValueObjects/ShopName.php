<?php

namespace App\Domain\ValueObjects;

use InvalidArgumentException;

class ShopName
{
    private $value;

    public function __construct($value)
    {
        if (mb_strlen($value) > 30) {
            throw new InvalidArgumentException('店名は30文字以下である必要があります。');
        }
        $this->value = $value;
    }
}