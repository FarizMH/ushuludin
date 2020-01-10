<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title></title>
	<link rel="shortcut icon" href="img/uin.png" type="image/x-icon" />
    <!-- Bootstrap -->
   

  </head>
<body onload="  window.print()" >
	<style type="text/css">
th{
            font-size: 12pt;
        }
        td{
            font-size: 12pt;
        }

h1{
  font-family: sans-serif;
}

table.asd {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}

table.asd th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}

table.asd th:first-child{  
  border-left:none;  
}

table.asd tr {
  text-align: center;
  padding-left: 20px;
}

table.asd td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}

table.asd td {
    color: black;
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}

table.asd tr:last-child td {
  border-bottom: 0;
}

table.asd tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}

table.asd tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}

table.asd tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
	</style>

<div class="book">
	    <div class="page" id="page">
	        <div id="sub">
            <center>
            <table border=0>
            <tr>
                <td width="200px">
                <img src="/img/uin.jpg" height="100" width="75">
            </td>
            <td>
             <center><p>
            <h2><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA<br>
            UNIVERSITAS ISLAM NEGERI (UIN)<br>
            SUNAN GUNUNG DJATI BANDUNG<br>
            FAKULTAS USHULUDDIN <br></b></h2>
            Jl. AH. Nasution No. 105, Cibiru Kota Bandung 40614  Telp. (022)7802275  Fax. (022) 7802275 - 7803936 <br>
            Website: http://www.uinsgd.ac.id  E-mail: Contact@uinsgd.ac.id
            </p></center>
        </td>
        <td width="200px"></td>
    </tr>
    </table></center><hr>



			<center><h1><u>BIODATA DOSEN</u></h1> </center>
            <table class="asd" border=0 cellspacing='0'>
        	<tr>
            	<td>Foto</td>
            	<td><img src="{{url($dosen->photo)}}" width = " 354px " height="472px"></td>
        	</tr>
        	<tr>
            	<td>Nama</td>
            	<td>{{$dosen->name}}</td>
        	</tr>
        	<tr>
            	<td>NIP </td>
            	<td>{{$dosen->nip}}</td>
        	</tr>
        	<tr>
            	<td>Tanggal Lahir</td>
            	<td>{{$dosen->tgl_lahir}}</td>
        	</tr>
        	<tr>
            	<td>Tempat Lahir</td>
            	<td>{{$dosen->tempat_lahir}}</td>
        	</tr>
        	<tr>
            	<td>Jenis Kelamin</td>
            	<td>{{$dosen->jk}}</td>
        	</tr>
        	<tr>
            	<td>Agama</td>
            	<td>{{$dosen->agama}}</td>
        	</tr>
        	<tr>
            	<td>Status Pernikahan</td>
            	<td>{{$dosen->s_nikah}}</td>
        	</tr>
        	<tr>
            	<td>Status Kepegawaian</td>
            	<td>{{$dosen->s_kepegawaian}}</td>
        	</tr>
        	<tr>
            	<td>Jenis Kepegawaian</td>
            	<td>{{$dosen->jenis_kepegawaian}}</td>
        	</tr>
        	<tr>
            	<td>Satuan Kerja</td>
            	<td>{{$dosen->satuan_kerja}}</td>
        	</tr>
        	<tr>
            	<td>Jabatan Terakhir</td>
            	<td>{{$dosen->jabatan_terakhir}}</td>
        	</tr>
        	<tr>
            	<td>Pendidikan Terakhir</td>
            	<td>{{$dosen->pendidikan_terakhir}}</td>
        	</tr>
        	<tr>
            	<td>Gol / Ruang</td>
            	<td>{{$dosen->gol_ruang}}</td>
        	</tr>
        	<tr>
            	<td>Satuan Organisai</td>
            	<td>{{$dosen->satuan_organisasi}}</td>
        	</tr>
        	<tr>
            	<td>Kgb Terakhir</td>
            	<td>{{$dosen->kgb_terakhir}}</td>
        	</tr>
        	<tr>
            	<td>Nomor Kepagawaian</td>
            	<td>{{$dosen->nomor_kepegawaian}}</td>
        	</tr>
        	<tr>
            	<td>Alamat Rumah</td>
            	<td>{{$dosen->alamat_rumah}}</td>
        	</tr>
        	<tr>
            	<td>No Telepon</td>
            	<td>{{$dosen->no_tlp}}</td>
        	</tr>
        	<tr>
            	<td>Jurusan</td>
            	<td>{{$dosen->jurusan}}</td>
        	</tr>
        	<tr>
            	<td>Fakultas</td>
            	<td>{{$dosen->fakultas}}</td>
        	</tr>
	</table>

	<p> <b>Riwayat Pendidikan</b> </p>
	<table class="asd" border=1>
        <tr>
            <td>Tingkat</td>
            <td>Sekolah / PT</td>
            <td>Faultas</td>
            <td>Jurusan</td>
            <td>Tahun Lulus</td>
            <td>Sumber Dana</td>
            <td>Tempat</td>
        </tr>
        @foreach($pendidikan as $data)
        <tr>
        	<td>{{$data->tingkat_pendidikan}}</td>
            <td>{{$data->nama_sekolah_pt}}</td>
            <td>{{$data->fakultas}}</td>
            <td>{{$data->jurusan}}</td>
            <td>{{$data->tahun_lulus}}</td>
            <td>{{$data->sumber_dana}}</td>
            <td>{{$data->tempat}}</td>
        </tr>
        @endforeach
