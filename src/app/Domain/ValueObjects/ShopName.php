<?php

namespace App\Domain\ValueObjects;

use InvalidArgumentException;

class ShopName
{
    private const MAX_LENGTH = 30;
    
    private $value;

    public function __construct($value)
    {
        if (empty($value) || mb_strlen($value) > self::MAX_LENGTH) {
            throw new InvalidArgumentException('店名は1文字以上30文字以下である必要があります。');
        }
        $this->value = $value;
    }
}