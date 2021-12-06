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
            $table->string('event_name',150);
            $table->string('aliases',15);
            $table->string('icon_url')->nullable(false);
            $table->enum('audience',['university','school']);
            $table->date('tm_time')->nullable(true);
            $table->enum('tm_method',['youtube','zoom'])->nullable(true);
            $table->integer('max_slot')->nullable(false);
            $table->date('register_time');
            $table->date('register_close');
            $table->timestamps();
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