</table>

<p><b> Kursus Latihan</b></p>
<table class="asd" border=1>
        <tr>
            <td>Nama Kursus / Latihan</td>
            <td>periode</td>
            <td>Jam</td>
            <td>Hari</td>
            <td>Bulan</td>
            <td>Tahun</td>
            <td>Tempat</td>
            <td>Sumber Dana</td>
            <td>Penyelenggara</td>
        </tr>
        @foreach ($kursus as $data)
        <tr>
        	<td>{{$data->nama_kursus_latihan}}</td>
            <td>{{$data->periode}}</td>
            <td>{{$data->jam}}</td>
            <td>{{$data->hari}}</td>
            <td>{{$data->bulan}}</td>
            <td>{{$data->tahun}}</td>
            <td>{{$data->tempat}}</td>
            <td>{{$data->sumber_dana}}</td>
            <td>{{$data->penyelenggara}}</td>
        </tr>
        @endforeach
</table>

<p><b>Riwayat Kepangkatan</b></p>
<table class="asd" border=1>
        <tr>
            <td>Jenis SK</td>
            <td>Pangkat</td>
            <td>Gol / Ruang</td>
            <td>No SK</td>
            <td>Tgl SK</td>
            <td>TMT SK</td>
            <td>Gaji Pokok</td>
            <td>PAK</td>
        </tr>
        
        @foreach ($kepangkatan as $data)
        <tr>
        	<td>{{$data->jenis_sk}}</td>
            <td>{{$data->pangkat}}</td>
            <td>{{$data->gol_ruang}}</td>
            <td>{{$data->no_sk}}</td>
            <td>{{$data->tgl_sk}}</td>
            <td>{{$data->tmt_sk}}</td>
            <td>{{$data->gaji}}</td>
            <td>{{$data->pak}}</td>
        </tr>
        @endforeach
</table>

<p><b>Riwayat Jabatan</b></p>
<table class="asd" border=1>
        <tr>
            <td>Jabatan</td>
            <td>TMT</td>
            <td>Gol / Ruang</td>
            <td>Gaji Pokok</td>
            <td>Surat Keputusan</td>
        </tr>
        @foreach ($jabatan as $data)
        <tr>
        	<td>{{$data->jabatan}}</td>
            <td>{{$data->tmt}}</td>
            <td>{{$data->gol_ruang}}</td>
            <td>{{$data->gaji_pokok}}</td>
            <td>{{$data->surat_keputusan}}</td>
            
        </tr>
        @endforeach
