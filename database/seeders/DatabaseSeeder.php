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
            'name'=>'nabil',
            'email'=>'nabil@gmail.com',
            'password'=> bcrypt('nabil')
        ]);
        
        Peserta::create([
            'posisi'=>"left wing",
            'levelpemain'=> 'pemula',
            'user_id'=>1
        ]);
        kategori_artikel::create([
            'nama_kategori'=>'Hasil Pertandingan'
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
            'status'=>false
        ]);

        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'2',
            'status'=>false
        ]);

        Statistik::create([
            'peserta_id'=>'2',
            'jadwal_id'=>'3',
            'status'=>true
        ]);
        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'3',
            'status'=>false
        ]);

        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'4',
            'status'=>false
        ]);

        Statistik::create([
            'peserta_id'=>'2',
            'jadwal_id'=>'4',
            'status'=>true
        ]);
        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'5',
            'status'=>false
        ]);

        Statistik::create([
            'peserta_id'=>'1',
            'jadwal_id'=>'6',
            'status'=>false
        ]);

        Statistik::create([
            'peserta_id'=>'2',
            'jadwal_id'=>'5',
            'status'=>true
        ]);
    }
}
