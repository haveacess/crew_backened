<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collection_items')->insert([
            [
                'id_collection' => 1,
                'name' => 'Аренда дома',
                'price' => 9000,
                'count' => 3,
                'comment' => 'тут мы будем жить'
            ],
            [
                'id_collection' => 1,
                'name' => 'Красивые девочки',
                'price' => 0,
                'count' => 5,
                'comment' => 'Бесценно!'
            ],
            [
                'id_collection' => 1,
                'name' => 'Торт',
                'price' => 45,
                'count' => 2,
                'comment' => 'это наша еда'
            ],
            [
                'id_collection' => 1,
                'name' => 'Jack Daniels',
                'price' => 60,
                'count' => 15,
                'comment' => 'этого парня и так все знают'
            ],
            [
                'id_collection' => 1,
                'name' => 'Интересный комик',
                'price' => 120000,
                'count' => 1,
                'comment' => 'пусть рассказывает нам шутки'
            ],
        ]);
    }
}
