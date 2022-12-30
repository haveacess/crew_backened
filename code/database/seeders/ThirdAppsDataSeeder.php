<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThirdAppsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('third_apps_data')->insert([
            [
                'id_user' => 1,
                'id_app' => ThirdAppsSeeder::APP_TG_ID,
                'field' => 'chat_id',
                'value' => '111111111'
            ],
            [
                'id_user' => 3,
                'id_app' => ThirdAppsSeeder::APP_TG_ID,
                'field' => 'chat_id',
                'value' => '222222212'
            ],
            [
                'id_user' => 4,
                'id_app' => ThirdAppsSeeder::APP_TG_ID,
                'field' => 'chat_id',
                'value' => '99128377'
            ],
            [
                'id_user' => 7,
                'id_app' => ThirdAppsSeeder::APP_TG_ID,
                'field' => 'chat_id',
                'value' => '333333333'
            ],
        ]);
    }
}
