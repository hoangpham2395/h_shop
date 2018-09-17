<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 256);
            $table->string('password', 64);
            $table->rememberToken();
            $table->string('name', 64);
            $table->string('phone', 20);
            $table->string('level', 1);
            $table->integer('ins_id')->length(10);
            $table->integer('upd_id')->length(10)->nullable();
            $table->timestamps();
            $table->string('del_flag', 1)->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
