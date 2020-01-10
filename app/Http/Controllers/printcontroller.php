<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use CRUDBooster;
class printcontroller extends Controller
{
	public function print(){
		echo "print profil <a href='".url("print/".CRUDBooster::myId())."'> print </a> ";
	}
    public function index($id){
    	$tableDosen=DB::table('cms_users')->where('id',$id)->get();
    	$tableAnak=DB::table('tb_anak')->where('dosen_id',$id)->get();
    	$tableKeluarga=DB::table('tb_keluarga')->where('dosen_id',$id)->get();
    	$tableOrangTua=DB::table('tb_orang_tua')->where('dosen_id',$id)->get();
    	$tableSaudara=DB::table('tb_saudara_kandung')->where('dosen_id',$id)->get();
    	$tablePendidikan=DB::table('tb_riwayat_pendidikan')->where('dosen_id',$id)->get();
    	$tableKursus=DB::table('tb_kursus_latihan')->where('dosen_id',$id)->get();
    	$tableKepangkatan=DB::table('tb_riwayat_kepangkatan')->where('dosen_id',$id)->get();
    	$tableJabatan=DB::table('tb_riwayat_jabatan')->where('dosen_id',$id)->get();
    	$tableJasa=DB::table('tb_tanda_jasa_penghargaan')->where('dosen_id',$id)->get();
    	$tableKunjungan=DB::table('tb_kunjungan_luar_negeri')->where('dosen_id',$id)->get();
    	$tablePengalaman=DB::table('tb_pengalaman_mengajar')->where('dosen_id',$id)->get();
    	$tableKegiatan=DB::table('tb_pengalaman_kegiatan')->where('dosen_id',$id)->get();
    	$tableBimbingan=DB::table('tb_pengalaman_membingbing')->where('dosen_id',$id)->get();
    	$tablePenelitian=DB::table('tb_pengalaman_penelitian')->where('dosen_id',$id)->get();
    	$tableKarya=DB::table('tb_karya_ilmiah')->where('dosen_id',$id)->get();
    	$tableOrganisasi=DB::table('tb_ket_organisasi')->where('dosen_id',$id)->get();
    	// print_r($tableOrganisasi);
    	return view('print' )
    			->with('dosen',$tableDosen[0])
    			->with('anak',$tableAnak)
    			->with('keluarga',$tableKeluarga)
    			->with('orangtua',$tableOrangTua)
    			->with('saudara',$tableSaudara)
    			->with('pendidikan',$tablePendidikan)
    			->with('kursus',$tableKursus)
    			->with('kepangkatan',$tableKepangkatan)
    			->with('jabatan',$tableJabatan)
    			->with('jasa',$tableJasa)
    			->with('kunjungan',$tableKunjungan)
    			->with('pengalaman',$tablePengalaman)
    			->with('kegiatan',$tableKegiatan)
    			->with('bimbingan',$tableBimbingan)
    			->with("penelitian",$tablePenelitian)
    			->with('karya',$tableKarya)
                ->with('organisasi',$tableOrganisasi);
    }

}
