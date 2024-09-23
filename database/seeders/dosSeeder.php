<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nip'       => '3712849562',
            'nama'      => 'septianto',
            'password'  => Hash::make('12345')
        ]);
        Dosen::create([
            'nip'       => '3712849537',
            'nama'      => 'yudhistira',
            'password'  => Hash::make('67890')
        ]);
    }
}
