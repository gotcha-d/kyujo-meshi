<?php

namespace App\Domain\ValueObjects;

use InvalidArgumentException;

class ShopName
{
    private $value;

    public function __construct($value)
    {
        if (empty($value) || mb_strlen($value) > 30) {
            throw new InvalidArgumentException('店名は1文字以上30文字以下である必要があります。');
        }
        $this->value = $value;
    }
}