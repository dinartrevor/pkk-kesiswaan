<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftareskulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftareskul', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('kelas');
            $table->unsignedBigInteger('jurusan_id');
            $table->string('nomer_telepone');
            $table->text('alasan');
            $table->foreign('jurusan_id')->references('id')->on('jurusan')->onDelete('cascade');
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
        Schema::dropIfExists('daftareskul');
    }
}
