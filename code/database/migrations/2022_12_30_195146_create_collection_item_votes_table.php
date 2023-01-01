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
        Schema::create('collection_item_votes', function (Blueprint $table) {
            $table->primary(['id_collection', 'id_user', 'id_item'], 'id');

            $table->unsignedInteger('id_collection');
            $table->foreign('id_collection')
                ->references('id')->on('money_collections');

            $table->unsignedInteger('id_user');
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->cascadeOnDelete();

            $table->unsignedInteger('id_item');
            $table->foreign('id_item')
                ->references('id')->on('collection_items')
                ->cascadeOnDelete();

            $table
                ->boolean('is_agree')
                ->nullable(true)
                ->comment('null -> did not vote, 0 -> disagreed, 1 -> agreed');

            $table->comment('List of votes for item by someone in the collection');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_item_votes');
    }
};
