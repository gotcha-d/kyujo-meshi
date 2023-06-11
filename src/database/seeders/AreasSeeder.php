<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            [
                'name' => '内野席',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '外野席',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => '球場外',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
