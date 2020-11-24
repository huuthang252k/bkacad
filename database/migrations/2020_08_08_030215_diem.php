<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Diem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diem', function (Blueprint $table) {
            $table->integer('ma_sinh_vien')->unsigned();
            $table->foreign('ma_sinh_vien')->references('ma_sinh_vien')->on('sinh_vien');
            $table->integer('ma_mon')->unsigned();
            $table->foreign('ma_mon')->references('ma_mon')->on('mon');
            $table->String('diem_lan_1',10);
            $table->String('diem_lan_2',10);
            $table->boolean('kieu_diem',2);
            $table->primary(['ma_sinh_vien','ma_mon','kieu_diem']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diem');
    }
}
