<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            // 外野席
            [
                'name' => 'ピザーラエクスプレス',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pink dot.',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '築地場外市場神宮球場店',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '塚田農場スタンド',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HUB',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'だんまや水産',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'フレッシュネスバーガー',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '鉄板酒場 鐡一',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '大阪焼肉・ホルモン ふたご',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '利久 GUTS LAND',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ルウ・ジャパン',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '築地銀だこ TOKYO STADIUM',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '売り子',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'スタジアム売店',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '特設売店',
                'area_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 内野席
            [
                'name' => "選手グルメのお店 ~Player's Kitchen",
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '築地銀だこ',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'キッチンくるりんぱ 内野店',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'つばめ食堂',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '欅 けやき',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'うどんとぼんた',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '丼とぼんた',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '黒ぶたやシュウマイとぶた丼',
                'area_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ウインナーとビールのお店',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'サーティワンアイスクリーム',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'スタジアムカレー',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ポテトマニア',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '売り子',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'スタジアム売店',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '特設売店',
                'area_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 球場外
            [
                'name' => 'くるりんぱキッチンカー',
                'area_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ハッピーケバブ',
                'area_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '鬼の担々麺',
                'area_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'アスレキッチン',
                'area_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '青空キッチン',
                'area_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'くるりんぱキッチンカー',
                'area_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
