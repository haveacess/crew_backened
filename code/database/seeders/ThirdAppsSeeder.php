<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThirdAppsSeeder extends Seeder
{
    CONST APP_TG_ID = 1;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('third_apps')->insert(['id' => self::APP_TG_ID, 'name' => 'Telegram']);
    }
}
