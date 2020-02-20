<?php

use Illuminate\Database\Seeder;

class OpdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opd')->insert([
            'nama_opd' => 'Sekretariat Daerah'
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Sekretariat DPRD'
            ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Inspektorat Daerah'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Badan Pengelola Keuangan Daerah'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Badan Kepegawaian Pendidikan Dan Pelatihan'
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Badan Kesatuan Bangsa Dan Politik'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Badan Penanggulangan Bencana Daerah'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Badan Perencanaan Penelitian Dan Pengembangan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Koperasi Usaha Kecil Menengah Dan Perdagangan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Lingkungan Hidup'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Pekerjaan Umum Dan Penataan Ruang Kota'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Penanaman Modal, Tenaga Kerja Dan Pelayanan Terpadu Satu Pintu'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Pemuda, Olahraga Dan Pariwisata'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Pendidikan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Perhubungan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Pemadam Kebakaran Dan Penyelamatan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Kesehatan Dan Keluarga Berencana'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Perpustakaan Dan Kearsipan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Sosial, Pemberdayaan Perempuan Dan Pemberdayaan Masyarakat'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Perumahan, Kawasan Permukiman Dan Pertahanan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Kependudukan Dan Catatan Sipil'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Ketahanan Pangan, Perikanan Dan Pertanian'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Dinas Komunikasi Informatika Dan Statistik'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Kecamatan Bontang Utara'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Kecamatan Bontang Selatan'    
          ]);
          DB::table('opd')->insert([
              'nama_opd' => 'Kecamatan Bontang Barat'    
          ]);
    }
}
