<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'highlight' => 'The largest and most well-known towel & linen suppliers in Indonesia',
            'about_desc' => '360 Hotel Supply is dedicated to providing comprehensive solutions for the hospitality and service industries, prioritizing user comfort and enhancing every guest experience through premium products.',
            'about_poin1' => json_encode(['Point 1', 'Point 2', 'Point 3']),
            'about_poin2' => json_encode(['Point 1', 'Point 2', 'Point 3']),
            'leader_pict' => 'abouts/testimonials-5.jpg',
            'leader_name' => 'Full Name',
            'phone' => '62821',
            'history' => 'Our commitment is to uphold quality and professionalism at every step, providing you with reliable service that you can continue to trust.',
            'brand' => json_encode(['Brand 1', 'Brand 2', 'Brand 3']),
            'vision' => 'Becoming an innovative and reliable hotel supply solutions provider...',
            'mission' => json_encode(['Mission 1', 'Mission 2']),
            'address' => 'Jl. Hos Cokroaminoto No. 100, Padang, Indonesia',
            'wa_sumatera' => '62821',
            'wa_jawa' => '62821',
            'email' => 'info@example.com',
            'operational' => 'Mon - Sat, 09.00 - 17.00',
            'twitter' => 'https://x.com/',
            'facebook' => 'https://x.com/',
            'instagram' => 'https://x.com/',
            'linkedin' => 'https://x.com/',
        ]);

    }
}
