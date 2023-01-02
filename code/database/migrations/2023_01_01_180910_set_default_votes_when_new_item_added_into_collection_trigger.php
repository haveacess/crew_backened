<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TRIGGER_NAME = 'set_default_votes_when_new_item_added_into_collection';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $params = [
            ':trigger_name' => self::TRIGGER_NAME
        ];

        DB::unprepared(
            strtr('CREATE TRIGGER :trigger_name
            AFTER INSERT ON `collection_items` FOR EACH ROW
            BEGIN
             INSERT IGNORE INTO collection_item_votes
             (`id_collection`, `id_user`, `id_item`, `is_agree`)

             SELECT NEW.id_collection, col_members.id_user, NEW.id, null
             FROM collection_members as col_members
             WHERE col_members.id_collection=NEW.id_collection;
            END', $params)
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared(
            strtr('DROP TRIGGER `:trigger_name`', ['trigger_name' => self::TRIGGER_NAME])
        );
    }
};
