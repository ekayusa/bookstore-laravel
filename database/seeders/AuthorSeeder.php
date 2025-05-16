<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'Pramoedya Ananta Toer',
                'bio' => 'Pramoedya adalah sastrawan besar Indonesia yang dikenal lewat tetralogi "Buru", termasuk novel "Bumi Manusia". Ia dikenal karena karya-karya yang penuh kritik sosial dan sejarah.'
            ],
            [
                'name' => 'Sapardi Djoko Damono',
                'bio' => 'Sapardi adalah penyair terkenal Indonesia yang dikenal lewat puisi "Hujan Bulan Juni". Karya-karyanya sering mengangkat tema cinta dan keindahan alam.'
            ],
            [
                'name' => 'Tere Liye',
                'bio' => 'Tere Liye adalah penulis novel best-seller Indonesia yang dikenal dengan karya-karya seperti "Rindu", "Pulang", dan "Bumi". Ia memiliki gaya penulisan yang sederhana namun menyentuh.'
            ],
            [
                'name' => 'Andrea Hirata',
                'bio' => 'Andrea Hirata adalah penulis novel "Laskar Pelangi" yang sangat terkenal dan mengangkat kisah inspiratif dari Belitung. Karyanya telah diterjemahkan ke berbagai bahasa.'
            ],
            [
                'name' => 'Ayu Utami',
                'bio' => 'Ayu Utami adalah penulis perempuan Indonesia yang dikenal lewat novel "Saman", yang dianggap membuka wacana sastra Indonesia modern tentang seksualitas dan politik.'
            ],
            [
                'name' => 'Habiburrahman El Shirazy',
                'bio' => 'Penulis populer yang dikenal dengan karya-karya bernuansa religi seperti "Ayat-Ayat Cinta" yang telah diadaptasi menjadi film sukses.'
            ],
            [
                'name' => 'Dee Lestari',
                'bio' => 'Dee Lestari adalah penulis, penyanyi, dan pencipta lagu yang populer lewat serial novel "Supernova" dan "Perahu Kertas". Karyanya banyak mengangkat tema filsafat dan spiritualitas.'
            ]
        ]);
    }
}
