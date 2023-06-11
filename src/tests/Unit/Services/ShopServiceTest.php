<?php

namespace Tests\Unit\Domain\ValueObjects;

use App\Domain\Entities\Shop;
use App\Domain\ValueObjects\ShopName;
use App\Infrastructure\ShopRepository;
use App\Services\ShopService;
use InvalidArgumentException;
use Mockery;
use PHPUnit\Framework\TestCase;

/**
 * 店サービスクラスのテストクラス
 * 
 */
class ShopServiceTest extends TestCase
{

    /**
     * すでに同名の店がある場合、trueを返すこと
     */
    public function testExistsReturnsTrueWhenNameIsDuplicated()
    {
        $given_shop_name = 'テスト店名';
        $shop_name = new ShopName($given_shop_name);
        // 登録済みの店
        $existing_shop = new Shop($shop_name);
        // 新規登録したい店
        $new_shop = new Shop($shop_name);

        // モックの作成
        $mock_shop_repository = $this->getMockBuilder(ShopRepository::class)
            ->onlyMethods(['findOrNull']) // setMethodsは非推奨
            ->getMock();
        // 登録済みの店を返すようにする
        $mock_shop_repository->expects($this->once())
            ->method('findOrNull')
            ->willReturn($existing_shop);

        // 同名の店があるかをチェックする処理の実行
        $shop_service = new ShopService($mock_shop_repository);
        $result = $shop_service->exists($new_shop);

        $this->assertTrue($result);
    }

    /**
     * 同名の店がない場合、falseを返すこと
     */
    public function testExistsReturnFalseWhenNameIsNOTDuplicated()
    {
        // 新規登録しようとしている店
        $new_shop_name = new ShopName('新しい店名');
        $new_shop = new Shop($new_shop_name);
        
        // モックの作成
        $mock_shop_repository = $this->getMockBuilder(ShopRepository::class)
            ->onlyMethods(['findOrNull'])
            ->getMock();
        // メソッドの返り値の設定
        $mock_shop_repository->expects($this->once())
            ->method('findOrNull')
            ->willReturn(null);

        $shop_service = new ShopService($mock_shop_repository);
        $result = $shop_service->exists($new_shop);

        $this->assertFalse($result);
    }

}