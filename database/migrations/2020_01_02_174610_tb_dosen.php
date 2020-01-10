<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbDosen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_users', function (Blueprint $table) {
            
            $table->bigInteger('nip')->unique()->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('jk')->nullable();
            $table->string('agama')->nullable();
            
            $table->string('s_nikah')->nullable();
            $table->string('s_kepegawaian')->nullable();
            $table->string('jenis_kepegawaian')->nullable();
            $table->string('satuan_kerja')->nullable();
            $table->string('jabatan_terakhir')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('gol_ruang')->nullable();
            $table->string('satuan_organisasi')->nullable();
            $table->string('kgb_terakhir')->nullable();
            $table->string('nomor_kepegawaian')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('fakultas')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_dosen');
    }
}
