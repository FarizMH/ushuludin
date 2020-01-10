<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbPengalamanMengajar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengalaman_mengajar', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dosen_id');
            $table->foreign('dosen_id')->references('id')->on('cms_users');
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->string('jenjang');
            $table->string('jurusan');
            $table->string('tahun_akademik');
            $table->string('semester');
            $table->date('rentang_mulai');
            $table->date('rentang_akhir');
            $table->string('sk_mengajar');
            $table->string('tgl_sk');
            $table->integer('jam');
            $table->string('ruang');
            $table->string('mengajar_bersama');
            $table->integer('sks');
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
        Schema::dropIfExists('tb_pengalaman_mengajar');
    }
}
