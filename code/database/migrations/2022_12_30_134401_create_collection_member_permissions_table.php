<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_member_permissions', function (Blueprint $table) {
            $table->primary(['id_collection', 'id_user', 'id_permission'], 'id');

            $table->unsignedInteger('id_collection');
            $table->foreign('id_collection')
                ->references('id')->on('money_collections');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->cascadeOnDelete();

            $table->unsignedInteger('id_permission');
            $table->foreign('id_permission')
                ->references('id')->on('member_permissions')
                ->cascadeOnDelete();

            $table->boolean('is_allowed')->default(false);

            $table->comment('List of permissions (edit menu, invite new people, etc.) for member in the collection.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_member_permissions');
    }
};
