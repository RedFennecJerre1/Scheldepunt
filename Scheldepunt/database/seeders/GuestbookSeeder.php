<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LatestNews;

class GuestbookSeeder extends Seeder
{
    public function run()
    {
        LatestNews::create([
            'user_name' => 'John Doe',
            'title' => 'Amazing experience',
            'img' => 'https://via.placeholder.com/150',
            'content' => 'This is an example review content.'
        ]);
    }
}
