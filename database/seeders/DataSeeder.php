<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User
        User::create([
            'kode' => 'ADMIN01',
            'fullname' => 'Administrator',
            'username' => 'Admin',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'join_date' => date('Y-m-d'),
            'foto' => '',
            'verif' => 'verified',
        ]);

        User::create([
            'kode' => 'A001',
            'nis' => '112233',
            'fullname' => 'Neina Rahma Sari',
            'username' => 'Neina',
            'password' => Hash::make('password'),
            'kelas' => 'XII RPL',
            'alamat' => 'Jakarta',
            'role' => 'user',
            'join_date' => date('Y-m-d'),
            'foto' => '',
            'verif' => 'verified',
        ]);

        User::create([
            'kode' => 'A002',
            'nis' => '223344',
            'fullname' => 'Sava Raisya Ferdinal',
            'username' => 'Sava',
            'password' => Hash::make('password'),
            'kelas' => 'XII RPL',
            'alamat' => 'Jakarta',
            'role' => 'user',
            'join_date' => date('Y-m-d'),
            'foto' => '',
            'verif' => 'verified',
        ]);

        // Kategori
        Kategori::create([
            'kode' => 'umum',
            'nama' => 'Umum'
        ]);

        Kategori::create([
            'kode' => 'sains',
            'nama' => 'Sains'
        ]);

        Kategori::create([
            'kode' => 'sejarah',
            'nama' => 'Sejarah'
        ]);

        // Penerbit
        Penerbit::create([
            'kode' => 'erlangga',
            'nama' => 'Erlangga'
        ]);

        Penerbit::create([
            'kode' => 'gramedia',
            'nama' => 'Gramedia'
        ]);

        Penerbit::create([
            'kode' => 'mediakita',
            'nama' => 'Media Kita'
        ]);

        // Buku
        Buku::create([
            'judul' => 'Bumi Series',
            'kategori_id' => 1,
            'penerbit_id' => 1,
            'pengarang' => 'Tere Liye',
            'tahun_terbit' => '2023',
            'isbn' => '112233',
            'j_buku_baik' => '30',
            'j_buku_rusak' => '10',
            'foto' => ''
        ]);

        Buku::create([
            'judul' => 'Teori Big Bang',
            'kategori_id' => 2,
            'penerbit_id' => 2,
            'pengarang' => 'Tasnya',
            'tahun_terbit' => '2023',
            'isbn' => '223344',
            'j_buku_baik' => '30',
            'j_buku_rusak' => '10',
            'foto' => ''
        ]);

        Buku::create([
            'judul' => 'Terbentuknya BPUPKI',
            'kategori_id' => 3,
            'penerbit_id' => 3,
            'pengarang' => 'Nino',
            'tahun_terbit' => '2023',
            'isbn' => '334455',
            'j_buku_baik' => '30',
            'j_buku_rusak' => '10',
            'foto' => ''
        ]);

        // Pesan
        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 1,
            'judul' => 'Kembalikan Buku',
            'isi' => 'lorem ipsum dolar sit amet',
            'status' => 'terkirim',
            'tanggal_kirim' => date('Y-m-d')
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Kembalikan Buku',
            'isi' => 'lorem ipsum dolar sit amet',
            'status' => 'terkirim',
            'tanggal_kirim' => date('Y-m-d')
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 3,
            'judul' => 'Kembalikan Buku',
            'isi' => 'lorem ipsum dolar sit amet',
            'status' => 'terkirim',
            'tanggal_kirim' => date('Y-m-d')
        ]);

        // Pemberitahuan
        Pemberitahuan::create([
            'isi' => 'Server sedang maintenance',
            'status' => 'nonaktif'
        ]);

        Pemberitahuan::create([
            'isi' => 'Sedang ada renovasi gedung',
            'status' => 'aktif'
        ]);

        // Identitas
        Identitas::create([
            'nama_app' => 'E-Perpustakaan',
            'alamat_app' => 'Jalan Mayjen Sutoyo',
            'email_app' => 'perpus@gmail.com',
            'nomor_hp' => '087840260498',
            'foto' => ''
        ]);
    }
}
