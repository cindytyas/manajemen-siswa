<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => 'Cindy Syaira Ayu Ningtyas',
            'nip' => '0934468',
            'place_of_birth' => 'Malang',
            'date_of_birth' => '2005-04-21',
            'address' => 'Jl. Mastrip Gg. Sirsak',
            'photo' => 'cin.jpg',
            'position' => 'Guru normada',
            'gender' => 'Perempuan',
            'religion' => 'Islam'
        ]);
    }
}
