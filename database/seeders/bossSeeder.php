<?php

namespace Database\Seeders;

use App\Models\Bos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bos::create([
            'kata'  => 'BOSS: Ha ha ha! Manusia bodoh, kau benar-benar berpikir bisa mengalahkanku? Aku telah menunggu sesorang yang cukup berani, tetapi sepertinya kau hanya akan menjadi hiburan singkat bagiku.'
        ]);
        Bos::create([
            'kata'  => 'BOSS : Ayo buktikan kalau aku salah! Tapi ingat aku tidak akan menunjukan belas kasihan, persiapkan dirimu untuk kekalahan yang memalukan.'
        ]);
    }
}
