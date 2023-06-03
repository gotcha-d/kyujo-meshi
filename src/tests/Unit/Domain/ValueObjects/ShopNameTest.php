<?php

namespace Tests\Unit\Domain\ValueObjects;

use App\Domain\ValueObjects\ShopName;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

/**
 * 値オブジェクトShopNameのテストクラス
 * 
 */
class ShopNameTest extends TestCase
{
    /**
     * コンスタラクタ引数が30文字以上のとき、例外が発生すること
     *
     * @return void
     */
    public function testConstructErrorIfValueIsOver30chars()
    {   
        // 期待する例外
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('店名は30文字以下である必要があります。');

        $given_name = 'あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほま';
        // 例外を発生させる
        $shop_name = new ShopName($given_name);
    }

    /**
     * コンストラクタ引数が29文字の場合は正常にインスタンス作成されること
     * 
     * @doesNotPerformAssertions
     */
    public function testConstructSuccessIfValueIs30chars()
    {
        // @doesNotPerformAssertions をつけないとリスキーテスト警告される
        $given_name = 'あいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほ';
        $shop_name = new ShopName($given_name);
    }

}