</table>
<p><b>Tanda Jasa / Penghargaan</b></p>
<table class="asd" border=1>
        <tr>
            <td>Jenis</td>
            <td>Nama Penghargaan</td>
            <td>Tahun</td>
            <td>Pemberi</td>
        </tr>
        @foreach ($jasa as $data)
        <tr>
        	<td>{{$data->jenis}}</td>
            <td>{{$data->nama_tanda_jasa_penghargaan}}</td>
            <td>{{$data->tahun}}</td>
            <td>{{$data->pemberi}}</td>
        </tr>
        @endforeach
</table>

<p><b>Kunjungan Luar Negeri</b></p>
<table class="asd" border=1>
        <tr>
            <td>Negara</td>
            <td>Tahun</td>
            <td>Lamanya</td>
            <td>Yang Membiayai</td>
        </tr>
        @foreach($kunjungan as $data)
        <tr>
        	<td>{{$data->negara}}</td>
            <td>{{$data->tahun}}</td>
            <td>{{$data->lamanya}}</td>
            <td>{{$data->yg_membiayai}}</td>
        </tr>
        @endforeach
</table>

<p><b>Pengalaman Mengajar</b></p>
<table class="asd" border=1>
        <tr>
            <td>Kode MK</td>
            <td>Nama Mata Kuliah</td>
            <td>Jenjang</td>
            <td>Jurusan</td>
            <td>Tahun Akademik</td>
            <td>Semester</td>
            <td>Mulai</td>
        </tr>
        @foreach ($pengalaman as $data)
        <tr>
            <td>{{$data->kode_mk}}</td>
            <td>{{$data->nama_mk}}</td>
            <td>{{$data->jenjang}}</td>
            <td>{{$data->jurusan}}</td>
            <td>{{$data->tahun_akademik}}</td>
            <td>{{$data->semester}}</td>
            <td>{{$data->rentang_mulai}}</td>
        </tr>

        <tr> <td>Selesa</td>
            <td>SK Mengajar</td>
            <td>Tanggal SK</td>
            <td>Jam</td>
            <td>Ruang</td>
            <td>Mengajar Bersama</td>
            <td>Beban SKS</td>
        </tr>
        @foreach($pengalaman as $data)
        <tr>
            <td>{{$data->rentang_akhir}}</td>
            <td>{{$data->sk_mengajar}}</td>
            <td>{{$data->tgl_sk}}</td>
            <td>{{$data->jam}}</td>
            <td>{{$data->ruang}}</td>
            <td>{{$data->mengajar_bersama}}</td>
            <td>{{$data->sks}}</td>
        </tr>
        @endforeach

        


        @endforeach
</table>
<p><b> Pengalaman Kegiatan</b></p>
<table class="asd" border=1>
        <tr>
            <td>Jenis Kegiatan</td>
            <td>Judul Kegiatan</td>
            <td>Penyelenggara</td>
        </tr>
        @foreach ($kegiatan as $data)
        <tr>
        	<td>{{$data->jenis}}</td>
            <td>{{$data->judul_kegiatan}}</td>
            <td>{{$data->penyelenggara}}</td>
        </tr>
        @endforeach
        
</table>

<p><b>Pengalaman Bimbingan</b></p>
<table class="asd" border=1>
        <tr>
            <td>Jenis Bimbingan</td>
            <td>Nama Mahasiswa</td>
            <td>SK</td>
            <td>Tanggal Mulai</td>
            <td>Tanggal Selesai</td>
            <td>Jumlah Pertemuan</td>
        </tr>
        @foreach ($bimbingan as $data)
        <tr>
        	<td>{{$data->jenis_bimbingan}}</td>
        	<td>{{$data->nama_mahasiswa}}</td>
            <td>{{$data->sk}}</td>
            <td>{{$data->tgl_mulai}}</td>
            <td>{{$data->tgl_akhir}}</td>
            <td>{{$data->jml_pertemuan}}</td>
        </tr>
        @endforeach
</table>

<p><b>Penilitan</b></p>
<table class="asd" border=1>
        <tr>
            <td>Tahun</td>
            <td>Judul Penelitian</td>
            <td>Jabatan</td>
            <td>Sumber Dana</td>
        </tr>
        @foreach ($penelitian as $data)
        <tr>
        	<td>{{$data->tahun}}</td>
        	<td>{{$data->judul_penelitian}}</td>
            <td>{{$data->jabatan}}</td>
            <td>{{$data->sumber_dana}}</td>
        </tr>
        @endforeach
