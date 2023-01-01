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
        Schema::create('collection_items', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_collection');
            $table->foreign('id_collection')
                ->references('id')->on('money_collections')
                ->cascadeOnDelete();

            $table->string('name', 50);
            $table->decimal('price', 10);
            $table->decimal('count', 6, 3);
            $table->string('comment', 500);

            $table
                ->boolean('is_approved')
                ->default(false)
                ->comment('After add item in list, and review votes, you need to (un)approve the item');

            $table->comment('Something like menu. A list of selected products, purchases, etc.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_items');
    }
};
