<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableJadwalMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswa_id',false,true);
            $table->foreign('mahasiswa_id')->reference('id')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('ruangan_id',false,true);
            $table->foreign('ruangan_id')->reference('id')->on('ruangan')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('dosen_matakuliah',false,true);
            $table->foreign('dosen_matakuliah')->reference('id')->on('dosen_matakuliah')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('jadwal_matakuliah');
    }
}
