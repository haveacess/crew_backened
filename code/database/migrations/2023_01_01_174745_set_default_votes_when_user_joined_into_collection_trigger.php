<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    const TRIGGER_NAME = 'set_default_votes_when_user_joined_into_collection';

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
            AFTER INSERT ON `collection_members` FOR EACH ROW
            BEGIN
             INSERT IGNORE INTO collection_item_votes
             (`id_collection`, `id_user`, `id_item`, `is_agree`)

             SELECT NEW.id_collection, NEW.id_user, col_itms.id, null FROM collection_items as col_itms
             WHERE col_itms.id_collection=NEW.id_collection;
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
