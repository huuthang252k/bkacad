<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lop', function (Blueprint $table) {
            $table->Increments('ma_lop');
            $table->String('ten_lop');
            $table->integer('ma_khoa')->unsigned();
            $table->foreign('ma_khoa')->references('ma_khoa')->on('khoa');
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
        Schema::dropIfExists('lop');
    }
}
