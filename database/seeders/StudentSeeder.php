<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++)
        
        Student :: create ([
            "nim" => "F1E123099$i",
            "name" => "Vallent Evelyne Yap ke-$i",
            "prodi" => "Sistem Informasi",
            "angkatan" => 2023 +$i,
            "alamat" => "Jambi"
        ]);

        Student :: create ([
            "nim" => str :: random (8),
            "name" => str :: random (20),
            "prodi" => str :: random (15),
            "angkatan" => rand(2000, 2024),
            "alamat" => str :: random (50),
        ]);    
    }
}
