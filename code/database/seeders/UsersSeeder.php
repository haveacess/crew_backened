<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Анна', 'email' => 'call-me-ann@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Ангелина', 'email' => 'you-pretty-friend@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Егор', 'email' => 'egor.egor@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Настя', 'email' => 'nastya.s@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Света', 'email' => 'svetlana.f@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Андрей', 'email' => 'andreeeev19@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Катя', 'email' => 'you.kate@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Надежда', 'email' => 'frolova.n@facebook.com', 'joined_at' => Carbon::now()],
            ['name' => 'Кристина', 'email' => 'give.me.feedback@bestcorp.com', 'joined_at' => Carbon::now()],
            ['name' => 'Диана', 'email' => 'di@gmail.com', 'joined_at' => Carbon::now()],
            ['name' => 'Дмитрий', 'email' => 'antonov.d@gmail.com', 'joined_at' => '2022-12-27 11:01:11'],

        ]);
    }
}
