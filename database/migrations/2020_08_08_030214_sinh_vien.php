<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sinh_vien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->increments('ma_sinh_vien');
            $table->String('ten_sinh_vien',100);
            $table->String('email',100);
            $table->boolean('gioi_tinh');
            $table->date('ngay_sinh');
            $table->string('dia_chi',100);
            $table->String('sdt',12);
            $table->integer('ma_lop')->unsigned();
            $table->foreign('ma_lop')->references('ma_lop')->on('lop');
            $table->boolean('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sinhvien');
    }
}
