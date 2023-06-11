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

    /**
     * 店名が変更されること
     * 
     */
    public function testChangeNameSuccess()
    {
        // 変更前の店
        $old_name = new ShopName('変更前の名前');
        $shop = new Shop($old_name);

        // 変更後の名前
        $new_name = new ShopName('変更後の名前');
        $shop->changeShopName($new_name);

        // 検証
        $this->assertEquals($new_name, $shop->getName());
    }

    /**
     * 店名が取得できること
     * 
     */
    public function testGetNameSuccess()
    {
        $shop_name = new ShopName('テスト店名');
        $shop = new Shop($shop_name);

        $this->assertEquals($shop_name, $shop->getName());
    }
}
