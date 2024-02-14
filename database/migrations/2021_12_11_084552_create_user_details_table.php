<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('id_events')->references('id')->on('events')->onDelete('cascade');
            $table->foreignId('id_academy');
            $table->string('identity_code',20);
            $table->string('edu_stage');
            $table->date('birth_date');
            $table->string('phone');
            $table->string('gender');
            $table->string('department');
            $table->text('adress');
            $table->enum('consumsion',['vegetarian','normal']);
            $table->text('validation_1')->nullable();
            $table->text('validation_2')->nullable();
            $table->text('validation_3')->nullable();
            $table->text('validation_4')->nullable();
            $table->text('validation_5')->nullable();
            $table->enum('validation_status',['unactive','pending','active']);
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
        Schema::dropIfExists('user_details');
    }
}
