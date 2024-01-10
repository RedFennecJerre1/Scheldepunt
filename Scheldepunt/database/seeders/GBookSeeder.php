<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GBook;

class GBookSeeder extends Seeder
{
    public function run()
    {
        GBook::create([
            'gbookuser_name' => 'John Doe',
            'gbookcontent' => 'It was a nice stay in a beautiful city with a lot of things to do',
        ]);
    }
}
