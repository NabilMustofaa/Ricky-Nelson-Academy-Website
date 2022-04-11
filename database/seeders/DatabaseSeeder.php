<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;
use App\Models\User;
use App\Models\Statistik;
use App\Models\Peserta;

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

        Jadwal::create([
            'namaJadwal'=>"Latihan minggu 1",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalWaktu'=>"2022-03-10 19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Latihan minggu 2",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalWaktu'=>"2022-03-17 19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Tanding minggu 2",
            'typeJadwal'=> 'Tanding',
            'levelJadwal'=>'Pemula',
            'tanggalWaktu'=>"2022-03-22 19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Tanding minggu 3",
            'typeJadwal'=> 'Tanding',
            'levelJadwal'=>'Pemula',
            'tanggalWaktu'=>"2022-03-25 19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Latihan minggu 3",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalWaktu'=>"2022-03-27 19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Latihan Ulang minggu 3",
            'typeJadwal'=> 'Latihan',
            'levelJadwal'=>'Pemula',
            'tanggalWaktu'=>"2022-03-29 19:00"
        ]);
        Jadwal::create([
            'namaJadwal'=>"Tanding minggu 4",
            'typeJadwal'=> 'Tanding',
            'levelJadwal'=>'Pemula',
            'tanggalWaktu'=>"2022-03-31 19:00"
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
