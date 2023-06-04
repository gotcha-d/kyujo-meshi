<?php

namespace Tests\Unit\Domain\Entities;

use App\Domain\Entities\Shop;
use App\Domain\ValueObjects\ShopName;
use PHPUnit\Framework\TestCase;

class ShopTest extends TestCase
{
    /**
     * 店名クラスを引数に、正常にインスタンスが生成されること
     * 
     * @doesNotPerformAssertions
     */
    public function testConstructSuccess()
    {
        $name = new ShopName('テスト店名');
        $shop = new Shop($name);
    }
}
