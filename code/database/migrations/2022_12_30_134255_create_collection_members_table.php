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
        Schema::create('collection_members', function (Blueprint $table) {
            $table->primary(['id_collection', 'id_user']);

            $table->unsignedInteger('id_collection');
            $table->foreign('id_collection')
                ->references('id')->on('money_collections')
                ->cascadeOnDelete();

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->cascadeOnDelete();

            $table->comment('List of members joined in the collection');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_members');
    }
};
