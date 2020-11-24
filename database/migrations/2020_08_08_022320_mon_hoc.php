<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon', function (Blueprint $table) {
            $table->increments('ma_mon');
            $table->String('ten_mon',100);
            $table->integer('ma_nganh')->unsigned();
            $table->foreign('ma_nganh')->references('ma_nganh')->on('nganh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mon_hoc');
    }
}
