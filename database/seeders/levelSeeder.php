<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class levelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'judul'     => 'Level 1 (Looping)',
            'power'     => '0',
            'img'       => 'materi.png',
            'token'     => 'qwe123',
            'materi'    => '-',
            'soal'      => '-',
            'jwbA'      => '-',
            'jwbB'      => '-',
            'jwbC'      => '-',
            'jwbD'      => '-',
            'jwbBenar'  => '-'
        ]);
        Level::create([
            'judul'     => 'Level 2 (Branching)',
            'power'     => '1',
            'img'       => 'materi1.png',
            'token'     => 'rty456',
            'materi'    => '-',
            'soal'      => '-',
            'jwbA'      => '-',
            'jwbB'      => '-',
            'jwbC'      => '-',
            'jwbD'      => '-',
            'jwbBenar'  => '-'
        ]);
        Level::create([
            'judul'     => 'Level 3 (Function)',
            'power'     => '2',
            'img'       => 'materi2.png',
            'token'     => 'uio789',
            'materi'    => '-',
            'soal'      => '-',
            'jwbA'      => '-',
            'jwbB'      => '-',
            'jwbC'      => '-',
            'jwbD'      => '-',
            'jwbBenar'  => '-'
        ]);
        Level::create([
            'judul'     => 'Level 4 (Rekursif)',
            'power'     => '3',
            'img'       => 'materi.png',
            'token'     => 'asd234',
            'materi'    => '-',
            'soal'      => '-',
            'jwbA'      => '-',
            'jwbB'      => '-',
            'jwbC'      => '-',
            'jwbD'      => '-',
            'jwbBenar'  => '-'
        ]);
    }
}
