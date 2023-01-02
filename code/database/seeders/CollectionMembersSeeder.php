<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collection_members')->insert([
            ['id_collection' => 1, 'id_user' => 4],
            ['id_collection' => 1, 'id_user' => 5],
            ['id_collection' => 1, 'id_user' => 7]
        ]);
    }
}
