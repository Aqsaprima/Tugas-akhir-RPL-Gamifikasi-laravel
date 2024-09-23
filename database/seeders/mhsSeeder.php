<?php

namespace Database\Seeders;

use App\Models\Mhs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class mhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mhs::create([
            'npm'       => '22081010314',
            'nama'      => 'suwito',
            'password'  => Hash::make('220403'),
            'power'     => 0
        ]);
        Mhs::create([
            'npm'       => '22081010263',
            'nama'      => 'faiq',
            'password'  => Hash::make('130604'),
            'power'     => 0
        ]);
        Mhs::create([
            'npm'       => '22081010184',
            'nama'      => 'daniel',
            'password'  => Hash::make('301103'),
            'power'     => 0
        ]);
    }
}
