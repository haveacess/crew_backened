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
        Schema::create('money_collections', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title', 25);
            // $table->unsignedInteger('id_items_list');

            $table->comment('Created collection by someone for split shared bill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('money_collections');
    }
};