</table>

<p><b>Karya Ilmiah</b></p>
<table class="asd" border=1>
        <tr>
            <td>Jenis Karya Ilmiah</td>
            <td>Tahun</td>
            <td>Judul</td>
            <td>Penyelenggara</td>
        </tr>
        @foreach ($karya as $data)
        <tr>
        	<td>{{$data->jenis}}</td>
        	<td>{{$data->tahun}}</td>
            <td>{{$data->judul}}</td>
            <td>{{$data->penyelenggara}}</td>
        </tr>
        @endforeach
</table>
<p><b>Data Keluarga</b></p>
<table class="asd" border=1>
        <tr>
            <td>Nama</td>
            <td>Tgl Lahir</td>
            <td>Tempat Lahir</td>
            <td>Tgl Nikah</td>
            <td>Pekerjaan</td>
            <td>Keterangan</td>
        </tr>
        @foreach($keluarga as $data)
        <tr>
        	<td>{{$data->nama}}</td>
        	<td>{{$data->tgl_lahir}}</td>
            <td>{{$data->tempat_lahir}}</td>
            <td>{{$data->tgl_nikah}}</td>
            <td>{{$data->pekerjaan}}</td>
            <td>{{$data->keterangan}}</td>
        </tr>
        @endforeach
</table>
<p><b>Data Anak</b></p>
<table class="asd" border=1>
        <tr>
            <td>Nama</td>
            <td>Tgl Lahir</td>
            <td>Tempat Lahir</td>
            <td>Tgl Nikah</td>
            <td>Pekerjaan</td>
            <td>Keterangan</td>
        </tr>
        @foreach($anak as $data)
        <tr>
        	<td>{{$data->nama}}</td>
        	<td>{{$data->tgl_lahir}}</td>
            <td>{{$data->tempat_lahir}}</td>
            <td>{{$data->tgl_nikah}}</td>
            <td>{{$data->pekerjaan}}</td>
            <td>{{$data->keterangan}}</td>
        </tr>
        @endforeach
</table>
<p><b>Data Orang Tua</b></p>
<table class="asd" border=1>
        <tr>
            <td>Nama</td>
            <td>Tgl Lahir</td>
            <td>Pekerjaan</td>
            <td>Sebagai</td>
            <td>Ketarangan</td>
            
        </tr>
        @foreach($orangtua as $data)
        <tr>
        	<td>{{$data->nama}}</td>
        	<td>{{$data->tgl_lahir}}</td>
            <td>{{$data->pekerjaan}}</td>
            <td>{{$data->jenis}}</td>
            <td>{{$data->keterangan}}</td>
            
        </tr>
        @endforeach
</table>
<p> <b>Saudara Kandung</b> </p>
<table class="asd" border=1>
        <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Tgl Lahir</td>
            <td>Pekerjaan</td>
            <td>Keterangan</td>
            
        </tr>
        @foreach($saudara as $data)
        <tr>
        	<td>{{$data->nama}}</td>
        	<td>{{$data->jk}}</td>
            <td>{{$data->tgl_lahir}}</td>
            <td>{{$data->pekerjaan}}</td>
            <td>{{$data->keterangan}}</td>
            
        </tr>
        @endforeach
</table>

<p><b>Keterangan Organisasi</b></p>
<table class="asd" border=1>
        <tr>
            <td>Nama Organisasi</td>
            <td>Kedudukan</td>
            <td>Periode</td>
            <td>Tempat</td>
            <td>Nama Pimpinan</td>
            
        </tr>
        @foreach ($organisasi as $data)
        <tr>
        	<td>{{$data->jenis}}</td>
        	<td>{{$data->nama_organisasi}}</td>
            <td>{{$data->kedudukan}}</td>
            <td>{{$data->tempat}}</td>
            <td>{{$data->nama_pimpinan}}</td>
            
        </tr>
        @endforeach
</table>

	</div>
	</div>
