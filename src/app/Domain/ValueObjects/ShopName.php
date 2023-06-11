<?php

namespace App\Domain\ValueObjects;

use InvalidArgumentException;

/**
 * 店名値オブジェクト
 * 
 */
class ShopName
{
    private const MAX_LENGTH = 30;

    private string $value;

    public function __construct($value)
    {
        if (empty($value) || mb_strlen($value) > self::MAX_LENGTH) {
            throw new InvalidArgumentException('店名は1文字以上30文字以下である必要があります。');
        }
        $this->value = $value;
    }

    /**
     * 店名の文字列を返却する
     * 
     * @return string $value
     */
    public function value()
    {
        return $this->value;
    }
}