<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GuestReview;

class GuestReviewSeeder extends Seeder
{
    public function run()
    {
        GuestReview::create([
            'user_name' => 'John Doe',
            'content' => 'This is a sample guest review.',
        ]);
    }
}
