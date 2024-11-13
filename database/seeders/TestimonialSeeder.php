<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'customer_name' => 'Ini Hotel',
                // 'customer_logo' => 'testimonials/client-1.png',
                'customer_review' => 'Good quality, my guests feel so comfort to stay in our hotel',
            ],
            [
                'customer_name' => 'Halo Hotel',
                // 'customer_logo' => 'testimonials/client-2.png',
                'customer_review' => 'This product was very awesome',
            ],
            [
                'customer_name' => 'Wkwk Hotel',
                // 'customer_logo' => 'testimonials/client-3.png',
                'customer_review' => 'Trusted store, their product was amazing',
            ],
        ];
        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
