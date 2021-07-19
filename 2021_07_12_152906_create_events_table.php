<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id')->constrained();
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->string('type');
            $table->string('location');
            $table->date('when');
            $table->time('starts');
            $table->string('duration');
            $table->char('status');
            $table->integer('store');
            $table->integer('pkids');
            $table->integer('padults');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
