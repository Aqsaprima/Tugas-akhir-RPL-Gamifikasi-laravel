<?php

namespace Database\Seeders;

use App\Models\Peri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class periSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peri::create([
            'kata'  => 'Halo ,Petualang Pemberani! Aku adalah peri yang telah terjebak di sini selama bertahun-tahun, aku menunggu seseorang sepertimu untuk datang dan mengalahkan bos tersembunyi yang sangat jahat itu. Dunia ini sangat bergantung padamu. Aku ada di sini untuk membimbing dan membantumu memahami tantangan yang ada di setiap lantai dungeon ini.'
        ]);
        Peri::create([
            'kata'  => 'Dungeon ini terdiri dari empat lantai yang dipenuhi tantangan coding yang harus kamu selesaikan. Aku akan menjelaskan setiap lantai untukmu.'
        ]);
        Peri::create([
            'kata'  => 'Di lantai pertama, kamu akan dihadapkan dengan berbagai tantangan yang mengharuskanmu untuk menggunakan looping, seperti for loop, while loop, dan do-while loop. Kuasai konsep ini untuk melanjutkan perjalananmu.'
        ]);
        Peri::create([
            'kata'  => 'Di lantai kedua, tantangan branching menantimu. Kamu harus bisa menggunakan percabangan seperti if, else if, dan switch untuk membuat keputusan berdasarkan kondisi tertentu. Ini penting untuk menyusun logika yang kompleks.'
        ]);
        Peri::create([
            'kata'  => 'Lantai ketiga adalah tentang fungsi. Kamu perlu memahami cara membuat dan memanggil fungsi, serta konsep parameter dan return value. Fungsi akan membantumu mengatur kode menjadi lebih mudah dipahami.'
        ]);
        Peri::create([
            'kata'  => 'Dan di lantai terakhir, tantangan rekursif. Rekursi adalah konsep yang kuat dan penting dalam pemrograman. Kamu harus bisa menulis fungsi yang memanggil dirinya sendiri untuk menyelesaikan masalah yang kompleks.'
        ]);
        Peri::create([
            'kata'  => 'Tolonglah, petualang, aku sangat ingin bebas dari dungeon ini dan kembali ke dunia luar. Hanya dengan mengalahkan bos tersembunyi, kita berdua bisa bebas. Ayo, dunia mengandalkanmu. Bersiaplah dan buktikan bahwa kamu adalah yang terpilih!'
        ]);
    }
}
