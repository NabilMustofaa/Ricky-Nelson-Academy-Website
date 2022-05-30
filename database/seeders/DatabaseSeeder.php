<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\User;
use App\Models\Statistik;
use App\Models\Peserta;
use App\Models\Artikel;
use App\Models\kategori_artikel;
use App\Models\Pendaftaran;
use App\Models\Staff;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name'=>'Muhammad Nabil Mustofa',
            'email'=>'nabil@gmail.com',
            'password'=> bcrypt('nabil'),
            'isAdmin'=>1,
        ]);
        User::create([
            'name'=>'Muhammad Nabil Mustofa',
            'email'=>'nabiluser@gmail.com',
            'password'=> bcrypt('nabil'),
            'isAdmin'=>0,
        ]);
        Pendaftaran::create([
            'statusPembayaran'=>1,
            'batasPembayaran'=>"2022-07-10",
            'tempatLahir'=> "Surabaya",
            'tanggalLahir'=>"2006-06-01",
            'alamat'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sed consequuntur est impedit cumque doloremque quibusdam ratione deleniti culpa minus itaque, rerum minima, repellat, illum nostrum vero sit molestias porro."
        ]);
        Staff::create([
            'user_id'=>1,
            'Jabatan'=>'Kepala Pelatih',
            'NoHp'=>'085748969806',
            'Alamat'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sed consequuntur est impedit cumque doloremque quibusdam ratione deleniti culpa minus itaque, rerum minima, repellat, illum nostrum vero sit molestias porro.'
        ]);
        Peserta::create([
            'posisi'=>"Left Wing",
            'levelpemain'=> 'Pemula',
            'user_id'=>2,
            'pendaftaran_id'=>1,
            'umur'=>'18'
        ]);
        kategori_artikel::create([
            'nama_kategori'=>'Hasil Pertandingan'
        ]);
        kategori_artikel::create([
            'nama_kategori'=>'Tips Bermain'
        ]);


        Artikel::create([
            'kategori_id'=>1,
            'slug'=>'hasil-lawan-mitra',
            'judul_artikel'=>'Ricky Nelson Academy menang telak lawan Mitra',
            'highlight_artikel'=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque maxime deleniti error nostrum in soluta corrupti est",
            'isi_artikel'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nam adipisci numquam velit temporibus sunt, suscipit obcaecati officia quia ipsa sapiente nisi praesentium expedita odio accusantium optio, odit perspiciatis possimus Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quam tenetur maxime nisi quod quasi, quo soluta ratione vitae accusantium beatae dignissimos nulla voluptate cupiditate repellat odit repudiandae explicabo vero!",
        ]);

        Artikel::create([
            'kategori_id'=>1,
            'slug'=>'hasil-lawan-solo',
            'judul_artikel'=>'Ricky Nelson Academy tertahan imbang di Solo',
            'highlight_artikel'=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque maxime deleniti error nostrum in soluta corrupti est",
            'isi_artikel'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nam adipisci numquam velit temporibus sunt, suscipit obcaecati officia quia ipsa sapiente nisi praesentium expedita odio accusantium optio, odit perspiciatis possimus Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, quam tenetur maxime nisi quod quasi, quo soluta ratione vitae accusantium beatae dignissimos nulla voluptate cupiditate repellat odit repudiandae explicabo vero!",
        ]);


        Jadwal::create([
            'namaJadwal'=>"Latihan minggu 1",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalJadwal'=>"2022-03-10",
            'waktuJadwal'=>"19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Latihan minggu 2",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalJadwal'=>"2022-03-10",
            'waktuJadwal'=>"19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Tanding minggu 2",
            'typeJadwal'=> 'Tanding',
            'levelJadwal'=>'Pemula',
            'tanggalJadwal'=>"2022-03-10",
            'waktuJadwal'=>"19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Tanding minggu 3",
            'typeJadwal'=> 'Tanding',
            'levelJadwal'=>'Pemula',
            'tanggalJadwal'=>"2022-03-10",
            'waktuJadwal'=>"19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Latihan minggu 3",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalJadwal'=>"2022-03-10",
            'waktuJadwal'=>"19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Latihan Ulang minggu 3",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalJadwal'=>"2022-03-10",
            'waktuJadwal'=>"19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Tanding minggu 4",
            'typeJadwal'=> 'Tanding',
            'levelJadwal'=>'Pemula',
            'tanggalJadwal'=>"2022-03-10",
            'waktuJadwal'=>"19:00"
        ]);

        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'1',
            'status'=>0
        ]);

        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'2',
            'status'=>0
        ]);

        Statistik::create([
            'peserta_id'=>'2',
            'jadwal_id'=>'3',
            'status'=>1
        ]);
        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'3',
            'status'=>0
        ]);

        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'4',
            'status'=>1
        ]);

        Statistik::create([
            'peserta_id'=>'2',
            'jadwal_id'=>'4',
            'status'=>1
        ]);
        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'5',
            'status'=>0
        ]);

        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'6',
            'status'=>0
        ]);

        Statistik::create([
            'peserta_id'=>'2',
            'jadwal_id'=>'5',
            'status'=>1
        ]);
    }
}
