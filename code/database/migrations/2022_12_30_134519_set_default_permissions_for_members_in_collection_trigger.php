<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TRIGGER_NAME = 'set_default_permissions_for_members_in_collection';
    const COLLECTION_PERMISSION_PREFIX = 'collection.%';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $params = [
            ':trigger_name' => self::TRIGGER_NAME,
            ':collection_permission_prefix' => self::COLLECTION_PERMISSION_PREFIX
        ];

        DB::unprepared(
            strtr('CREATE TRIGGER :trigger_name
            AFTER INSERT ON `collection_members` FOR EACH ROW
            BEGIN
             INSERT IGNORE INTO collection_member_permissions
             (`id_collection`, `id_user`, `id_permission`, `is_allowed`)

             SELECT NEW.id_collection, NEW.id_user, mem_per.id, 0 from member_permissions as mem_per
             WHERE mem_per.name LIKE \':collection_permission_prefix%\';
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
